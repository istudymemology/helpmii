<?php

define('EMAIL_FOR_REPORTS', 'theawesomejamie0@gmail.com');
define('RECAPTCHA_PRIVATE_KEY', '6Lea2kEUAAAAAKFzfsCoaW_-n5a1TuhW3pyXo6fQ');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-flat-green.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-flat-green.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form enctype="multipart/form-data" class="formoid-flat-green" style="background-color:#1A2223;font-size:14px;font-family:'Lato', sans-serif;color:#666666;max-width:480px;min-width:150px" method="post"><div class="title"><h2>Help Me With Stuff</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>" title="Your Answer"><label class="title">Topic<span class="required">*</span></label><input class="large" type="text" name="input" required="required"/></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>" title="Type Stuff"><label class="title">Description<span class="required">*</span></label><textarea class="medium" name="textarea" cols="20" rows="5" required="required"></textarea></div>
	<div class="element-select<?php frmd_add_class("select"); ?>"><label class="title">Select<span class="required">*</span></label><div class="large"><span><select name="select" required="required">

		<option value="Yes">Yes</option>
		<option value="No">No</option>
		<option value="Mabye">Mabye</option>
		<option value="I Am Just Being An Idiot">I Am Just Being An Idiot</option></select><i></i></span></div></div>
	<div class="element-rating<?php frmd_add_class("rating"); ?>" title="This Does Nothing"><label class="title">Fill In Stars Because Its Fun</label><div class="rating"><input type="radio" class="rating-input" id="rating-12" name="rating" value="12" /><label for="rating-12" class="rating-star"></label><input type="radio" class="rating-input" id="rating-11" name="rating" value="11" /><label for="rating-11" class="rating-star"></label><input type="radio" class="rating-input" id="rating-10" name="rating" value="10" /><label for="rating-10" class="rating-star"></label><input type="radio" class="rating-input" id="rating-9" name="rating" value="9" /><label for="rating-9" class="rating-star"></label><input type="radio" class="rating-input" id="rating-8" name="rating" value="8" /><label for="rating-8" class="rating-star"></label><input type="radio" class="rating-input" id="rating-7" name="rating" value="7" /><label for="rating-7" class="rating-star"></label><input type="radio" class="rating-input" id="rating-6" name="rating" value="6" /><label for="rating-6" class="rating-star"></label><input type="radio" class="rating-input" id="rating-5" name="rating" value="5" /><label for="rating-5" class="rating-star"></label><input type="radio" class="rating-input" id="rating-4" name="rating" value="4" /><label for="rating-4" class="rating-star"></label><input type="radio" class="rating-input" id="rating-3" name="rating" value="3" /><label for="rating-3" class="rating-star"></label><input type="radio" class="rating-input" id="rating-2" name="rating" value="2" /><label for="rating-2" class="rating-star"></label><input type="radio" class="rating-input" id="rating-1" name="rating" value="1" /><label for="rating-1" class="rating-star"></label></div></div>
	<div class="element-checkbox<?php frmd_add_class("checkbox"); ?>" title="Required"><label class="title">Is The Creator Of This...<span class="required">*</span></label>		<div class="column column2"><label><input type="checkbox" name="checkbox[]" value="Amazing"/ required="required"><span>Amazing</span></label><label><input type="checkbox" name="checkbox[]" value="The Best"/ required="required"><span>The Best</span></label><label><input type="checkbox" name="checkbox[]" value="Epic"/ required="required"><span>Epic</span></label></div><span class="clearfix"></span>
		<div class="column column2"><label><input type="checkbox" name="checkbox[]" value="Awesome"/ required="required"><span>Awesome</span></label><label><input type="checkbox" name="checkbox[]" value="Better Than You"/ required="required"><span>Better Than You</span></label><label><input type="checkbox" name="checkbox[]" value="Outstanding"/ required="required"><span>Outstanding</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-file<?php frmd_add_class("file"); ?>"><label class="title">Files (If Necessary)</label><label class="large" ><div class="button">Choose File</div><input type="file" class="file_input" name="file" /><div class="file_text">No file selected</div></label></div>
	<div class="element-email<?php frmd_add_class("email"); ?>"><label class="title">Email In Case Something Goes Wrong<span class="required">*</span></label><input class="large" type="email" name="email" value="" required="required"/></div>
	<div class="element-name<?php frmd_add_class("name"); ?>"><label class="title">Name<span class="required">*</span></label><span class="nameFirst"><input  type="text" size="8" name="name[first]" required="required"/><label class="subtitle">First</label></span><span class="nameLast"><input  type="text" size="14" name="name[last]" required="required"/><label class="subtitle">Last (Just Use ".")</label></span></div>
	<div class="element-recaptcha<?php frmd_add_class("captcha"); ?>" title="Enter Captcha"><label class="title">reCAPTCHA</label><script type="text/javascript">var RecaptchaOptions = {theme : "clean"};</script>
<script type="text/javascript" src="http://www.google.com/recaptcha/api/challenge?k=6Lea2kEUAAAAAAUQ86Ew9PB_NwYswibP9v7H32dy&theme=clean"></script>
<noscript><iframe src="http://www.google.com/recaptcha/api/noscript?k=6Lea2kEUAAAAAAUQ86Ew9PB_NwYswibP9v7H32dy&hl=en" height="300" width="500" frameborder="0"></iframe></br>
<textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea><input type="hidden" name="recaptcha_response_field" value="manual_challenge"></noscript>
<script type="text/javascript">if (/#invalidcaptcha$/.test(window.location)) (document.getElementById("recaptcha_widget_div")).className += " error"</script></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-flat-green.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>