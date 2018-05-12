<!DOCTYPE html>

<?php
$globalNavId = "instructors";
$sectionNavId = "perry-lo";
?>

<html lang="en">

<head>
<meta name="keywords" content="Perry Lo, wushu, black belt, martial arts instructor, martial artist" />
<meta name="description" content="Trained in martial arts since 1993 and holds a 2nd level black belt of the International Wushu Sanshoudao Association." />
<title>Perry Lo - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
var imgs = [];
imgs.push({file: 'Perry-Lo-Qigong-Meditation.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Perry-Lo-Wushu-Rope-Dart-1.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Perry-Lo-Wushu-Rope-Dart.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Perry-Lo-Wushu-Southern-Broadsword-1.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Perry-Lo-Wushu-Southern-Broadsword.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Perry-Lo-Wushu-Yan-Qing-Quan.jpg', title: '', desc: '', url: '#'});
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
	path: '/images/instructors/Perry-Lo/'
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
					<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="/instructors/" class="pathway"> Instructors</a> <img src="/templates/syl/images/arrow.png" /> Perry Lo
				</nav>

				<div id="syl-left-col">
					<?php include "../ssi/menu_instructors.php"; ?>
				</div>

				<div id="syl-center-col">
					<div id="syl-contentTop">
						<div class="moduletable-inst-pl">
							<div id="slidewrap">
								<div id="slideshow"></div>
								<div id="loadingDiv"></div>
							</div>
						</div>
					</div>

					<h1 class="contentheading">Perry Lo</h1>

					<div class="article-content">
						<p>Originally from Edmonton, Perry moved to Vancouver in 1988 and started Wushu in 1993 during his freshman year at the University of British Columbia. For him, Wushu was simply something new to try, but eventually became an addiction due to its rich culture and history. He has stuck with ever since and firmly believes that training is his source of discipline and fitness. The rich Chinese art and history that he has been exposed to has made him more involved with his culture, and has allowed him to meet many people and make many new friends.</p>
						<p>Wushu is a great way to become more involved with his Chinese heritage. Perry hopes that the Shou-Yu Liang Wushu Taiji Qigong Institute will become an internationally celebrated Canadian school for Chinese martial arts. He has long wanted to see the school in a newer, larger, and better facility, and will work to the best of his ability to see this dream become reality.</p>
						<br />
						<h4>Personal Words:</h4>
						<p><em>It is unquestionably clear in my mind that the person I am today (physically, mentally, and spiritually) is largely due to my exposure to Chinese martial arts and Chinese culture.  I'm proud to be Canadian, yet at the same time, I am also proud to be Chinese.  I consider myself fortunate to have met and trained with the many talented athletes at the Shou-Yu Liang Wushu Taiji Qigong Institute.  My deepest appreciation goes to Grandmaster Liang and all my friends at the school for helping me to acheive all that I have.</em></p>
						<div id="instructorAchievements">
							<div class="title">SELECTED LIST OF PERRY'S ACHIEVEMENTS</div>
							<div class="headerRow year">YEAR</div>
							<div class="headerRow event">EVENT</div>
							<div class="eventRow year">2000-Present</div>
							<div class="eventRow event">Designer and developer of ShouyuLiang.com</div>
							<div class="eventRow year">2008</div>
							<div class="eventRow event">1st degree black belt - International Wushu Sanshou Dao Association (IWSD)</div>
							<div class="eventRow year">2003-2004</div>
							<div class="eventRow event">Participated in the filming of Tai Chi, the instruction television series by Grandmaster Shou-Yu Liang and Helen Liang</div>
							<div class="eventRow year">1997/1998/2000</div>
							<div class="eventRow event">1 Gold, 2 Silver, 2 Bronze at the West Coast Can-Am Championships</div>
							<div class="eventRow year">2000</div>
							<div class="eventRow event">1 Silver and 1 Bronze at the Canadian Kung Fu Championships</div>
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