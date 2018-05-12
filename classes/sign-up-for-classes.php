<!DOCTYPE html>

<?php
$globalNavId = "classes";
$sectionNavId = "signup";
?>

<html lang="en">
<head>
<meta name="keywords" content="martial arts classes, sign-up, online registration, class registration, wushu registration, xingyi registration, sanshou registration, bagua registration, taiji registration, water style registration, qigong registration, xiaoyao registration" />
<meta name="description" content="Classes, schedules, and fees, at the Shou-Yu Liang Wushu Taiji Qigong Institute" />
<title>Sign Up for Classes - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>

<style>
#contactInfo { border-spacing:0; margin-right:15px; }
#contactInfo td { vertical-align:top; }
#contactInfo td:nth-child(1) { padding-right:5px; text-align:right; }
#contactInfo td:nth-child(2) { text-align:left; }

td.registrationItem { font-size:12px; border-top:dotted 1px #dddddd; padding:10px 5px; vertical-align:top; }

#registrationForm input { border:solid 1px #aaaaaa; padding:1px; }

#submitButton { font-size:18px; font-weight:bold; padding:4px 15px; }
</style>
</head>

<body>

<?php include "../ssi/header.php"; ?>

<div id="syl-body-bkg">
  <div id="syl-body">
    <div id="syl-body1">
      <div class="contentWidth clearfix">
        <nav id="syl-breadcrumb" class="breadcrumbs pathway">
        	<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="index.php" class="pathway">Classes</a> <img src="/templates/syl/images/arrow.png" /> Sign Up for Classes
        </nav>

		<div id="syl-left-col">
			<?php include "../ssi/menu_classes.php"; ?>
		</div>

<!-- perry
fn: <?php echo($_POST['First_Name']) ?>
ln: <?php echo($_POST['Last_Name']) ?>
p: <?php echo($_POST['Phone']) ?>
e: <?php echo($_POST['Email']) ?>
-->

<?php
//Function to convert 24h time to 12h
//$timeOriginal is a string of 24h time format hh:mm
function formatTime($timeOriginal){
	$timeDisplay = "";

	if (intval(substr($timeOriginal,-5,2))>12)
    	$timeDisplay = (intval(substr($timeOriginal,-5,2))-12).substr($timeOriginal,-3)." PM";
    else if (intval(substr($timeOriginal,-5,2))==12)
    	$timeDisplay = intval(substr($timeOriginal,-5,2)).substr($timeOriginal,-3)." PM";
    else if (intval(substr($timeOriginal,-5,2))==0)
    	$timeDisplay = "12".substr($timeOriginal,-3)." AM";
    else
    	$timeDisplay = intval(substr($timeOriginal,-5,2)).substr($timeOriginal,-3)." AM";

    return $timeDisplay;
}

// Check Form data if this is registration form
$bSYLFormSubmitted = isset($_POST['submit']);
$bSYLFormHasFirstName = (isset($_POST['First_Name']) && trim($_POST['First_Name'])!='');
$bSYLFormHasLastName = (isset($_POST['Last_Name']) && trim($_POST['Last_Name'])!='');
$bSYLFormHasPhone = (isset($_POST['Phone']) && trim($_POST['Phone'])!='');
$bSYLFormHasEmail = (isset($_POST['Email']) && trim($_POST['Email'])!='');
$bSYLFormShowThankYou = $bSYLFormSubmitted && $bSYLFormHasFirstName && $bSYLFormHasLastName && $bSYLFormHasPhone && $bSYLFormHasEmail;

echo("<!-- plo: ".$bSYLFormSubmitted." - ".$bSYLFormHasFirstName." - ".$bSYLFormHasLastName." - ".$bSYLFormHasPhone." - ".$bSYLFormHasEmail." - ".$bSYLFormShowThankYou."-->");

//Sanity Checks
if (preg_match('/[\W\s]/si', $_POST['First_Name']) != 0 || strlen($_POST['First_Name']) > 50) $bSYLFormShowThankYou = false;
if (preg_match('/[\W\s]/si', $_POST['Last_Name']) != 0 || strlen($_POST['Last_Name']) > 50 ) $bSYLFormShowThankYou = false;
if (preg_match('/[a-zA-Z\s]/si', $_POST['Phone']) != 0 || strlen($_POST['Phone']) > 12 ) $bSYLFormShowThankYou = false;
if (strlen($_POST['Email']) > 50 ) $bSYLFormShowThankYou = false;

if ($bSYLFormShowThankYou){
	$bValidEmail = true;
	$studentEmail = '';
	$studentName = '';
	$className = '';
	$message =	'';

	foreach ($_POST as $name => $value){
		if (is_array($value))
			$message .= sprintf("%s: %s\n", $name, join('',$value));
		else
			$message .= sprintf("%s: %s\n", $name, $value);

		if (preg_match("/Taiji/si",$value))
		   $className = "Taiji";

		if (preg_match("/Wushu/si",$value))
		   $className = "Wushu";

		if (preg_match("/Xingyi/si",$value))
		   $className = "Xingyi";

		if (preg_match("/Bagua/si",$value))
		   $className = "Bagua";

		if (preg_match("/Qigong/si",$value))
		   $className = "Qigong";

		if (preg_match("/Liu\s*He/si",$value))
		   $className = "Liu He Ba Fa";

		if (preg_match("/Xiao\s*Yao/si",$value))
		   $className = "Xiao Yao";

		if (preg_match("/Email/si",$name))
			$studentEmail = $value;

		if (preg_match("/First/si",$name))
			$studentName = $value;

	}

	if (strcasecmp($_POST['First_Name'],$_POST['Last_Name'])==0) $bValidEmail = false;

	// Careful, next line can exclude registrants if a short first name is contained in a long last name, eg Al Allour
	if (strripos($_POST['First_Name'],$_POST['Last_Name'])!==false || strripos($_POST['Last_Name'],$_POST['First_Name'])!==false) $bValidEmail = false;

	if (preg_match("/[a-zA-Z]/",$_POST['Phone'])) $bValidEmail = false;

	if ($bValidEmail){
		// --- Email to Instructors ---
		$subject = 	'ShouyuLiang.com - '.$className.' New Student Registration';
		$headers = 	'From: webmaster@shouyuliang.com' . "\r\n" .
		       		'Reply-To: webmaster@shouyuliang.com';

		//$to = 'webmaster@shouyuliang.com';
		$to = 'webmaster@shouyuliang.com,info@shouyuliang.com,hliang@shouyuliang.com,byang@shouyuliang.com';
		$message = sprintf("Name: ".$_POST['First_Name']." ".$_POST['Last_Name']."\n");
		$message .= sprintf("Class: ".$_POST['Class']."\n");
		$message .= sprintf("Phone: ".$_POST['Phone']."\n");
		$message .= sprintf("Email: ".$_POST['Email']."\n");

		echo '<!-- wasInstructorResponseSuccessful: '.$wasInstructorResponseSuccessful = mail($to, $subject, $message, $headers).' -->';

		// --- Email to Students ---
		$subject = 	'ShouyuLiang.com - '.$className.' Class Registration';
		$headers = 	'From: webmaster@shouyuliang.com' . "\r\n" .
					'Reply-To: webmaster@shouyuliang.com' . "\r\n" .
					'Bcc: webmaster@shouyuliang.com,hliang@shouyuliang.com,byang@shouyuliang.com';

		$message = sprintf("Hello ".$studentName.",");
		$message .= sprintf("\n\nThanks for signing up for ".$className." class at the Shou-Yu Liang Wushu Taiji Qigong Institute.");
		if (stripos($className,'wushu')!==false)
			$message .= sprintf(" As Wushu is an ongoing class you can start at the next regularly scheduled class.");
      	else
			$message .= sprintf(" Students will be informed when this class begins.");

		$message .= sprintf("\n\nAt first class students will be required to fill out an enrollment form and payment will be expected by either cash or cheque.");
		$message .= sprintf("\n\nPlease wear loose comfortable clothes and be prepared for light-to-moderate exercise. Upon arrival at our school, please see or have someone direct you to an instructor for more information. More information about our school, including directions and full class schedule can be found on our website: www.ShouyuLiang.com");
		$message .= sprintf("\n\nIf you have any questions, please don't hesitate to email us.");
		$message .= sprintf("\n\n\n--\nRegards,\n\nPerry Lo, Webmaster\nShou-Yu Liang Wushu Taiji Qigong Institute");

		echo '<!-- wasStudentResponseSuccessful: '.mail($studentEmail, $subject, $message, $headers).' -->';
	}
?>

<img src="/images/aboutus/happysifu.jpg" width="145" height="400" border="0" alt="Grandmaster Shou-Yu Liang" align="right">
<h3>Your information has been submitted.  Thanks for signing up!</h3>
<p>We will notify you by return email when you should attend class.  We look forward to seeing you soon!  If you have any further questions, please view our <a href="http://shouyuliang.com/index.php/About-Us/Frequently-Asked-Questions.html">online FAQ</a> or <a href="mailto:webmaster@shouyuliang.com">email the webmaster</a>.</p>
<br clear="all"/>

<?php
}else{
	if (file_exists('abc.xml')){
	    $xml = simplexml_load_file('abc.xml');
	    $aTodaysDate = getdate();
	    $oTodaysDate = date("Y-m-d", mktime(0,0,0, $aTodaysDate[mon], $aTodaysDate[mday], $aTodaysDate[year]));
?>

<script type="text/javascript">
var bSelectedClass = false;
function submitData(){
    var oForm = document.SYLRegistrationForm;
	if (!isValidInput(oForm.First_Name, "Please enter your first name.")) return false;
    if (!isValidInput(oForm.Last_Name, "Please enter your last name.")) return false;
    //if (!isValidInput(oForm.Phone, "Please enter a valid Phone Number (xxx-xxx-xxxx).", /\(?\d{3}\)?([-\/\.])\d{3}\1\d{4}/)) return false;
	if (!isValidInput(oForm.Email, "Please enter a valid Email Address.", /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) return false;

	if (!bSelectedClass){
		alert ("Please select the class you wish to register for.");
		return false;
	}

    return true;
}

function isValidInput(oInput, sErrorMessage, RegExp){
	var bIsValidData = true;
	if (RegExp)
		bIsValidData = oInput.value.match(RegExp)?true:false;

	if (!oInput.value || !bIsValidData){
        alert (sErrorMessage);
        if (oInput.select) oInput.select();
       	if (oInput.focus) oInput.focus();
        oInput.style.backgroundColor = "#ff6666";
	    return false;
    }else{
    	oInput.style.backgroundColor = "#ffffff";
    	return true;
    }
}
</script>

<p>If you live in the greater Vancouver area and wish to attend our classes, you can either sign up in person at our main training hall or online by completing the form below. Payment for each class will be expected in the first or second class for all new students. Some scheduled classes will not begin until at least 10 students have registered so start dates may change. Other classes, such as Wushu and Sanshou, are ongong year-round and students are free to join at any time.</p>
<p>Prospective students are always free to visit our school during normally scheduled classes to view a class and meet the instructors before deciding to join.  For those students interested in Wushu class, you can try your first Wushu class for free!!!</p>
<p>Please note that class times and fees may change without notice. If you have any questions, please view our online FAQ or email the webmaster.  Thanks for using our online sign-up form.</p>
<p><b style="color:#ff0000;">Note: Class times and start dates are subject to change. All students will receive a notification by return email when classes begin. Students who register online are under NO obligation to join.</b></p>

<form name="SYLRegistrationForm" method="post" onSubmit="return submitData();">
<table id="registrationForm">
	<tr>
		<td valign="top">
			<table id="contactInfo">
				<tr>
					<td>First Name</td>
					<td><input type="text" size="30" name="First_Name" value="<?php echo (isset($_POST['First_Name'])?$_POST['First_Name']:'') ?>"></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input type="text" size="30" name="Last_Name" value="<?php echo (isset($_POST['Last_Name'])?$_POST['Last_Name']:'') ?>"></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td><input type="text" size="30" name="Phone" value="<?php echo (isset($_POST['Phone'])?$_POST['Phone']:'') ?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" size="30" name="Email" value="<?php echo (isset($_POST['Email'])?$_POST['Email']:'') ?>"></td>
				</tr>
			</table>
<?php
		if ($bSYLFormSubmitted){
			echo '<p style="color:#ff0000;"><b>';
			echo $bSYLFormHasFirstName?'':'Please enter your first name.';
			echo $bSYLFormHasLastName?'':' Please enter your last name.';
			echo $bSYLFormHasPhone?'':' Please enter your phone number.';
			echo $bSYLFormHasEmail?'':' Please enter your email address.';
			echo '</b></p>';
		}
?>
		</td>
		<td valign="top">
			<b style="display:block; margin:2px 0;">Select a Class</b>
			<table cellpadding="4" cellspacing="0">
<?php
	    foreach ($xml->class as $class){
	    	// Start Date Display
	    	$startDateMessage = "This class is <i>ongoing</i>, students of any level can join at any time";
	    	$oDaysPassed = 0;

		    if (strcasecmp($class->startDate, 'TBA') == 0) {
		    	$startDateMessage = "Starting date TBA - please check back later";
		    } else if (strcasecmp($class->startDate, 'ongoing') != 0) {
		    	$oStartDateObject = mktime(0,0,0, intval(substr($class->startDate,-5,2)), intval(substr($class->startDate,-2,2)), intval(substr($class->startDate,-10,4)));
		    	$oStartDate = date("Y-m-d", $oStartDateObject);
		    	$oDaysPassed = (time() - $oStartDateObject)/84600;
		    	if ($oTodaysDate > $oStartDate)
		    		$startDateMessage = "Class started on ".$class->startDate;
		    	else
		    		$startDateMessage = "Starting ".($oTodaysDate == $oStartDate ? "today ":"").$class->startDate;
		    }

			//if ($oDaysPassed<21)
			{
?>
				<tr>
					<td class="registrationItem" width="1%">
						<input type="radio" name="Class" value="<?php echo $class->title ?> - <?php echo $class->day ?>" onClick="bSelectedClass=true" id="<?php echo str_replace(' ','',$class->title.$class->day) ?>"/>
					</td>
					<td class="registrationItem">
						<label for="<?php echo str_replace(' ','',$class->title.$class->day) ?>">
							<?php echo $class->title ?><br/>
							<span class="small"><?php echo $startDateMessage ?></span>
						</label>
					</td>
					<td class="registrationItem"><?php echo $class->day ?>s<br><?php echo formatTime($class->startTime) ?> - <?php echo formatTime($class->endTime) ?></td>
				</tr>
<?php
			}
		}
?>
			</table>

			<p align="center"><input id="submitButton" type="submit" name="submit" value=" Sign Up >>> "></p>

		</td>
	</tr>
</table>
</form>

<?php
	}else{
	    //Failed to open xml - output nothing
	    ?>

	    <p>If you live in the greater Vancouver area and wish to attend our classes, you can either sign up in person at our main training hall or online by e-mailing us at <a href="mailto:&#105;&#110;&#102;&#111;&#064;&#115;&#104;&#111;&#117;&#121;&#117;&#108;&#105;&#097;&#110;&#103;&#046;&#099;&#111;&#109;">&#105;&#110;&#102;&#111;&#064;&#115;&#104;&#111;&#117;&#121;&#117;&#108;&#105;&#097;&#110;&#103;&#046;&#099;&#111;&#109;</a>.</p>
	    <p>Please include your full name, phone number, e-mail address and the classes you would like to join.</p>
	    <p>Payment will be collected prior to the start of the first class (cash or cheque only).  Some scheduled classes will not begin until its minimum number of full-time students (excluding drop-in) is met.  Other classes, such as Wushu and Sanshou, are ongong year-round and students are free to join at any time.</p>
		<p>Some classes are free to observe. Please email us to inquire.  For those students interested in the Wushu class, you can try your first Wushu class for free!</p>
		<p>Please note that class times and fees may change without notice. If you have any questions, please e-mail us at <a href="mailto:&#105;&#110;&#102;&#111;&#064;&#115;&#104;&#111;&#117;&#121;&#117;&#108;&#105;&#097;&#110;&#103;&#046;&#099;&#111;&#109;">&#105;&#110;&#102;&#111;&#064;&#115;&#104;&#111;&#117;&#121;&#117;&#108;&#105;&#097;&#110;&#103;&#046;&#099;&#111;&#109;</a>.</p>

	<?php }
}
?>

      </div>
    </div>
  </div>
</div>

<?php include "../ssi/footer.php"; ?>

</body>

</html>