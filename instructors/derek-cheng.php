<!DOCTYPE html>

<?php
$globalNavId = "instructors";
$sectionNavId = "derek-cheng";
?>

<html lang="en">

<head>
<meta name="keywords" content="Derek Cheng, international champion, black belt, wushu, sanshou, martial arts instructor, martial artist" />
<meta name="description" content="Derek Cheng has trained in martial arts since 1989 and holds a 7th level black belt of the International Wushu Sanshoudao Association." />
<title>Instructor Derek Cheng - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
var imgs = [];
imgs.push({file: 'Derek-Cheng-Bagua-Broadsword.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Derek-Cheng-Taiji-Push-Hands-Sam-Masich.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Derek-Cheng-Wushu-Empty-Stance-Sword.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Derek-Cheng-Wushu-Jumping-Sword.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Derek-Cheng-Wushu.jpg', title: '', desc: '', url: '#'});
imgs.push({file: 'Derek-Cheng-Xiao-Yao-Shuai.jpg', title: '', desc: '', url: '#'});
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
	path: '/images/instructors/Derek-Cheng/'
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
					<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="/instructors/" class="pathway"> Instructors</a> <img src="/templates/syl/images/arrow.png" /> Instructor Derek Cheng
				</nav>

				<div id="syl-left-col">
					<?php include "../ssi/menu_instructors.php"; ?>
				</div>

				<div id="syl-center-col">
					<div id="syl-contentTop">
						<div class="moduletable-inst-dc">
							<div id="slidewrap">
								<div id="slideshow"></div>
								<div id="loadingDiv"></div>
							</div>
						</div>
					</div>

					<h1 class="contentheading">Instructor Derek Cheng</h1>

					<div class="article-content">
						<p>Originally from Hong Kong, Derek came to Canada in 1988 and started Wushu in the following year.  As he progressed, his interest in martial arts grew as he found that he not only increased his health but also developed his Chinese culture, including history, music, and the arts.  He currently helps to teach the advanced Wushu class and actively participates in Sanshou, Bagua, Xing Yi, Taiji, and Iron Shirt Qigong.</p>
						<p>In his view, martial arts are a good way for a person to achieve mental, physical, and spiritual unification.  When he first started, he knew nothing of Wushu and saw it only as a sport.  Now, Derek has come to see it as a way of life.  As an instructor, he is spirited and views everything with an open mind while striving for perfection when he teaches.</p>
						<h4>Personal Words:</h4>
						<p><em>I hope the institute can retain its family atmosphere, where everybody can learn from each other and practice in a non-competitive way.  I truly believe that wushu is much more than a sport.   Everyone should focus not only on the physical benefit of wushu, but also on the mental and spiritual development as well.  It is a cultivation of a lifetime.</em></p>
						<div id="instructorAchievements">
							<div class="title">SELECTED LIST OF DEREK'S ACHIEVEMENTS</div>
							<div class="headerRow year">YEAR</div>
							<div class="headerRow event">EVENT</div>

							<div class="eventRow year">2014</div>
							<div class="eventRow event">Obtained level 8th degree from The World Organization of Wushu Kung Fu Masters</div>
							<div class="eventRow year">2013 - present</div>
							<div class="eventRow event">Active Director of IWSD</div>
							<div class="eventRow year">2013</div>
							<div class="eventRow event">IWSD Award: “Distinguished Contribution to the Advancements of Martial Arts”</div>
							<div class="eventRow year">2004-2007</div>
							<div class="eventRow event">Vice-President of the Wushu BC</div>
							<div class="eventRow year">2007</div>
							<div class="eventRow event">7th degree black belt - International Wushu Sanshou Dao Association (IWSD)</div>
							<div class="eventRow year">2003</div>
							<div class="eventRow event">Canadian National Sanshou Team Coach</div>
							<div class="eventRow year">2002</div>
							<div class="eventRow event">7th Degree Instructor Certification - Confederation of Canadian Wushu Organizations</div>
							<div class="eventRow year">2001</div>
							<div class="eventRow event">Certified Sanshou Judge of the International Wushu Federation (IWUF)</div>
							<div class="eventRow year">2001</div>
							<div class="eventRow event">Member of Canadian National Wushu Team</div>
							<div class="eventRow year">2001</div>
							<div class="eventRow event">Canadian National Sanshou Champion</div>
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