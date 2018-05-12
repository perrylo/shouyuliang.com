<!DOCTYPE html>

<?php
$globalNavId = "instructors";
$sectionNavId = "derek-lau";
?>

<html lang="en">

<head>
<meta name="keywords" content="Derek Lau, wushu, martial arts, martial artist, instructor" />
<meta name="description" content="Derek Lau has trained in martial arts since 1992 and holds a 1st level black belt of the International Wushu Sanshoudao Association." />
<title>Assistant Instructor Derek Lau - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
var imgs = [];
imgs.push({file: 'Derek-Lau-Wushu-Broadsword.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Derek-Lau-Wushu-Empty-Stance-Staff.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Derek-Lau-Wushu-Empty-Stance.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Derek-Lau-Wushu-Leaping-Staff.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Derek-Lau-Wushu-Staff.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Derek-Lau-Wushu.jpg', title: '', desc: '', url: '#'});
var myshow = new Slideshow('slideshow', {
	type: 'combo',
	externals: 0,
	showTitleCaption: 1,
	captionHeight: 45,
	width: 593,
	height: 335,
	pan: 50,
	zoom: 50,
	loadingDiv: 1,
	resize: true,
	duration: [2000, 9000],
	transition: Fx.Transitions.Expo.easeOut,
	images: imgs,
	path: '/images/instructors/Derek-Lau/'
});

myshow.caps.h2.setStyles({color: '#fff', fontSize: '13px'});
myshow.caps.p.setStyles({color: '#ccc', fontSize: '11px'});
});
</script>
</head>

<body>

<?php include "../ssi/header.php"; ?>

<div id="syl-body-bkg">
	<div id="syl-body">
		<div id="syl-body1">
			<div class="contentWidth clearfix">
				<nav id="syl-breadcrumb" class="breadcrumbs pathway">
					<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="/instructors/" class="pathway"> Instructors</a> <img src="/templates/syl/images/arrow.png" /> Asst. Instructor Derek Lau
				</nav>

				<div id="syl-left-col">
					<?php include "../ssi/menu_instructors.php"; ?>
				</div>

				<div id="syl-center-col">
					<div id="syl-contentTop">
						<div class="moduletable-inst-dl">
							<div id="slidewrap">
								<div id="slideshow"></div>
								<div id="loadingDiv"></div>
							</div>
						</div>
					</div>

					<h1 class="contentheading">Assistant Instructor Derek Lau</h1>

					<div class="article-content">
						<p>"Little" Derek has been practicing Chinese martial arts at the SYL Wushu Institute since 1992.  Being an avid fan of Jet Li and Jackie Chan movies, he began taking Wushu classes and since then, has also been learning Sanshou, Xing Yi, and the Wuji Xiao Yao System.</p>
						<p>For Derek, studying martial arts is an excellent way to keep fit and improve coordination.  In addition, he believes that Chinese martial arts is able to train both the mind and the body.  He hopes that Wushu will continue to spread worldwide and have a positive impact on the lives of those that learn to appreciate it.</p>
						<div id="instructorAchievements">
							<div class="title">SELECTED LIST OF HONG'S ACHIEVEMENTS</div>
							<div class="headerRow year">YEAR</div>
							<div class="headerRow event">EVENT</div>
							<div class="eventRow year">2014</div>
							<div class="eventRow event">4th, 5th place at the 1st World Taijiquan Championships</div>
							<div class="eventRow year">2014</div>
							<div class="eventRow event">Canadian National Taiji Team member</div>
							<div class="eventRow year">2013</div>
							<div class="eventRow event">3 Silvers at the 2013 Canadian Open Taiji Championships</div>
							<div class="eventRow year">2010</div>
							<div class="eventRow event">1 Gold, 1 Silver, Wudang Mountain International Wushu Health Conference</div>
							<div class="eventRow year">2008</div>
							<div class="eventRow event">1st degree black belt - International Wushu Sanshou Dao Association (IWSD)</div>
							<div class="eventRow year">2007</div>
							<div class="eventRow event">1 Gold at the International Tristar Taiji Health Convention</div>
							<div class="eventRow year">1997/1999/2002</div>
							<div class="eventRow event">1 Gold, 2 Silver, 1 Bronze at the West Coast Can-Am Championships</div>
							<div class="eventRow year">1999</div>
							<div class="eventRow event">1 Silver at the Canadian Kung Fu Championships</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include "../ssi/footer.php"; ?>

</body>

</html>