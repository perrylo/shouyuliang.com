<!DOCTYPE html>

<?php
$globalNavId = "instructors";
$sectionNavId = "xiao-hong";
?>

<html lang="en">

<head>
<meta name="keywords" content="Xiao Hong Xuan, international champion, wushu, martial arts instructor, martial arts coach, martial artist" />
<meta name="description" content="Trained in martial arts since 1982 and holds a 8th level black belt of the International Wushu Sanshoudao Association" />
<title>Instructor Xuan Xiao Hong - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
var imgs = [];
imgs.push({file: 'Xuan-Xiao-Hong-Wushu-Jumping-Sword.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Xuan-Xiao-Hong-Wushu-Pu-Dao.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Xuan-Xiao-Hong-Wushu.jpg', title: '', desc: '', url: '#'});
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
	path: '/images/instructors/Xuan-Xiao-Hong/'
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
					<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="/instructors/" class="pathway"> Instructors</a> <img src="/templates/syl/images/arrow.png" /> Instructor Xiao Hong Xuan
				</nav>

				<div id="syl-left-col">
					<?php include "../ssi/menu_instructors.php"; ?>
				</div>

				<div id="syl-center-col">
					<div id="syl-contentTop">
						<div class="moduletable-inst-xh">
							<div id="slidewrap">
								<div id="slideshow"></div>
								<div id="loadingDiv"></div>
							</div>
						</div>
					</div>

					<h1 class="contentheading">Instructor Xiao Hong Xuan</h1>

					<div class="article-content">
						<p>Xiao Hong has been with the Shou-Yu Liang Wushu Taiji Qigong Institute since 1982, long before its formal inception.  He is a well respected (and feared) instructor at the school, and quite often can be heard giving reprimands rather than praise.  A professional coach in every respect, Xiao Hong has personally trained and continues to support many of the institute's advanced Wushu students.  Originally from China, he began Wushu in his late teens after immigrating to Canada.  He earned the respect of Grandmaster Liang after proving himself capable of many difficult feats, despite Grandmaster Liang's early reservations in teaching him.  He now trains his students with the same relentless intensity at which he originally trained.</p>
						<h4>Personal Words:</h4>
						<p><em>Faster, louder, more power!  Try again!!!</em></p>
						<div id="instructorAchievements">
							<div class="title">SELECTED LIST OF XIAO HONG'S ACHIEVEMENTS</div>
							<div class="headerRow year">YEAR</div>
							<div class="headerRow event">EVENT</div>
							<div class="eventRow year">2002</div>
							<div class="eventRow event">8th Degree Instructor Certification - Confederation of Canadian Wushu Organizations</div>
							<div class="eventRow year">1989 - 1991</div>
							<div class="eventRow event">Director of IWSD</div>
							<div class="eventRow year">N/A</div>
							<div class="eventRow event">2nd degree in Sanshou</div>
							<div class="eventRow year">N/A</div>
							<div class="eventRow event">4 times gold medalist at the Shanghai International Wushu Competition</div>
							<div class="eventRow year">N/A</div>
							<div class="eventRow event">2 times gold medalist at the US National Wushu Competition</div>
							<div class="eventRow year">N/A</div>
							<div class="eventRow event">Past member of the Canadian National Wushu Team</div>
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