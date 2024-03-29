<?php 
/**
 * Settings
 *
 * Displays and changes website settings 
 *
 * @package GetSimple
 * @subpackage Settings
 */

# setup inclusions
$load['plugin'] = true;
include('inc/common.php');

# variable settings
login_cookie_check();
$fullpath = suggest_site_path();
$file			= _id($USR) .'.xml';
$wfile 		= 'website.xml';
$data 		= getXML(GSUSERSPATH . $file);
$USR 			= stripslashes($data->USR);
$PASSWD 	= $data->PWD;
$EMAIL 		= $data->EMAIL;
$pwd1 =null;$error =null;$success=null;$pwd2 =null;$editorchck =null; $prettychck =null;

# if the undo command was invoked
if (isset($_GET['undo'])) { 
	# first check for csrf
	$nonce = $_GET['nonce'];
	if(!check_nonce($nonce, "undo")) {
		die("CSRF detected!");
	}
	# perform undo
	undo($file, GSUSERSPATH, GSBACKUSERSPATH);
	undo($wfile, GSDATAOTHERPATH, GSBACKUPSPATH.'other/');
	
	# redirect back to yourself to show the new restored data
	redirect('settings.php?restored=true');
}

# was this page restored?
if (isset($_GET['restored'])) { 
	$restored = 'true'; 
} else {
	$restored = 'false';
}

# was the form submitted?
if(isset($_POST['submitted'])) {
	
	# first check for csrf
	$nonce = $_POST['nonce'];
	if(!check_nonce($nonce, "save_settings")) {
		die("CSRF detected!");	
	}

	# website-specific fields
	if(isset($_POST['sitename'])) { 
		$SITENAME = htmlentities($_POST['sitename'], ENT_QUOTES, 'UTF-8'); 
	}
	if(isset($_POST['siteurl'])) { 
		$SITEURL = tsl($_POST['siteurl']); 
	}
	if(isset($_POST['permalink'])) { 
		$PERMALINK = $_POST['permalink']; 
	}	
	if(isset($_POST['template'])) { 
		$TEMPLATE = $_POST['template']; 
	}
	if(isset($_POST['prettyurls'])) {
	  $PRETTYURLS = $_POST['prettyurls'];
	} else {
		$PRETTYURLS = '';
	}
   
	# user-specific fields
	if(isset($_POST['user'])) { 
		$USR = strtolower($_POST['user']); 
	} 
	if(isset($_POST['email'])) { 
		$EMAIL = $_POST['email']; 
	} 
	if(isset($_POST['timezone'])) { 
		$TIMEZONE = $_POST['timezone']; 
	}
	if(isset($_POST['lang'])) { 
		$LANG = $_POST['lang']; 
	}
	if(isset($_POST['show_htmleditor'])) {
	  $HTMLEDITOR = $_POST['show_htmleditor']; 
	} else {
		$HTMLEDITOR = '';
	}
	
	
	# check to see if passwords are changing
	if(isset($_POST['sitepwd'])) { $pwd1 = $_POST['sitepwd']; }
	if(isset($_POST['sitepwd_confirm'])) { $pwd2 = $_POST['sitepwd_confirm']; }
	if ($pwd1 != $pwd2)	{
		#passwords do not match 
		$error = i18n_r('PASSWORD_NO_MATCH');
	} else {
		# password cannot be null
		if ( $pwd1 != '' ) { 
			$PASSWD = passhash($pwd1); 
		}	
		
		# create user xml file
		createBak($file, GSUSERSPATH, GSBACKUSERSPATH);
		if (file_exists(GSUSERSPATH . _id($USR).'.xml.reset')) { unlink(GSUSERSPATH . _id($USR).'.xml.reset'); }	
		$xml = new SimpleXMLElement('<item></item>');
		$xml->addChild('USR', $USR);
		$xml->addChild('PWD', $PASSWD);
		$xml->addChild('EMAIL', $EMAIL);
		$xml->addChild('HTMLEDITOR', $HTMLEDITOR);
		$xml->addChild('TIMEZONE', $TIMEZONE);
		$xml->addChild('LANG', $LANG);
		if (! XMLsave($xml, GSUSERSPATH . $file) ) {
			$error = i18n_r('CHMOD_ERROR');
		}
		
		# create website xml file
		createBak($wfile, GSDATAOTHERPATH, GSBACKUPSPATH.'other/');
		$xmls = new SimpleXMLExtended('<item></item>');
		$note = $xmls->addChild('SITENAME');
		$note->addCData($SITENAME);
		$note = $xmls->addChild('SITEURL');
		$note->addCData($SITEURL);
		$note = $xmls->addChild('TEMPLATE');
		$note->addCData($TEMPLATE);
		$xmls->addChild('PRETTYURLS', $PRETTYURLS);
		$xmls->addChild('PERMALINK', $PERMALINK);
		if (! XMLsave($xmls, GSDATAOTHERPATH . $wfile) ) {
			$error = i18n_r('CHMOD_ERROR');
		}

		# see new language file immediately
		include(GSLANGPATH.$LANG.'.php');
		
		if (!$error) {
			$success = i18n_r('ER_SETTINGS_UPD').'. <a href="settings.php?undo&nonce='.get_nonce("undo").'">'.i18n_r('UNDO').'</a>';
		}
		
	}
}

# are any of the control panel checkboxes checked?
if ($HTMLEDITOR != '' ) { $editorchck = 'checked'; }
if ($PRETTYURLS != '' ) { $prettychck = 'checked'; }

# get all available language files
$lang_handle = opendir(GSLANGPATH) or die("Unable to open ". GSLANGPATH);
if ($LANG == ''){ $LANG = 'en_US'; }
while ($lfile = readdir($lang_handle)) {
	if( is_file(GSLANGPATH . $lfile) && $lfile != "." && $lfile != ".." )	{
		$lang_array[] = basename($lfile, ".php");
	}
}
if (count($lang_array) != 0) {
	sort($lang_array);
	$count = '0'; $sel = ''; $langs = '';
	foreach ($lang_array as $larray){
		if ($LANG == $larray)	{ $sel="selected"; }
		$langs .= '<option '.$sel.' value="'.$larray.'" >'.$larray.'</option>';
		$sel = '';
		$count++;
	}
} else {
	$langs = '<option value="" selected="selected" >-- '.i18n_r('NONE').' --</option>';
}
?>

<?php get_template('header', cl($SITENAME).' &raquo; '.i18n_r('GENERAL_SETTINGS')); ?>
	<h1><a href="<?php echo $SITEURL; ?>" target="_blank" ><?php echo cl($SITENAME); ?></a> <span>&raquo;</span> <?php i18n('GENERAL_SETTINGS');?></h1>
	<?php include('template/include-nav.php'); ?>
	<?php include('template/error_checking.php'); ?>
<div class="bodycontent">
	
	<div id="maincontent">
		<form class="largeform" action="<?php myself(); ?>" method="post" accept-charset="utf-8" >
		<input id="nonce" name="nonce" type="hidden" value="<?php echo get_nonce("save_settings"); ?>" />
		
		<div class="main">
		<h3><?php i18n('WEBSITE_SETTINGS');?></h3>
		
		<div class="leftsec">
			<p><label for="sitename" ><?php i18n('LABEL_WEBSITE');?>:</label><input class="text" id="sitename" name="sitename" type="text" value="<?php if(isset($SITENAME1)) { echo stripslashes($SITENAME1); } else { echo stripslashes($SITENAME); } ?>" /></p>
		</div>
		<div class="rightsec">
			<p><label for="siteurl" ><?php i18n('LABEL_BASEURL');?>:</label><input class="text" id="siteurl" name="siteurl" type="text" value="<?php if(isset($SITEURL1)) { echo $SITEURL1; } else { echo $SITEURL; } ?>" /></p>
			<?php	if ( $fullpath != $SITEURL ) {	echo '<p style="margin:-15px 0 20px 0;color:#D94136;" >'.i18n_r('LABEL_SUGGESTION').': &nbsp; <code>'.$fullpath.'</code></p>';	}	?>
		</div>
		<div class="clear"></div>
		
		<div class="leftsec">
			<p><label for="permalink" ><?php i18n('PERMALINK');?>:</label><input class="text" name="permalink" id="permalink" type="text" value="<?php if(isset($PERMALINK)) { echo $PERMALINK; } ?>" /><br /><a href="http://get-simple.info/wiki/pretty_urls" style="" target="_blank" ><?php i18n('MORE');?></a></p>
		</div>
		<div class="clear"></div>
		
		<p class="inline" ><input name="prettyurls" id="prettyurls" type="checkbox" value="1" <?php echo $prettychck; ?>  /> &nbsp;<label for="prettyurls" ><?php i18n('USE_FANCY_URLS');?>.</label></p>
		
		<?php exec_action('settings-website-extras'); ?>
	
		
		<div id="profile" class="section" >
		<h3><?php i18n('SIDE_USER_PROFILE');?></h3>
		<div class="leftsec">
			<p><label for="user" ><?php i18n('LABEL_USERNAME');?>:</label><input class="text" id="user" name="user" type="text" readonly value="<?php if(isset($USR1)) { echo $USR1; } else { echo $USR; } ?>" /></p>
		</div>
		<div class="rightsec">
			<p><label for="email" ><?php i18n('LABEL_EMAIL');?>:</label><input class="text" id="email" name="email" type="text" value="<?php if(isset($EMAIL1)) { echo $EMAIL1; } else { echo $EMAIL; } ?>" /></p>
			<?php if (! check_email_address($EMAIL)) {
				echo '<p style="margin:-15px 0 20px 0;color:#D94136;" >'.i18n_r('WARN_EMAILINVALID').'</p>';
			}?>
		</div>
		<div class="clear"></div>
		<div class="leftsec">
			<p><label for="timezone" ><?php i18n('LOCAL_TIMEZONE');?>:</label>
			<?php if( (isset($_POST['timezone'])) ) { $TIMEZONE = $_POST['timezone']; } ?>
			<select class="text" id="timezone" name="timezone"> 
			<?php if ($TIMEZONE == '') { echo '<option value="" selected="selected" >-- '.i18n_r('NONE').' --</option>'; } else { echo '<option selected="selected"  value="'. $TIMEZONE .'">'. $TIMEZONE .'</option>'; } ?>
			<?php include('inc/timezone_options.txt'); ?>
			</select>
			</p>
		</div>
		<div class="rightsec">
			<p><label for="lang" ><?php i18n('LANGUAGE');?>:</label>
			<select name="lang" id="lang" class="text">
				<?php echo $langs; ?>
			</select><br /><a href="http://get-simple.info/wiki/languages" style="" target="_blank" ><?php i18n('MORE');?></a>
			</p>
		</div>
		<div class="clear"></div>
		<p class="inline" ><input name="show_htmleditor" id="show_htmleditor" type="checkbox" value="1" <?php echo $editorchck; ?> /> &nbsp;<label for="show_htmleditor" ><?php i18n('ENABLE_HTML_ED');?></label></p>
		
		<?php exec_action('settings-user-extras'); ?>
		
		<p style="margin:0px 0 5px 0;font-size:12px;color:#999;" ><?php i18n('ONLY_NEW_PASSWORD');?>:</p>
		<div class="leftsec">
			<p><label for="sitepwd" ><?php i18n('NEW_PASSWORD');?>:</label><input autocomplete="off" class="text" id="sitepwd" name="sitepwd" type="password" value="" /></p>
		</div>
		<div class="rightsec">
			<p><label for="sitepwd_confirm" ><?php i18n('CONFIRM_PASSWORD');?>:</label><input autocomplete="off" class="text" id="sitepwd_confirm" name="sitepwd_confirm" type="password" value="" /></p>
		</div>
		<div class="clear"></div>
		
		<p id="submit_line" >
			<span><input class="submit" type="submit" name="submitted" value="<?php i18n('BTN_SAVESETTINGS');?>" /></span> &nbsp;&nbsp;<?php i18n('OR'); ?>&nbsp;&nbsp; <a class="cancel" href="settings.php?cancel"><?php i18n('CANCEL'); ?></a>
		</p>

		</div><!-- /section -->
		</div><!-- /main -->
	</form>
	
	</div>




	
	<div id="sidebar" >
		<?php include('template/sidebar-settings.php'); ?>		
	</div>
	
	<div class="clear"></div>
	</div>
<?php get_template('footer'); ?>