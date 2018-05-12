<!DOCTYPE html>

<?php
$globalNavId = "classes";
$sectionNavId = "schedule";
?>

<html lang="en">

<head>
<meta name="keywords" content="full, schedule, class schedule, wushu schedule, sanshou schedule, taiji schedule, qigong schedule, xingyi schedule, bagua schedule, water style schedule, wuji schedule, private class schedule" />
<meta name="description" content="Shou-Yu Liang Wushu Taiji Qigong Institute Full class schedule" />
<title>Shou-Yu Liang Wushu Taiji Qigong Institute Full Class Schedule - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
</head>

<body>

<?php include "../ssi/header.php"; ?>

<div id="syl-body-bkg">
  <div id="syl-body">
    <div id="syl-body1">
      <div class="contentWidth clearfix">
        <nav id="syl-breadcrumb" class="breadcrumbs pathway">
        	<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="index.php" class="pathway">Classes</a> <img src="/templates/syl/images/arrow.png" /> Full Class Schedule
        </nav>

		<div id="syl-left-col">
			<?php include "../ssi/menu_classes.php"; ?>
		</div>

		<div id="syl-center-col">
			<h2 class="contentheading">Full Class Schedule</h2>

<?php
   $sylClassStyle = "all";
   include "jumi-schedule.php";
?>

		</div>


      </div>
    </div>
  </div>
</div>

<?php include "../ssi/footer.php"; ?>

</body>

</html>