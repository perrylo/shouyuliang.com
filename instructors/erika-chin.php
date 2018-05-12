<!DOCTYPE html>

<?php
$globalNavId = "instructors";
$sectionNavId = "erika-chin";
?>

<html lang="en">

<head>
<meta name="keywords" content="Erika Chin, international champion, wushu, martial arts, instructor, martial artist" />
<meta name="description" content="Erika Chin has trained in martial arts since 1994 and holds a 1st level black belt of the International Wushu Sanshoudao Association." />
<title>Assistant Instructor Erika Chin - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
var imgs = [];
imgs.push({file: 'Erika-Chin-Wushu-Double-Sword-1.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Erika-Chin-Wushu-Double-Sword.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Erika-Chin-Wushu-Jumping-Double-Sword.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Erika-Chin-Wushu-Spear.jpg', title: '', desc: '', url: '#'});
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
	path: '/images/instructors/Erika-Chin/'
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
					<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="/instructors/" class="pathway"> Instructors</a> <img src="/templates/syl/images/arrow.png" /> Past Instructor Erika Chin
				</nav>

				<div id="syl-left-col">
					<?php include "../ssi/menu_instructors.php"; ?>
				</div>

				<div id="syl-center-col">
					<div id="syl-contentTop">
						<div class="moduletable-inst-ec">
							<div id="slidewrap">
								<div id="slideshow"></div>
								<div id="loadingDiv"></div>
							</div>
						</div>
					</div>

					<h1 class="contentheading">Past Instructor Erika Chin</h1>

					<div class="article-content">
						<p>Erika is one of the school's top athletes and is a well-rounded student and instructor.  Though petit and soft-spoken, it's quite amazing to watch her ferocity and dedication.  She can often be seen training long after other students have stopped for the day, and will be at the gym during other scheduled classes to practice Wushu on her own.</p>
						<p>Born and raised in Vancouver, she has a love for most things Asian and all things edible (especially chocolate).  She started Wushu in 1994 and also has trained in Bagua and Jujitsu.  For her, Wushu is a great way to relieve stress, get some exercise, and socialize.  Previously, she trained and competed in national level rhythmic gymnastics and swimming. Before officially becoming an instructor with the institute, she was a primary instructor for the University of British Columbia Kung Fu Club.</p>
						<p>She hopes the Shou-Yu Liang Wushu Taiji Qigong Institute will raise the level of all students and impart to new students how great martial arts are.</p>
						<p> </p>
						<h4>Personal Words:</h4>
						<p><em>"This too shall pass."</em></p>
						<div id="instructorAchievements">
							<div class="title">SELECTED LIST OF ERIKA'S ACHIEVEMENTS</div>
							<div class="headerRow year">YEAR</div>
							<div class="headerRow event">EVENT</div>
							<div class="eventRow year">2010</div>
							<div class="eventRow event">2 Golds, Wudang International Wushu Health Conference in Hubei, China</div>
							<div class="eventRow year">2008</div>
							<div class="eventRow event">1st degree black belt - International Wushu Sanshou Dao Association (IWSD)</div>
							<div class="eventRow year">2006</div>
							<div class="eventRow event">Alternate member of Canadian National Wushu Team for Pan-Am Games</div>
							<div class="eventRow year">2005</div>
							<div class="eventRow event">Grandchampion, West Coast Can-Am Championships</div>
							<div class="eventRow year">2002</div>
							<div class="eventRow event">Grandchampion, West Coast Can-Am Championships</div>
							<div class="eventRow year">2001</div>
							<div class="eventRow event">4th place for Longfist, Canadian National Wushu Team Selection</div>
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