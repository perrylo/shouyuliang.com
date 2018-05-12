<!DOCTYPE html>

<?php
$globalNavId = "instructors";
$sectionNavId = "tony-bujas";
?>

<html lang="en">

<head>
<meta name="keywords" content="Tony Bujas, black belt, martial artist, martial arts instructor" />
<meta name="description" content="Tony Bujas has trained in martial arts since 1975 and holds a 7th level black belt of the International Wushu Sanshoudao Association." />
<title>Instructor Tony Bujas - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
var imgs = [];
imgs.push({file: 'Tony-Bujas-Baguazhang.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Tony-Bujas-Buddhist-Qigong.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Tony-Bujas-Qigong.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Tony-Bujas-Water-Style-Liu-He-Ba-Fa.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Tony-Bujas-Wushu.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Tony-Bujas-Xiao-Yao-Shuai.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Tony-Bujas-Yang-Style-Taiji.jpg', title: '', desc: '', url: '#'});
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
	path: '/images/instructors/Tony-Bujas/'
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
					<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="/instructors/" class="pathway"> Instructors</a> <img src="/templates/syl/images/arrow.png" /> Instructor Tony Bujas
				</nav>

				<div id="syl-left-col">
					<?php include "../ssi/menu_instructors.php"; ?>
				</div>

				<div id="syl-center-col">
					<div id="syl-contentTop">
						<div class="moduletable-inst-tb">
							<div id="slidewrap">
								<div id="slideshow"></div>
								<div id="loadingDiv"></div>
							</div>
						</div>
					</div>

					<h1 class="contentheading">Instructor Tony Bujas</h1>

					<div class="article-content">
						<p>Tony has been training in Vancouver, B.C. Canada with Master Shou-Yu Liang since 1989.  He studies Emei, Bagua, Xing Yi, Taiji, Liu He Ba Fa (Water Style), Sanshou, Qigong, and the Shu Shan Wu Ji Xiao Yao System.  He is an Instructor of the SYL Wushu Institute and also a black belt Instructor of the International Wushu Sanshou Dao Association.</p> <p>Previously Tony has had opportunity to experience other instructors & styles of martial arts.  He started his formal martial arts career with Hung Gar in 1975 and is an instructor in that art and also has know-how in Seven Star Preying Mantis, White Crane, Shaolin and Kickboxing.</p> <p>As a martial artist, he practices to explore and improve himself while keeping fit and learning self defence. Though personally, he enjoys the work and play of training. He is a warm teacher and prefers to share his knowledge with an active sense of humour. It is his hope that the Shou-Yu Liang Wushu Taiji Qigong Institute will become a world wide resource for martial artists everywhere, where they can meet and share knowledge, learn, and develop to their fullest potential.</p>
						<div id="instructorAchievements">
							<div class="title">SELECTED LIST OF TONY'S ACHIEVEMENTS</div>
							<div class="headerRow year">YEAR</div>
							<div class="headerRow event">EVENT</div>
							<div class="eventRow year">2013 - present</div>
							<div class="eventRow event">Active Director of IWSD</div>
							<div class="eventRow year">2013</div>
							<div class="eventRow event">IWSD Award: “Distinguished Contribution to the Advancements of Martial Arts”</div>
							<div class="eventRow year">2009</div>
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