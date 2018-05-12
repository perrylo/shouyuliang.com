<!DOCTYPE html>

<?php
$globalNavId = "instructors";
$sectionNavId = "michael-levenston";
?>

<html lang="en">

<head>
<meta name="keywords" content="Michael Levenston, martial arts, instructor, sanshou, sanshoudao, black belt, cityfarmer" />
  <meta name="description" content="Trained in martial arts since 1971 and holds a 8th level black belt of the International Wushu Sanshoudao Association." />
  <title>Instructor Michael Levenston - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
var imgs = [];
imgs.push({file: 'Michael-Levenston-Sanshou-1.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Michael-Levenston-Sanshou.jpg', title: '', desc: '', url: '#'});
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
	path: '/images/instructors/Michael-Levenston/'
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
					<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="/instructors/" class="pathway"> Instructors</a> <img src="/templates/syl/images/arrow.png" /> Instructor Michael Levenston
				</nav>

				<div id="syl-left-col">
					<?php include "../ssi/menu_instructors.php"; ?>
				</div>

				<div id="syl-center-col">
					<div id="syl-contentTop">
						<div class="moduletable-inst-ml">
							<div id="slidewrap">
								<div id="slideshow"></div>
								<div id="loadingDiv"></div>
							</div>
						</div>
					</div>

					<h1 class="contentheading">Instructor Michael Levenston</h1>

					<div class="article-content">
						<div style="float:right; width:150px; margin:0 0 15px 15px;">
							<a href="http://www.cityfarmer.org/" target="_blank"><b>CityFarmer.org</b></a>
							<br>
							Michael Levenston operates the leading website on urban agriculture and gardening, CityFarmer.org.
							<div class="more"><a href="http://www.cityfarmer.org/" target="_blank">Visit CityFarmer...</a></div>
						</div>
						<p>Mike is originally from Toronto and began studying martial arts with Karate in 1971.  He started Sanshou with Grandmaster Liang when he first came to Vancouver.  Besides teaching Sanshou, Mike also practices Bagua, Tai Chi, Xing Yi, and Iron Shirt Qi Gong.  His view on martial arts is that they help to keep us healthy.  He believes that the classes are a great place to meet people, as he first met his wife Joan in Karate.  It is his hope that Grandmaster Liang will continue to publish his knowledge and keep teaching his wonderful Wushu classes.</p>
						<br />
						<div id="instructorAchievements">
							<div class="title">SELECTED LIST OF MICHAEL'S ACHIEVEMENTS</div>
							<div class="headerRow year">YEAR</div>
							<div class="headerRow event">EVENT</div>
							<div class="eventRow year">2008</div>
							<div class="eventRow event">8th degree black belt - International Wushu Sanshou Dao Association (IWSD)</div>
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