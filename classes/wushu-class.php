<!DOCTYPE html>

<?php
$globalNavId = "classes";
$sectionNavId = "wushu";
?>

<html lang="en">

<head>
<meta name="keywords" content="wushu, wushu class, wushu schedule, wushu fees, training, wushu description" />
<meta name="description" content="Wushu classes, schedules, and fees at the Shou-Yu Liang Wushu Taiji Qigong Institute " />
<title>Wushu Class, Schedule, and Fees - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
	var imgs = [];
	imgs.push({file: 'wushu-broadsword.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'wushu-double-sword.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'wushu-group-longfist.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'wushu-jumping-side-kicks.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'wushu-jumping-spear.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'wushu-jumping-sword.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'wushu-rudy-mo-fan-spear.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'wushu-silhouette.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'wushu-spear.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'wushu-sword-broadsword.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'wushu-sword.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'wushu-three-section-staff.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'wushu-tornado-kick.jpg', title: '', desc: '', url: '#'});
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
		path: '/images/classes/wushu/'
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
        	<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="index.php" class="pathway">Classes</a> <img src="/templates/syl/images/arrow.png" /> Wushu Class
        </nav>

		<div id="syl-left-col">
			<?php include "../ssi/menu_classes.php"; ?>
		</div>

		<div id="syl-center-col">
			<h2 class="contentheading">Wushu Class</h2>

			<div id="slidewrap">
				<div id="slideshow"></div>
				<div id="loadingDiv"></div>
			</div>

			<?php
				$sylClassStyle = "Wushu";
				include "jumi-schedule.php";
			?>
			<br>

			<div id="syl-op">
				<ul class="menu">
					<li>
						<a href="../../book/kung-fu-elements.php">
							<img src="../../images/stories/Book_KungFuElements.jpg" alt="kung-fu-elements" />
							<span>Kung Fu Elements</span>
						</a>
					</li>
					<li>
						<span class="separator">
							<span>Kung Fu Elements is the Wushu training manual that martial artists have long awaited. It is the first of its kind in the English language. It contains the essence and elements of both Internal and External Styles of Wushu.</span>
						</span>
					</li>
					<li>
						<a href="http://en.wikipedia.org/wiki/Wushu_(sport)"><span>Wikipedia - Wushu</span></a>
					</li>
					<li>
						<a href="http://www.beijingwushuteam.com/"><span>Beijing Wushu Team</span></a>
					</li>
				</ul>
			</div>


			<h2>Definition of Wushu</h2>
			<p><strong>Wushu</strong> (Kung Fu) is the proper term for all the martial arts styles in China. It has been practiced in China for thousands of years.Wushu consists of tens of thousands of different External and Internal styles including both bare hands and weapons. Some of the well known external styles are Shaolinquan, Chaquan, Hongquan, Fanziquan and many others. The well known internal styles are Taichi, Bagua, Xingyi, and Water style. Wushu has become a popular international sport that all people can learn and use to attain its inherent benefits. Aside from a means of self-defense, Wushu has also been developed into a sport capable of improving a participant's health and fitness, while improving their reaction time, jumping ability, balance, flexibility, coordination, power, and speed. Even athletes from other sports are taking up Wushu training to complement their physical pursuits and to improve the quality of their performance. Today, Wushu is also a performing art. The performance of a superb Wushu participant can captivate and mesmerize an audience.</p>
			<h2>Wushu Basics</h2>
			<p>Wushu basics are the foundation for learning all the other external and internal styles offered in our school curriculum. It also sets good foundation for learning all kinds of martial arts. Wushu basics focus on different kinds of traditional and modern Wushu training for stances, footwork, kicks, hand techniques, body coordination and balance. A great number of traditional and modern Wushu bare hand and weapon routines are offered such as: a variety of Long Fists, southern style, Yan Qin Quan, Cha Quan, Hong Quan, Preying Mantis(Tang Lang Quan), Fan Zi Quan, Di Tang Quan, Tong Bei Quan, Chuo Jiao Quan, Eagle Style, Drunken Style, Snake Style, Monkey Style, Broadsword, Sword, Spear, Staff, Three Section Staff, Nine Section Whip, Rope Dart, Dagger, Double Broadsword and sword, Long Tassel Sword, Big Saber and many other routines from E Mei and Shao Lin.</p>
			<h2>Why learn Wushu?  Who should take this class?</h2>
			<ul>
				<li>Anyone between 5 - 70 years of age.</li>
				<li>For people who wish to improve their fitness level, flexibility, coordination, reflexes, stamina, power, jumping skills, body posture, endurance, and confidence level.</li>
				<li>For people who would plan to learn any other kinds of martial arts - Wushu basics are the foundation for learning all kinds of martial arts.</li>
				<li>For our school curriculum, Wushu basics are strongly recommended before taking Bagua and Xingyi classes. In fact, most of the students are taking Wushu basics concurrently with other classes such as Taichi, Xingyi and Bagua because the basics they learn in Wushu are great compliments to their learning in other classes.</li>
				<li>A good cross-training style for people in different kinds of sports such as dancing, yoga, pilates, running, hiking, basketball, volleyball, soccer, ice-skating, swimming and many others.  People that have a Wushu foundation will typically find other sports and activities much easier to learn.</li>
			</ul>
			<h2>Wushu Class Structure</h2>
			<p>Wushu classes are ongoing throughout the year allowing students to join at any time and pause or pursue their training as their personal schedules allow.  Students also have the freedom of drop-in classes on a per-class fee basis, though Grandmaster Liang prefers and encourages all students to commit to training on a regular basis for extended periods of time.</p>
			<p>Wushu instruction adheres to Grandmaster Liang's strict teaching standards, focusing on helping to improve students skill levels in a shared, relaxed, and social environment. Training includes all required skills defined by Shou-Yu Liang Wushu Taiji Qigong External Curriculum for Wushu certification, as well as traditional, competition, and standard forms and all martial applications.</p>
			<p>This class is taught simultaneously to students grouped by age and ability, decided at the discretion of Grandmaster Liang or any of the instructors at hand. There are 4 main groups reflecting Children, Beginners, Intermediate, and Advanced students - the style, level, and difficulty of training will be based on students' current ability.</p>
			<p>Friday evening classes focus on Wushu fundamentals and forms.  Saturday afternoon classes focus on Wushu fundamentals and Sanshou (applied Wushu) in real self-defence applications.  Wushu classes begin with at least half an hour of stretching and warm-up, followed by an hour of basic training (punching, kicking, stances, and combos) and then either forms training or Sanshou training.</p>
			<h2>What will I learn?</h2>
			<ul>
				<li>Many different kinds of traditional and modern Wushu training for torso, legs, arms and jumping</li>
				<li>A great number of traditional and modern Wushu bare-hand and weapon routines such as: a variety of Long Fists, southern style, Yan Qin Quan, Cha Quan, Hong Quan, Preying Mantis(Tang Lang Quan), Fan Zi Quan, Di Tang Quan, Eagle Stle, Tong Bei Quan, Drunken Style, Snake Style, Monkey Style, Broadsword, Sword, Spear, Staff, Nine Section Whip, Rope Dart, Double Broadsword and sword, Long Tassel Sword, and many routines from E Mei and Shao Lin. We have more than one hundred different kinds of routines for to learn and to choose from, so students can continue their training at our school for an extended period of time and will always have some new to learn.</li>
				<li>Wushu class also emphasizes self defence and Sanshou training. We teach many kinds of techniques in grappling, throwing, wrestling, punching, kicking, free sparring and the improvement of body power and stamina.</li>
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