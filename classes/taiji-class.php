<!DOCTYPE html>

<?php
$globalNavId = "classes";
$sectionNavId = "taiji";
?>

<html lang="en">

<head>
<meta name="keywords" content="taiji, taiji class, taiji schedule, taiji fees, training, taiji description, chen style, wu style, yang style, sun style, taiji fan, taiji sword, push hands" />
<meta name="description" content="Taiji classes, schedules, and fees at the Shou-Yu Liang Wushu Taiji Qigong Institute " />
<title>Taiji Class, Schedule, and Fees - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
	var imgs = [];
	imgs.push({file: 'taiji-chen-style.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'taiji-chen-style1.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'taiji-ji.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'taiji-lu.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'taiji-push-hands.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'taiji-yang-style.jpg', title: '', desc: '', url: '#'});
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
		path: '/images/classes/taiji/'
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
        	<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="index.php" class="pathway">Classes</a> <img src="/templates/syl/images/arrow.png" /> Taiji Class
        </nav>

		<div id="syl-left-col">
			<?php include "../ssi/menu_classes.php"; ?>
		</div>

		<div id="syl-center-col">
			<h2 class="contentheading">Taiji Class</h2>

			<div id="slidewrap">
				<div id="slideshow"></div>
				<div id="loadingDiv"></div>
			</div>

			<?php
				$sylClassStyle = "Taiji";
				include "jumi-schedule.php";
			?>
			<br>

			<div id="syl-op">
				<ul class="menu">
					<li>
						<a href="../../dvd/simplified-tai-chi-chuan-with-applications.php">
							<img src="../../images/stories/DVD_TaiChiChuan.jpg" alt="dvd-simplified-tai-chi-chuan-with-applications" />
							<span>DVD - Simplified Tai Chi Chuan with Applications</span>
						</a>
					</li>
					<li>
						<span class="separator"><span>This complete DVD the companion video to the book Tai Chi Chuan, and covers both 24 and 48 Forms and applications.</span></span>
					</li>
					<li>
						<a href="../../book/tai-chi-chuan-24-and-48-postures-with-martial-applications.php">
							<img src="../../images/stories/Book_TaiChiChuan.jpg" alt="book-tai-chi-chuan" />
							<span>Book - Tai Chi Chuan</span>
						</a>
					</li>
					<li>
						<span class="separator"><span>Highly popular guide to Taiji, with 153 pages of full visual instruction on both Taiji 24 and 48 Form with applications.</span></span>
					</li>
					<li>
						<a href="http://en.wikipedia.org/wiki/Taiji"><span>Wikipedia - Taiji</span></a>
					</li>
					<li>
						<a href="http://en.wikipedia.org/wiki/T'ai_Chi_Ch'uan"><span>Wikipedia- Tai Chi Chuan</span></a>
					</li>
					<li>
						<a href="http://www.worldtaichiday.org/"><span>World Tai Chi &amp; Qigong Day</span></a>
					</li>
					<li>
						<a href="../../pdf/TaijiCertificationLevels.pdf">
							<img src="../../images/stories/40x38_pdf_icon.gif" alt="download-official-syl-taiji-testing-curriculum" />
							<span>Download Official SYL Taiji Testing Curriculum</span>
						</a>
					</li>
				</ul>
			</div>

			<h2>What is Taiji?</h2>
			<p><strong>Taiji (Tai Chi)</strong> is one of the major internal styles contained in Wushu. It was originally created as a martial art and the movements of Taiji contain martial applications. It utilizes the ancient philosophy of Yin-Yang and the Five Element theories for its foundation and to establish its training principles. The experience of hundreds of years has shown that practicing Taiji can improve ones health, reduce tension, and cure a number of diseases such as high blood pressure, arthritis, asthma, stomach ailments, heart problems and nervousness. The same techniques that were capable of developing internal Qi for martial arts combat, also proved to be effective as life prolonging, healing, and rejuvenating exercises. Today, Taiji is best known by the millions of participants around the world for its health benefits.</p>
			<p>There are many different styles of Taiji and a great number of Taiji Fist and weapon routines. However, the few major styles that have been recognized both in China and internationally are Yang, Chen, Sun and Wu style Taiji. Our school offers standard Taiji fist and weapon routines, as well as major traditional and competition routines such as Yang, Sun, Chen and Wu style. We also teach and explain the applications of Taiji movements, introducing and training Taiji Push Hands techniques such as the eight basic techniques, standard Push Hands routines, Free Push Hands etc.</p>
			<h2>Why learn Taiji? Who Should take this class?</h2>
			<ul>
				<li>Best for people over 16 years of age who are looking for low-intensity fitness training.</li>
				<li>Suitable for people who may be in weak health as well as good health</li>
				<li>For people who wish to improve their health, fitness level, ability to focus, balance, flexibility, coordination, stamina, strength, body posture, power, and endurance.</li>
				<li>Taiji emphasizes a calm and peaceful mind. The practice of Taiji stimulates the central nervous system, helps to lower blood pressure, relieves stress, strengthens the immune system, enhances elimination of wastes and the circulation of blood, and channels the flow of Chi through the body's meridians.</li>
			</ul>
			<h2>Taiji Class Structure</h2>
			<p>Taiji instruction adheres to Grandmaster Liang's strict teaching standards, focusing on helping to improve students skill levels in a shared, relaxed, and social environment. Training includes all required skills defined by Shou-Yu Liang Wushu Taiji Qigong Internal Curriculum for Taiji certification, as well as traditional, competition, and standard forms and all martial applications.</p>
			<p>All classes will consist warm up, taiji basic training, form training and taiji push hand training.</p>
			<p><a href="../../pdf/TaijiCertificationLevels.pdf">View Taiji Certification Requirements...</a></p>
			<h2>What will I learn?</h2>
			<ul>
				<li>Standard Taiji for beginners and intermediates including Taiji Fist and Taiji Sword; major traditional and competition style such as Yang Style, Wu Style, Sun Style and Chen Style. Each style may have many routines. Using Chen Style as an example, we teach routines such as "Lao Jia Number 1", "Cannon Fist", and "Competition Style".</li>
				<li>As Taiji is a subset of Wushu, we also teach and explain the applications of Taiji movements; introducing and training Taiji Push Hands techniques such as the eight basic techniques of Peng(ward off), Lu(roll back), Ji(press), An(push), Cai(pluck), Lie(split), Zhou(elbow), Kao(body striking), standard Push Hands routines, and Free Push Hands. Students will also learn how to use Taiji techniques to neutralize opponents, how to use the 'soft' to conquer the 'hard/strong', how to use an opponent's strength against him, how to redirect his strength against him, how to use minimal force to move a powerful attack, and many other techniques.</li>
			</ul>
			<h2>Notes/Precautions</h2>
			<ul>
				<li>Upon arrival at our school, please see or have someone direct you to an instructor for more information.</li>
				<li>For people who have any serious health issues, always consult with an SYL instructor before participating in class.</li>
				<li>Wear comfortable exercise clothes. Jeans and clothing that restrict movement are definitely not recommended. Wear light and comfortable exercise shoes.</li>
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