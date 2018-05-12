<!DOCTYPE html>

<?php
$globalNavId = "instructors";
$sectionNavId = "tjong-tjhie";
?>

<html lang="en">

<head>
<meta name="keywords" content="Tjong Tjhie, martial arts instructor, martial artist, wushu, sanshou, sanshoudao, black belt" />
<meta name="description" content="Trained in martial arts since 1981 and holds a 7th level black belt of the International Wushu Sanshoudao Association." />
<title>Instructor Tjong Tjhie - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
var imgs = [];
imgs.push({file: 'Tjong-Tjhie-Chen-Style-Taiji.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Tjong-Tjhie-Wushu-Empty-Stance.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Tjong-Tjhie-Wushu-Spear.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Tjong-Tjhie-Wushu-Yan-Qing-Quan.jpg', title: '', desc: '', url: '#'});
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
	path: '/images/instructors/Tjong-Tjhie/'
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
					<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="/instructors/" class="pathway"> Instructors</a> <img src="/templates/syl/images/arrow.png" /> Instructor Tjong Tjhie
				</nav>

				<div id="syl-left-col">
					<?php include "../ssi/menu_instructors.php"; ?>
				</div>

				<div id="syl-center-col">
					<div id="syl-contentTop">
						<div class="moduletable-inst-tt">
							<div id="slidewrap">
								<div id="slideshow"></div>
								<div id="loadingDiv"></div>
							</div>
						</div>
					</div>

					<h1 class="contentheading">Instructor Tjong Tjhie</h1>

					<div class="article-content">
						<p>Tjong has been practicing Wushu since the early 1980s. In the past, he has competed in both modern wushu and sanshou.  He practices Wushu, Taiji and Qigong for health and self-discipline.  Tjong also enjoys the classes for the great people he gets to meet at the Shou-Yu Liang Wushu Taiji Institute.</p> <p>Chinese martial arts has provided Tjong a great foundation that has benefitted him in many other areas in life, and he hopes that the institute will continue to foster a great and positive atmosphere in which to learn Chinese martial arts.</p>
						<br />
						<div id="instructorAchievements">
							<div class="title">SELECTED LIST OF TJONG'S ACHIEVEMENTS</div>
							<div class="headerRow year">YEAR</div>
							<div class="headerRow event">EVENT</div>
							<div class="eventRow year">2013 - present</div>
							<div class="eventRow event">Active Director of IWSD</div>
							<div class="eventRow year">2013</div>
							<div class="eventRow event">IWSD Award: "“Distinguished Contribution to the Advancements of Martial Arts”</div>
							<div class="eventRow year">2007</div>
							<div class="eventRow event">7th degree black belt - International Wushu Sanshou Dao Association (IWSD)</div>
							<div class="eventRow year">2001</div>
							<div class="eventRow event">Canadian National Sanshou Champion 65kg</div>
							<div class="eventRow year">2001</div>
							<div class="eventRow event">Member of Canadian National Wushu Team</div>
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