<!DOCTYPE html>

<?php
$globalNavId = "instructors";
$sectionNavId = "francis-lau";
?>

<html lang="en">

<head>
<meta name="keywords" content="Francis Lau, black belt, wushu, martial arts instructor, martial artist" />
<meta name="description" content="Francis Lau has trained in martial arts since 1980 and holds a 3rd level black belt of the International Wushu Sanshoudao Association." />
<title>Instructor Francis Lau - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
var imgs = [];
imgs.push({file: 'Francis-Lau-Taiji.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Francis-Lau-Wushu-Southern-Staff.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Francis-Lau-Xing-Yi.jpg', title: '', desc: '', url: '#'});
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
	path: '/images/instructors/Francis-Lau/'
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
					<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="/instructors/" class="pathway"> Instructors</a> <img src="/templates/syl/images/arrow.png" /> Past Instructor Francis Lau
				</nav>

				<div id="syl-left-col">
					<?php include "../ssi/menu_instructors.php"; ?>
				</div>

				<div id="syl-center-col">
					<div id="syl-contentTop">
						<div class="moduletable-inst-fl">
							<div id="slidewrap">
								<div id="slideshow"></div>
								<div id="loadingDiv"></div>
							</div>
						</div>
					</div>

					<h1 class="contentheading">Past Instructor Francis Lau</h1>

					<div class="article-content">
						<p>'Uncle' Francis has practiced martial arts for over 20 years, and currently teaches children's Wushu at the school. Originally from mainland China, Francis immigrated to Trinidad before settling in Canada. During that time, he trained in Choy Li Fut and Hopkido.</p>
						<p>Martial arts is his main interest, and he enjoys the mental as well as the physical challenges of training. It is his hope to help the school set the standard for Taiji, Qigong, and Wushu training in North America. The Shou-Yu Liang Wushu Taiji Qigong Institute should be the best school in the west.</p>
						<div id="instructorAchievements">
							<div class="title">SELECTED LIST OF FRANCIS' ACHIEVEMENTS</div>
							<div class="headerRow year">YEAR</div>
							<div class="headerRow event">EVENT</div>
							<div class="eventRow year">N/A</div>
							<div class="eventRow event">3rd period Sanshou Dao</div>
							<div class="eventRow year">1997</div>
							<div class="eventRow event">1 Silver, West Coast Can-Am Martial Arts Championships</div>
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