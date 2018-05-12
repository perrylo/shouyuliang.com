<!DOCTYPE html>

<?php
$globalNavId = "instructors";
$sectionNavId = "dan-marks";
?>

<html lang="en">

<head>
<meta name="keywords" content="Dan Marks, wushu, sanshou, sanshoudao, black belt, martial arts, instructor, martial artist" />
<meta name="description" content="Trained in martial arts since 1994 and holds a 1st level black belt of the International Wushu Sanshoudao Association." />
<title>Assistant Instructor Dan Marks - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
var imgs = [];
imgs.push({file: 'Dan-Marks-Bagua-Zhang.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Dan-Marks-Wushu-Back-Spinning-Kick.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Dan-Marks-Wushu-Bow-Stance-Punch.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Dan-Marks-Xing-Yi-Dragon.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Dan-Marks-Xing-Yi.jpg', title: '', desc: '', url: '#'});
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
	path: '/images/instructors/Dan-Marks/'
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
					<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="/instructors/" class="pathway"> Instructors</a> <img src="/templates/syl/images/arrow.png" /> Asst. Instructor Dan Marks
				</nav>

				<div id="syl-left-col">
					<?php include "../ssi/menu_instructors.php"; ?>
				</div>

				<div id="syl-center-col">
					<div id="syl-contentTop">
						<div class="moduletable-inst-dm">
							<div id="slidewrap">
								<div id="slideshow"></div>
								<div id="loadingDiv"></div>
							</div>
						</div>
					</div>

					<h1 class="contentheading">Assistant Instructor Dan Marks</h1>

					<div class="article-content">
						<p>Dan, originally from Kitchener, Ontario has trained in martial arts for over 10 years, originally training in Aikido before learning Wushu, Sanshou, Xingyi, Tai Chi, and Water Style at our school.  He trains (and teaches) mainly for enjoyment, and is fond of practicing drills.  He feels that practicing with a partner is mutually beneficial - we mutually inspire each other to bring out the best in ourselves.</p>
						<p>To him, the Shou-Yu Liang Wushu Taiji Qigong Institute is a big school, with room enough for everyone including casual students and competition athletes alike.   Everyone should feel welcome and be encouraged to practice.</p>
						<p>Outside of Wushu, Dan works in special education for a local high school, and likes to watch classic Kung Fu movies with the Five Deadly Venoms and Gordon Liu.</p>
						<br />
						<h4>Personal Words:</h4>
						<p><em>I owe a lot to a lot of people.  Most of the instructors at our school have taught me.  Thank you.  Special thanks to Sifu, Tony, Ayron, Mike, Tjong, and Simon.  Also, Declan (the first person at the school to befriend me), Sam, Jeremy, and Bart.  To spar with Bart is to feel alive.</em></p>
						<div id="instructorAchievements">
							<div class="title">SELECTED LIST OF DAN'S ACHIEVEMENTS</div>
							<div class="headerRow year">YEAR</div>
							<div class="headerRow event">EVENT</div>
							<div class="eventRow year">2008</div>
							<div class="eventRow event">1st degree black belt - International Wushu Sanshou Dao Association (IWSD)</div>
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
