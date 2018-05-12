<!DOCTYPE html>

<?php
$globalNavId = "classes";
$sectionNavId = "sanshou";
?>

<html lang="en">

<head>
<meta name="keywords" content="sanshou, sanshou class, sanshou schedule, sanshou fees, training, sanshou description, sparring, martial arts application" />
<meta name="description" content="Sanshou classes, schedules, and fees at the Shou-Yu Liang Wushu Taiji Qigong Institute " />
<title>Sanshou Class, Schedule, and Fees - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
	var imgs = [];
	imgs.push({file: 'sanshou-block-jumping-round.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'sanshou-block-jumping-side-.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'sanshou-block-roundhouse-ki.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'sanshou-dodge-tornado.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'sanshou-double-side-kick.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'sanshou-founders.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'sanshou-jumping-block.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'sanshou-side-kick.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'sanshou-take-down.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'sanshou-throw.jpg', title: '', desc: '', url: '#'});
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
		path: '/images/classes/sanshou/'
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
        	<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="index.php" class="pathway">Classes</a> <img src="/templates/syl/images/arrow.png" /> Sanshou Class
        </nav>

		<div id="syl-left-col">
			<?php include "../ssi/menu_classes.php"; ?>
		</div>

		<div id="syl-center-col">
			<h2 class="contentheading">Sanshou Class</h2>

			<div id="slidewrap">
				<div id="slideshow"></div>
				<div id="loadingDiv"></div>
			</div>

			<?php
				$sylClassStyle = "Sanshou";
				include "jumi-schedule.php";
			?>
			<br>

			<div id="syl-op">
				<ul class="menu">
					<li>
						<a href="../../book/kung-fu-elements.php">
							<img src="../../images/stories/Book_KungFuElements.jpg" alt="kung-fu-elements" /><span>Kung Fu Elements</span>
						</a>
					</li>
					<li>
						<span class="separator"><span>Kung Fu Elements is the Wushu training manual that martial artists have long awaited. It is the first of its kind in the English language. It contains the essence and elements of both Internal and External Styles of Wushu.</span></span>
					</li>
					<li>
						<a href="../../book/chinese-fast-wrestling-for-fighting.php">
							<img src="../../images/stories/Book_ChineseFastWrestling.jpg" alt="chinese-fast-wrestling-for-fighting" />
							<span>Chinese Fast Wrestling for Fighting</span>
						</a>
					</li>
					<li>
						<span class="separator"><span>For centuries, fighters in China have valued this art for its speed and power. Today, China's police and military forces are trained in its techniques.</span></span>
					</li>
					<li>
						<a href="http://en.wikipedia.org/wiki/San_Shou"><span>Wikipedia - Sanshou</span></a>
					</li>
					<li>
						<a href="http://www.sanshoudao.com/"><span>International Wushu Sanshoudao Association</span></a>
					</li>
					<li>
						<a href="../../images/fbfiles/files/External_Wushu_Class_Curriculum.pdf">
							<img src="../../images/stories/40x38_pdf_icon.gif" alt="download-official-syl-testing-curriculum" />
							<span>Download Official SYL Testing Curriculum</span>
						</a>
					</li>
				</ul>
			</div>

			<h2>Wushu San Shou Dao (Applied Wushu)</h2>
			<p><strong>Wushu</strong> is a Chinese term referring to all martial arts styles. <strong>Sanshou</strong> means the flexible application of martial skills. <strong>Dao</strong> refers to the way, the means, or the approach. Therefore, Wushu Sanshou Dao means "the way of the applying martial skills".</p>
			<p>Wushu Sanshou Dao (under the regiment of the International Wushu Sanshou Dao Association) draws from the vast of knowledge in Chinese Wushu, but is by no means limited to Chinese Wushu. All viable skills and knowledge from other recognized non-Chinese Wushu such as Japanese Wushu(i.e., Karate), Korean Wushu(i.e., Tae Kwan Do) and many other martial arts styles have been, and will continue to be incorporated into the Wushu Sanshou Dao system.</p>
			<p>The training contents of Wushu Sanshou Dao consists of six major components: free sparring techniques, take down and ground fighting techniques, Taiji Push Hands techniques, Qin Na and pressure point attack, internal energy(Qigong) training, and martial art routine training.</p>
			<p>These six major components are not meant to be trained and applied separately. Instead, they should be integrated into a seamless web of skills which are versatile for dealing with different circumstances that may arise in real combat. The ultimate goal of Wushu Sanshou Dao is to nurture and develop the complete martial artist-one who is skilled in long and short range fighting, capable of using internal and physical strength, and is morally righteous with an absolute control over one's own mind and body.</p>
			<h2>Why learn Sanshoudao?  Who should take this class?</h2>
			<ul>
				<li>Anyone over the age of 16 interested in the applied aspect of Wushu and practical self-defense.</li>
				<li>Good for training endurance, strength, speed, and accuracy.</li>
				<li>Required training for International Wushu Sanshou Dao Black Belt certification.</li>
				<li>It is highly advised that students have some Wushu basic training before or in conjunction with Sanshou training.</li>
			</ul>
			<h2>Sanshou Class Structure</h2>
			<p>Sanshou training is integrated into Wushu class, and students are required to train in Wushu class along with Sanshou.  Like Wushu class, Sanshou is ongoing throughout the year allowing students to join at any time and pause or pursue their training as their personal schedules allow.</p>
			<p>This class is taught simultaneously to students grouped by ability, decided at the discretion of Grandmaster Liang or any of the instructors at hand. There are 3 main groups reflecting Beginners, Intermediate, and Advanced students - the style, level, and difficulty of training will be based on students' current ability.</p>
			<h2>What will I learn?</h2>
			<ul>
				<li>Students will learn several routines that emphasize the applied aspects of Wushu, including Xiao Yao Fist and Xiao Yao Shuai which Grandmaster Liang created.  These forms bring together the essences of many other styles including Taiji, Xingyi, and Bagua to allow practitioners to train in applications.</li>
				<li>Students will learn the fundamentals of hand to hand combat and self defense, including the striking with hands (palms, fingers, and fists) and striking with the feet (kicking).  Applied techniques also include grappling and joint control (Qinna), throwing (Shuai Chiao), wrestling, and pressure point attack.</li>
			</ul>
			<h2>Notes/Precautions</h2>
			<ul>
				<li>Upon arrival at our school, please see or have someone direct you to an instructor for more information.</li>
				<li>For people who have any serious health issues, always consult with an SYL instructor before participating in class.</li>
				<li>Wear comfortable exercise clothes.  Jeans and clothing that restrict movement are definitely not recommended. Wear light and comfortable exercise shoes.</li>
				<li>Always follow the directions of the instructors as closely as possible.</li>
			</ul>

		</div>


      </div>
    </div>
  </div>
</div>

<?php include "../ssi/footer.php"; ?>

</body>

</html>