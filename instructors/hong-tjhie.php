<!DOCTYPE html>

<?php
$globalNavId = "instructors";
$sectionNavId = "hong-tjhie";
?>

<html lang="en">

<head>
<meta name="keywords" content="Hong Tjhie, international champion, black belt, wushu, black belt, martial arts instructor, martial artist" />
<meta name="description" content="Hong Tjhie has trained in martial arts since 1984 and holds a 1st level black belt of the International Wushu Sanshoudao Association." />
<title>Assistant Instructor Hong Tjhie - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
var imgs = [];
imgs.push({file: 'Hong-Tjhie-Wushu-Hammer-Fist.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Hong-Tjhie-Wushu-Horse-Stance-Punch.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Hong-Tjhie-Wushu-Jumping-Front-Slap-Kick.jpg', title: '', desc: '', url: '#'});
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
	path: '/images/instructors/Hong-Tjhie/'
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
					<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="/instructors/" class="pathway"> Instructors</a> <img src="/templates/syl/images/arrow.png" /> Asst. Instructor Hong Tjhie
				</nav>

				<div id="syl-left-col">
					<?php include "../ssi/menu_instructors.php"; ?>
				</div>

				<div id="syl-center-col">
					<div id="syl-contentTop">
						<div class="moduletable-inst-ht">
							<div id="slidewrap">
								<div id="slideshow"></div>
								<div id="loadingDiv"></div>
							</div>
						</div>
					</div>

					<h1 class="contentheading">Assistant Instructor Hong Tjhie</h1>

					<div class="article-content">
						<p>Hong has been with the Shou-Yu Liang Wushu Taiji Qigong Institute for 20 years.   During that time, he has competed in many national and international competitions.  He has also studied Wushu in China, where he has competed in several regional and national competitions.  His experience also includes: The International Coach's Training Course in Beijing, and as Judge in many competitions in Canada.</p>
						<p>Not only does Hong practice Wushu for competitions, but for health and recreation as well.  For the Institute, he hopes to assist in training the students to excel at the competition level.</p>
						<br />
						<div id="instructorAchievements">
							<div class="title">SELECTED LIST OF HONG'S ACHIEVEMENTS</div>
							<div class="headerRow year">YEAR</div>
							<div class="headerRow event">EVENT</div>

							<div class="eventRow year">2013</div>
							<div class="eventRow event">1st degree black belt - International Wushu Sanshou Dao Association (IWSD)</div>
							<div class="eventRow year">2008</div>
							<div class="eventRow event">1st degree black belt - International Wushu Sanshou Dao Association (IWSD)</div>
							<div class="eventRow year">2004</div>
							<div class="eventRow event">Voted Outstanding Sportsmanship Award, The 7th National Chinese Medicine University-Collegiate Wushu Competition, China</div>
							<div class="eventRow year">2002</div>
							<div class="eventRow event">3 Gold, The 5th Kunming Provincial Wushu Competition, Yunnan Province, China</div>
							<div class="eventRow year">1996</div>
							<div class="eventRow event">1st Place Traditional Forms and Traditional Weapons, Beijing University of Physical Education</div>
							<div class="eventRow year">1994</div>
							<div class="eventRow event">1st Place Black Belt Forms, Tiger Balm Internationals</div>
							<div class="eventRow year">1993</div>
							<div class="eventRow event">Advanced Grandchampion, Tiger Balm Internationals</div>
							<div class="eventRow year">1992</div>
							<div class="eventRow event">Junior Grandchampion, Canadian Chinese Martial Arts Competition</div>
							<div class="eventRow year">1992</div>
							<div class="eventRow event">3 Gold and 4 Silver, US Chinese Martial Arts National Competition</div>
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