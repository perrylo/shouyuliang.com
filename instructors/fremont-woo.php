<!DOCTYPE html>

<?php
$globalNavId = "instructors";
$sectionNavId = "fremont-woo";
?>

<html lang="en">

<head>
<meta name="keywords" content="Fremont Woo, wushu, martial arts instructor, martial artist, black belt" />
<meta name="description" content="Trained in martial arts since 1993 and holds a 2nd level black belt of the International Wushu Sanshoudao Association." />
<title>Instructor Fremont Woo - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
var imgs = [];
imgs.push({file: 'Fremont-Woo-Bagua-Zhang.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Fremont-Woo-Wushu-Broadsword.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Fremont-Woo-Wushu-Eagle-Claw.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Fremont-Woo-Wushu-Longfist.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Fremont-Woo-Wushu-Sword.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Fremont-Woo-Wushu-Tong-Bei-Quan.jpg', title: '', desc: '', url: '#'});
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
	path: '/images/instructors/Fremont-Woo/'
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
					<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="/instructors/" class="pathway"> Instructors</a> <img src="/templates/syl/images/arrow.png" /> Instructor Fremont Woo
				</nav>

				<div id="syl-left-col">
					<?php include "../ssi/menu_instructors.php"; ?>
				</div>

				<div id="syl-center-col">
					<div id="syl-contentTop">
						<div class="moduletable-inst-fw">
							<div id="slidewrap">
								<div id="slideshow"></div>
								<div id="loadingDiv"></div>
							</div>
						</div>
					</div>

					<h1 class="contentheading">Instructor Fremont Woo</h1>

					<div class="article-content">
						<p>Fremont started Wushu in 1993 at the University of British Columbia.  He was drawn to Chinese martial arts from all the cool Kung Fu movies and novels he was exposed to when he was younger.  Since then, he has been in numerous performances and actively helps to teach Wushu basics and fundamental forms in class.</p>
						<p>Wushu is an excellent way to improve one's mental, physical, and spiritual health. For him, Wushu is the best form of sport there is, and he feels fortunate that the Shou-Yu Liang Wushu Taiji Qigong Institute was the first experience he has had with martial arts.  Grandmaster Liang brings a positive and friendly atmosphere to the club.  Fremont feels that Wushu helped to open his mind, and he continues to be amazed at the vast knowledge and philosophy behind the art.  He hopes to learn as much as he possibly can, not only with Chinese martial arts, but also with Chinese culture and all that is involved.</p>
						<br />
						<h4>Personal Words:</h4>
						<p><em>I hope SYL will continue to grow, not only locally but branch out to the other parts of the world, where we can promote and share our passion with anyone who is interested in martial arts.</em></p>
						<div id="instructorAchievements">
							<div class="title">SELECTED LIST OF FREMONT'S ACHIEVEMENTS</div>
							<div class="headerRow year">YEAR</div>
							<div class="headerRow event">EVENT</div>
							<div class="eventRow year">2008</div>
							<div class="eventRow event">2nd degree black belt - International Wushu Sanshou Dao Association (IWSD)</div>
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