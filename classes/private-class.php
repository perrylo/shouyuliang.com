<!DOCTYPE html>

<?php
$globalNavId = "classes";
$sectionNavId = "private";
?>

<html lang="en">

<head>
<meta name="keywords" content="private class, private training, exclusive, one on one training, personal class, personal training" />
<meta name="description" content="Private one-on-one Classes in varying Chinese martial arts styles with SYL instructors are available." />
<title>Private Class, Schedule, and Fees - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
	var imgs = [];
	imgs.push({file: 'qigong/qigong-sun-meditation.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'water-style/lhbf-helen.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'bagua/bagua-stance.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'taiji/taiji-push-hands.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'xiaoyao/xiaoyao-take-down.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'wushu/wushu-sword-broadsword.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'xingyi/xingyi-an-shen-pao.jpg', title: '', desc: '', url: '#'});
	var myshow = new Slideshow('slideshow', {
		type: 'combo',
		externals: 0,
		showTitleCaption: 1,
		captionHeight: 45,
		width: 775,
		height: 320,
		pan: 50,
		zoom: 50,
		loadingDiv: 1,
		resize: true,
		duration: [2000, 9000],
		transition: Fx.Transitions.Cubic.easeInOut,
		images: imgs,
		path: '/images/classes/'
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
        	<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="index.php" class="pathway">Classes</a> <img src="/templates/syl/images/arrow.png" /> Private Class
        </nav>

		<div id="syl-left-col">
			<?php include "../ssi/menu_classes.php"; ?>
		</div>

		<div id="syl-center-col">
			<h2 class="contentheading">Private One-on-One Training</h2>

			<div id="slidewrap">
				<div id="slideshow"></div>
				<div id="loadingDiv"></div>
			</div>

			<p>The Shou-Yu Liang Wushu Taiji Qigong Institute offers private classes for any martial arts practitioners looking to take their training to the next level.  One-on-one training with an SYL instructor means being able to ask questions, break down postures and applications, and receiving personalized instruction.  With an instructor's undivided attention and assistance you can explore more advanced techniques, learning to overcome any roadblocks and push yourself further than in a group class.</p>
			<b>Who are Private Classes for?</b>
			<ul>
				<li>Martial arts practitioners of any level or background wanting to improve quickly or gain an edge with any style we teach</li>
				<li>Martial artists that want to master a particular skill</li>
				<li>Students who are unable to attend our scheduled classes at the times provided and need a more flexible schedule</li>
				<li>Athletes that want a customized training regime</li>
			</ul>
			<p>For more information, or if you wish to arrange private classes, please email us: <a href="mailto:info@shouyuliang.com">info@shouyuliang.com</a></p>

		</div>


      </div>
    </div>
  </div>
</div>

<?php include "../ssi/footer.php"; ?>

</body>

</html>