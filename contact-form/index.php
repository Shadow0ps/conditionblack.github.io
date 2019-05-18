<?php
	// Start session.
	session_start();
	
	// Set a key, checked in mailer, prevents against spammers trying to hijack the mailer.
	$security_token = $_SESSION['security_token'] = uniqid(rand());
	
	if ( ! isset($_SESSION['formMessage'])) {
		$_SESSION['formMessage'] = 'Thank you for your interest.  If you would like to reach us, please fill out the form below.  If your matter is urgent or requires additional security (PGP Encryption) please reach out to us via our encrypted email at security@condition.black';	
	}
	
	if ( ! isset($_SESSION['formFooter'])) {
		$_SESSION['formFooter'] = ' ';
	}
	
	if ( ! isset($_SESSION['form'])) {
		$_SESSION['form'] = array();
	}
	
	function check($field, $type = '', $value = '') {
		$string = "";
		if (isset($_SESSION['form'][$field])) {
			switch($type) {
				case 'checkbox':
					$string = 'checked="checked"';
					break;
				case 'radio':
					if($_SESSION['form'][$field] === $value) {
						$string = 'checked="checked"';
					}
					break;
				case 'select':
					if($_SESSION['form'][$field] === $value) {
						$string = 'selected="selected"';
					}
					break;
				default:
					$string = $_SESSION['form'][$field];
			}
		}
		return $string;
	}
?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="referrer" content="same-origin" />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />
		<link rel="apple-touch-icon" sizes="180x180" href="https://condition.black/resources/Enlight2.jpg" />
<link rel="apple-touch-icon" sizes="167x167" href="https://condition.black/resources/medium.png" />
<link rel="icon" type="image/png" href="https://condition.black/resources/favicon_large.png" sizes="64x64" />
<link rel="icon" type="image/png" href="https://condition.black/resources/favicon_medium.png" sizes="32x32" />
<link rel="apple-touch-icon" sizes="152x152" href="https://condition.black/resources/small.png" />
<link rel="icon" type="image/png" href="https://condition.black/resources/favicon_small.png" sizes="16x16" />

	

	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" media="all" href="../rw_common/themes/Future/consolidated.css?rwcache=579835702" />
		
	
	   
</head>

<!-- This page was created with RapidWeaver from Realmac Software. http://www.realmacsoftware.com -->

<body>
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand" href="https://condition.black/"> <span class="navbar-title"></span></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
			 aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto"><li class="nav-item"><a href="../" rel="" class="nav-link">Home</a></li><li class="nav-item"><a href="../research/" rel="" class="nav-link">Research</a></li><li class="nav-item active"><a href="./" rel="" class="nav-link">Contact Us</a></li></ul>
			</div>
		</div>
	</nav>

	<header class="hero" id="hero">
        <div class="hero-background"></div>
		<div class="hero-overlay"></div>
		<h1 class="hero-title">
			
			<em>Data Security, Intelligence, Compliance, Threat Hunting</em>
		</h1>
	</header>

	<div class="content">
		<section class="main" style="position: relative;">
			<div class="container">
                <div class="row">
                    <div class="col-sm-12 main">
                        
<div class="message-text"><?php echo $_SESSION['formMessage']; unset($_SESSION['formMessage']); ?></div><br />

<form class="rw-contact-form" action="./files/mailer.php" method="post" enctype="multipart/form-data">
	 <div>
		<label>Your Name</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element0'); ?>" name="form[element0]" size="40"/><br /><br />

		<label>Your Email</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element1'); ?>" name="form[element1]" size="40"/><br /><br />

		<label>Subject</label> *<br />
		<input class="form-input-field" type="text" value="<?php echo check('element2'); ?>" name="form[element2]" size="40"/><br /><br />

		<label>Message</label> *<br />
		<textarea class="form-input-field" name="form[element3]" rows="8" cols="38"><?php echo check('element3'); ?></textarea><br /><br />

		<div style="display: none;">
			<label>Spam Protection: Please don't fill this in:</label>
			<textarea name="comment" rows="1" cols="1"></textarea>
		</div>
		<input type="hidden" name="form_token" value="<?php echo $security_token; ?>" />
		
		<input class="form-input-button" type="submit" name="submitButton" value="Submit" />
	</div>
</form>

<br />
<div class="form-footer"><?php echo $_SESSION['formFooter']; unset($_SESSION['formFooter']); ?></div><br />

<?php unset($_SESSION['form']); ?>

                    </div>

                    <div class="col-sm-0 sidebar">
                        <h2></h2>
                         
                    </div>
                </div>
			</div>
		</section>
	</div>

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<ul class="navbar-nav ml-auto"><li class="nav-item"><a href="../" rel="" class="nav-link">Home</a></li><li class="nav-item"><a href="../research/" rel="" class="nav-link">Research</a></li><li class="nav-item active"><a href="./" rel="" class="nav-link">Contact Us</a></li></ul>
					&copy; 2019 CONDITION:BLACK | A Division of MYSENSITIVEDATA.COM INC. <a href="#" id="rw_email_contact">Contact Us</a><script type="text/javascript">var _rwObsfuscatedHref0 = "mai";var _rwObsfuscatedHref1 = "lto";var _rwObsfuscatedHref2 = ":se";var _rwObsfuscatedHref3 = "cur";var _rwObsfuscatedHref4 = "ity";var _rwObsfuscatedHref5 = "@co";var _rwObsfuscatedHref6 = "ndi";var _rwObsfuscatedHref7 = "tio";var _rwObsfuscatedHref8 = "n.b";var _rwObsfuscatedHref9 = "lac";var _rwObsfuscatedHref10 = "k";var _rwObsfuscatedHref = _rwObsfuscatedHref0+_rwObsfuscatedHref1+_rwObsfuscatedHref2+_rwObsfuscatedHref3+_rwObsfuscatedHref4+_rwObsfuscatedHref5+_rwObsfuscatedHref6+_rwObsfuscatedHref7+_rwObsfuscatedHref8+_rwObsfuscatedHref9+_rwObsfuscatedHref10; document.getElementById("rw_email_contact").href = _rwObsfuscatedHref;</script>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="../rw_common/themes/Future/js/main.js?rwcache=579835702"></script>
<div id="rapidweaver_privacy_message">
    <p><span style="font:13px .AppleSystemUIFont; color:#000000;">CONDITION:BLACK utilizes anonymizing services to remove user-identifying information that may be shared while browsing our site.  We will not sell your information or allow any third party to view, analyze our access your information without your expressed and informed consent in writing.  Any contact information provided will only be used to facilitate requests initiated by you.  We do not market or sell our services to any agency, corporation or individuals who CONDITION BLACK in its sole discretion determines to be a "bad actor" or those known to commit offenses against the privacy, security, and human rights of others.  In short, if you are looking to do something you don't want on the front page of every newspaper, we aren't your team, but we'll be seeing you on the field.</span></p>
    <button id="rapidweaver_privacy_message_dismiss_button">Understood</button>
</div>

<script src="../rw_common/assets/message.js?rwcache=579835702"></script>
</body>

</html>