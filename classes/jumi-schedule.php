<?php
	//Function to convert 24h time to 12h
	//$timeOriginal is a string of 24h time format hh:mm
	function formatTime($timeOriginal){
		$timeDisplay = "";
		if (intval(substr($timeOriginal,-5,2))>12){
			$timeDisplay = (intval(substr($timeOriginal,-5,2))-12).substr($timeOriginal,-3)." PM";
		}else if (intval(substr($timeOriginal,-5,2))==12){
			$timeDisplay = intval(substr($timeOriginal,-5,2)).substr($timeOriginal,-3)." PM";
		}else if (intval(substr($timeOriginal,-5,2))==0){
			$timeDisplay = "12".substr($timeOriginal,-3)." AM";
		}else{
			$timeDisplay = intval(substr($timeOriginal,-5,2)).substr($timeOriginal,-3)." AM";
		}

		return $timeDisplay;
	}

	$classUrls['qigong'] = '/classes/qigong-class.php';
	$classUrls['taiji'] = '/classes/taiji-class.php';
	$classUrls['wushu'] = '/classes/wushu-class.php';
	$classUrls['sanshou'] = '/classes/sanshou-class.php';
	$classUrls['xingyi'] = '/classes/xingyi-class.php';
	$classUrls['bagua'] = '/classes/bagua-class.php';
	$classUrls['lhbf'] = '/classes/liu-he-ba-fa-class.php';
	$classUrls['xiaoyao'] = '/classes/wuji-xiao-yao-class.php';

	if (file_exists(realpath(DIRNAME(__FILE__).'/../../shouyuliang.com.new/byang/syl_schedule.xml'))) {
	    $xml = simplexml_load_file(realpath(DIRNAME(__FILE__).'/../../shouyuliang.com.new/byang/syl_schedule.xml'));
	    $aTodaysDate = getdate();
	    $oTodaysDate = date("Y-m-d", mktime(0,0,0, $aTodaysDate[mon], $aTodaysDate[mday], $aTodaysDate[year]));
?>

<div id="classSchedule">
	<h2><?= strcasecmp($sylClassStyle,'all')==0?'Full':(strcasecmp($sylClassStyle,'lhbf')==0?'Water Style':$sylClassStyle) ?> Class Schedule and Fees</h2>
<?php
	foreach ($xml->class as $class){
		// Start Date Display
		$startDateMessage = "This class is <i>ongoing</i> for beginners, intermediate and advanced students.  Students of any level can join at any time.  Minimum age to start is 7.  Children under 12 need to phone to inquire spot availability before starting.";
		$oDaysPassed = 0;
		if (strcasecmp($class->startDate, 'TBA') == 0){
			$startDateMessage = "Starting date TBA - please check back later";
		}else if (strcasecmp($class->startDate, 'ongoing') != 0){
			$oStartDateObject = mktime(0,0,0, intval(substr($class->startDate,-5,2)), intval(substr($class->startDate,-2,2)), intval(substr($class->startDate,-10,4)));
			$oStartDate = date("Y-m-d", $oStartDateObject);
			$oDaysPassed = (time() - $oStartDateObject)/84600;
			if ($oTodaysDate > $oStartDate){
				$startDateMessage = "Class started on ".$class->startDate;
			}else{
				$startDateMessage = "Starting ".($oTodaysDate == $oStartDate ? "today ":"").$class->startDate;
			}
		}

		$feeDisplay = "Fee options:<br><ol>";

		foreach ($class->fee as $courseFee){
			$feeDisplay = $feeDisplay.'<li>$'.$courseFee->cost.' CDN';

			if (strcasecmp($courseFee->frequency, 'class') == 0){
				if (strcasecmp($courseFee->duration, '1') == 0){
					$feeDisplay = $feeDisplay.' drop-in';
				}else{
					$feeDisplay = $feeDisplay.' for '.$courseFee->duration.' classes.';
				}
			}else if (strcasecmp($courseFee->frequency, 'month') == 0){
				if (strcasecmp($courseFee->duration, '1') == 0){
					$feeDisplay = $feeDisplay.' monthly.';
				}else{
					$feeDisplay = $feeDisplay.' for '.$courseFee->duration.' months.';
				}
			}

			if (strcasecmp($courseFee->numberOfFreeClasses, '') != 0)
				$feeDisplay = $feeDisplay.' Includes '.$courseFee->numberOfFreeClasses.' complimentary sessions of any other class except Wuji Xiao Yao';

			if (strcasecmp($courseFee->feeNote, '') != 0)
				$feeDisplay = $feeDisplay.'<br/> '.$courseFee->feeNote;

			$feeDisplay = $feeDisplay.'</li>';
		}

		$feeDisplay = $feeDisplay.'</ol>';

		//Show class schedule
		if (stripos($sylClassStyle,'all') === 0 || stripos($sylClassStyle,(string)$class['style']) === 0){
?>
	<div class="classContainer clearfix">
		<div class="classTitle">
<?php if (strcasecmp($sylClassStyle,'all')==0) { ?>
			<a href="<?php echo $classUrls[strtolower((string)$class['style'])] ?>">
<?php } ?>
			<b><?php echo $class->title.(strcasecmp($class->note, '')!=0?'*':'') ?></b>
<?php if (strcasecmp($sylClassStyle,'all')==0) { ?>
			</a>
<?php } ?>
		</div>

		<div class="classTime">
			<b><?php echo $startDateMessage ?></b><br/>
			<?php echo (strcasecmp($class->note, '')!=0?'<i>* '.$class->note.'</i>':'') ?>
		</div>

		<div class="classFee">
			<b>
				<?php echo $class->day ?>s
<?php if ($class->startTime!='' && $class->endTime!=''){ ?>
				, <?php echo formatTime($class->startTime) ?> - <?php echo formatTime($class->endTime) ?>
<?php } ?>
			</b>
			<br/>
			<?php echo $feeDisplay ?>
			<a class="stdBulletArrow" style="color:#008000" href="/classes/sign-up-for-classes.php"><b>Register online</b></a>
<?php  if ($oDaysPassed<30) { ?>
			<span style="color:#FF8000">Registration will close 30 days after scheduled start date</span><br/>
<?php } else { ?>
			<span style="color:#FF8000">Class started - registration closed</span><br/>
<?php } ?>

<?php if (strcasecmp($sylClassStyle,'all')==0) { ?>
			<a class="stdBulletArrow" href="<?php echo $classUrls[strtolower((string)$class['style'])] ?>"><b>Learn more</b></a>
<?php } ?>
		</div>

	</div>

	<div class="clr"></div>
<?php
		}
	}
?>

</div>
<span class="small">Please note that class times, prices, and instructors are subject to change without notice, depending on the number of students that have registered.  For the latest, please check back with our website or <a href="/about-us/contact-information.php">contact us by phone</a>.</span>
<br/>
<br/>

<?php
	}else{
		// echo ('no file');
	    //Failed to open xml - output nothing
	}
?>