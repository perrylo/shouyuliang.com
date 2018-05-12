<!DOCTYPE html>

<?php
$globalNavId = "instructors";
$sectionNavId = "mo-hui";
?>

<html lang="en">

<head>
<meta name="keywords" content="Mo Hui, international champion, black belt, wushu, martial arts instructor, martial artist" />
<meta name="description" content="Mo Hui has trained in martial arts since 1993 and holds a 3rd level black belt of the International Wushu Sanshoudao Association." />
<title>Instructor Mo Fong Hui - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
var imgs = [];
imgs.push({file: 'Mo-Hui-Fan-Zi-Quan.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Mo-Hui-Qigong.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Mo-Hui-Wushu-Butterfly-Kick.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Mo-Hui-Wushu-Jumping-Side-Kick.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Mo-Hui-Wushu-Nine-Section-Whip.jpg', title: '', desc: '', url: '#'});
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
	path: '/images/instructors/Mo-Hui/'
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
					<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="/instructors/" class="pathway"> Instructors</a> <img src="/templates/syl/images/arrow.png" /> Instructor Mo Fong Hui
				</nav>

				<div id="syl-left-col">
					<?php include "../ssi/menu_instructors.php"; ?>
				</div>

				<div id="syl-center-col">
					<div id="syl-contentTop">
						<div class="moduletable-inst-mh">
							<div id="slidewrap">
								<div id="slideshow"></div>
								<div id="loadingDiv"></div>
							</div>
						</div>
					</div>

					<h1 class="contentheading">Instructor Mo Fong Hui</h1>

					<div class="article-content">
						<p>Mo has been with the Shou-Yu Liang Wushu Taiji Qigong Institute since 1993 and is one of the top athletes in the school.  Since the age of 12, Mo has had an obsession with hockey, and from the age of 16 he has been addicted to skiing and snowboarding.  Proudly Canadian, he follows the Vancouver Canucks hockey team zealously and spends every other winter/spring weekend in the famous local snow hills of Whistler-Blackcomb.  During most days, he is mild mannered Mo Fong Hui - programmer and trouble shooter for an IT department for a respectable financial institution.  At night, he is Mo Fong Hui, at Wushu, Iron Shirt Qi Gong, Da Pong Qi Gong, Bagua, Xing Yi, and Sanshoudo.</p>
						<p>Mo practices martial arts mainly for fitness and enlightenment.  He follows the teachings of Grandmaster Liang, that "a martial artist strives to be a true all around good human being and athlete, balancing both internal and external, and always a gentleman or lady in society."  His hope is to help Sifu reach his envisionment of a <em>Wushu Village</em>, and will endeavour to see this dream become reality with the best of his ability.</p>
						<p> </p>
						<h4>Personal Words:</h4>
						<p><em>'Nothingness' is the essence of Tao and 'Being' is the manifestation of Tao.  That which is there alone cannot be very useful unless both the states of what exists and what does not exist are combined.</em></p>
						<div id="instructorAchievements">
							<div class="title">SELECTED LIST OF MO'S ACHIEVEMENTS</div>
							<div class="headerRow year">YEAR</div>
							<div class="headerRow event">EVENT</div>
							<div class="eventRow year">2013 - present</div>
							<div class="eventRow event">Active Director of IWSD</div>
							<div class="eventRow year">2010</div>
							<div class="eventRow event">5th degree black belt - International Wushu Sanshou Dao Association (IWSD)</div>
							<div class="eventRow year">2010</div>
							<div class="eventRow event">1 Silver, Wudang Mountain International Wushu Health Conference</div>
							<div class="eventRow year">2008</div>
							<div class="eventRow event">3rd degree black belt - International Wushu Sanshou Dao Association (IWSD)</div>
							<div class="eventRow year">1997</div>
							<div class="eventRow event">1st Place for Nine-Section Whip, Orlando</div>
							<div class="eventRow year">1997</div>
							<div class="eventRow event">4th Place for Fan Zi Chuan, Orlando</div>
							<div class="eventRow year">N/A</div>
							<div class="eventRow event">Member of the Canadian National Sanshou B-Team</div>
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