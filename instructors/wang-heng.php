<!DOCTYPE html>

<?php
$globalNavId = "instructors";
$sectionNavId = "wang-heng";
?>

<html lang="en">

<head>
<meta name="keywords" content="Wang Heng, wushu, internation champion, martial arts instructor, martial arts" />
<meta name="description" content="Wang Heng has trained in martial arts since 1983 and holds a holds a six degree(Dan) in Wushu." />
<title>Instructor Wang Heng - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
var imgs = [];
imgs.push({file: 'wang-heng-horse-tail-whip-wushu.jpg', title: '', desc: '', url: '#'});
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
	path: '/images/instructors/Wang-Heng/'
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
					<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="/instructors/" class="pathway"> Instructors</a> <img src="/templates/syl/images/arrow.png" /> Past Instructor Wang Heng
				</nav>

				<div id="syl-left-col">
					<?php include "../ssi/menu_instructors.php"; ?>
				</div>

				<div id="syl-center-col">
					<div id="syl-contentTop">
						<div class="moduletable-inst-wh">
							<div id="slidewrap">
								<div id="slideshow"></div>
								<div id="loadingDiv"></div>
							</div>
						</div>
					</div>

					<h1 class="contentheading">Past Instructor Wang Heng</h1>

					<div class="article-content">
						<p>Wang Heng started her Wushu Training in 1983. She was chosen to train with He Nan Professional Wushu Team in 1986 under Master Ma Chun Xi, who was elected as one of the One Hundred Wushu Elites. During her many years of Wushu training, Wang Heng had participated in numerous national and international Wushu competitions. She was the recipient of gold medals in double broadsword and single broadsword, as well as bronze medals in staff and bare hand forms. She had received the title of Wu Ying Athlete and holds a six degree(Dan) in Wushu. Through the mastering of the many physical techniques of Wushu, Wang Heng deeply learns the charm of Wushu. Through Wushu, she also learns the spirit of respecting ones teacher and the art itself. During her times working at the He Nan Wushu Sports Administration centre, she had very often organized and participated in Wushu and San Da(Free Sparring) competitions, acting as Wushu and San Da judges. She wishes to continue her Wushu spirit here in Canada!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include "../ssi/footer.php"; ?>

</body>

</html>