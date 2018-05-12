<!DOCTYPE html>

<?php
$globalNavId = "classes";
$sectionNavId = "qigong";
?>

<html lang="en">

<head>
<meta name="keywords" content="qigong, qigong class, qigong schedule, qigong fees, training, qigong description, meditation, healing" />
<meta name="description" content="Qigong classes, schedules, and fees at the Shou-Yu Liang Wushu Taiji Qigong Institute " />
<title>Qigong Class, Schedule, and Fees - shouyuliang.com</title>
<?php include "../ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
	var imgs = [];
	imgs.push({file: 'qigong-hands.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'qigong-immovable-foundation.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'qigong-meditation-sea.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'qigong-meditation.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'qigong-meditation1.jpg', title: '', desc: '', url: '#'});
	imgs.push({file: 'qigong-sun-meditation.jpg', title: '', desc: '', url: '#'});
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
		path: '/images/classes/qigong/'
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
        	<a href="/" class="pathway">Home</a> <img src="/templates/syl/images/arrow.png" /> <a href="index.php" class="pathway">Classes</a> <img src="/templates/syl/images/arrow.png" /> Qigong Class
        </nav>

		<div id="syl-left-col">
			<?php include "../ssi/menu_classes.php"; ?>
		</div>

		<div id="syl-center-col">
			<h2 class="contentheading">Qigong Class</h2>

			<div id="slidewrap">
				<div id="slideshow"></div>
				<div id="loadingDiv"></div>
			</div>

			<?php
				$sylClassStyle = "Qigong";
				include "jumi-schedule.php";
			?>
			<br>

			<div id="syl-op">
				<ul class="menu">
					<li>
						<a href="../../book/qigong-empowerment.shtml">
							<img src="../../images/stories/Book_QigongEmpowerment.jpg" alt="qigong-empowerment" />
							<span>Qigong Empowerment</span>
						</a>
					</li>
					<li>
						<span class="separator"><span>The most unique and complete volume ever written in the English language on Qigong, this 348 page volume can be used for attaining better health, healing, gaining extraordinary power, and spiritual development.</span></span>
					</li>
					<li>
						<a href="http://www.nqa.org/"><span>National Qigong Association</span></a>
					</li>
					<li>
						<a href="http://en.wikipedia.org/wiki/Qigong"><span>Wikipedia - Qigong</span></a>
					</li>
					<li>
						<a href="http://www.qigonginstitute.org/"><span>Qigong Institute</span></a>
					</li>
				</ul>
			</div>

			<h2>What is Qigong?</h2>
			<p><strong>Qi</strong> is a Chinese term used to refer to all types of energy. It is the intrinsic substance or the "vital force" behind all things in the universe. <strong>Gong</strong> refers to the power to produce an effect, an attainment of, or accomplishment that is achieved with steady practice. Loosely, Qigong (chi kung) can be translated as <strong><em>the study of Qi</em></strong>.</p>
			<p>Today, Qigong most often refers to the art and science of using breath, posture, movement, and/or sound to cleanse, refine, accumulate and circulate Qi in the body. This leads to improved health, transformation of consciousness, and greater power for martial arts. The four main types of Qigong societies are Medical, Taoist, Buddhist, and Martial Arts.</p>
			<p>Through the cultivation and regulation of body, mind, breathing, and vocalization, our resistance to disease, adaptability to the external environment, and immunity to pathogenic influences is strengthened. With a strong immune system, diseases are prevented, creating a state of super health, vitality, and youthfulness for the practitioner.</p>
			<h2>Why learn Qigong? Who should take this class?</h2>
			<ul>
				<li>Best for people over 16 years of age who are looking for low-intensity fitness training.</li>
				<li>Good for reducing stress, preventing illness, increasing vitality, and enhancing overall health.</li>
				<li>Qigong training is a way to attain Great Wisdom, and to realize the true nature of human existence and its relation with the cosmos.</li>
			</ul>
			<h2>Qigong Class Structure</h2>
			<p>Qigong classes are taught personally by Grandmaster Shou-Yu Liang over 4 month periods, each period covering a specific Qigong style. Students are asked to commit to regular training over these periods, avoiding missing class as best as they can. Once begun, Grandmaster Liang may not allow new students to join until the next period of training. Drop-in availability is limited to certain Qigong styles  please see the latest scheduling information above.</p>
			<h2>What will I learn?</h2>
			<ul>
				<li>Qigong training in our school includes the following:</li>
				<li><strong>Medical Qigong</strong> for health (Baojian Qigong or Yiliao Qigong) where we will introduce a variety of techniques such as relaxation methods, Qi Permeating Technique which works on absorbing the pure essence of the universe into the body and discharging all the impurities from the body. This allows students to maintain, heal, and rejuvenate the functions of the organs such as the kidneys, liver, lungs, spleen, and heart. We also introduce some traditional Qigong methods for healing specific illnesses such as diabetes, heart disease, tuberculosis, kidney ailments, stomach and duodenal ulcer, liver ailments, high blood pressure, asthma, and many other conditions.</li>
				<li><strong>Emitting and Absorbing Qigong</strong> - Shaolin internal Qi training as to how to absorb Qi to make oneself stronger, how to emit Qi to help others.</li>
				<li><strong>Daoist Qigong System</strong> - we have a system of methods which discuss both the longevity training and the higher spiritual purposes of the training; how to elevate from the level of Qi cultivation to light cultivation and to spirit cultivation. We offer a great number of methods such as Fundamentals of Qi Circulation, Microcosmic Circulation, Macrocosmic Circulation, Nine Rotations to Bring Back the Spiritual Elixir, Eight Extraordinary Vessel Circulation, 14 Meridian Circulation, and Sunrise and Sunset Circulation.<br>
				The Daoist Qigong Cultivation Class mainly revolves around the Cultivation of Traditional Internal Elixir（内丹) and the Double Cultivation of Body and Spirit （性命双修）.The class begins with an introduction of several breathing techniques with a goal of building and strengthening Qi in the Dantian and to prepare one for Cosmic Circulation（周天循环 ). Then it moves to the Cultivation of Spirit (性功修炼）which includes methods such as “Golden Light”, “Gathering Light”, “Big Dipper”, “Initiating the Spirit”, “Gather Together the Five Elements”（攒簇五行）、“Harmonizing Four Phases”（合和四象） “Regulating the Spirit Light”, “Nurturing the Original Spirit”, “Letting Out the Original Spirit”, “Returning of the Original Spirit”, etc. “Cultivation of the Physical Body” that will be introduced in class including methods such as “Reflect Back of the Spirit on Dantian”, “Embryonic Breathing”, “Gathering Herbs (obtains internal essence)”, etc. These are methods that aim to train oneself moving out of the form and into the formless（出有入無). The for mentioned methods are merely a small part of of the essence of “Daoist Qigong Cultivation” which has had a history of thousands of years, and they serve to help one obtain Pre-Heaven Essence, strengthen the body, maintain health, regain youth and ultimately build a strong foundation for yet higher level cultivations.
				</li>
				<li><strong>Buddhist Qigong System</strong> - we have a system of training that consists mostly of traditional methods such as Nine Segment Buddhist Breathing, Precious Vessel Qigong, Achieving Through Spiritual Flame, The Great Perfection-The Heart Essence, Armor Protection From Negative Energies, and The Nine Esoteric Seals.</li>
				<li>Note: for both Taoist and Buddhist Qigong, we are not referring to religions. Many Chinese follow the philosophy of Buddhism and Taoism as a part of their culture and way of life, not necessarily as a religion.</li>
				<li><strong>Yi Jin Jing (Tendon Changing Classic)</strong> - Qigong exercises for health building that date back to ancient China, the purpose of Yi Jin Jing is to strengthen the muscles and tendons.</li>
				<li><strong>Wu Qin Xi (Frolics of Five Animals)</strong> - was developed by Hua Tuo, the most famous doctor in the Eastern Han Dynasty (25 - 220AD). This Qigong derives its health rejuvenating properties from mimicking the movements of the Tiger, Deer, Bear, Monkey, and Bird.</li>
				<li><strong>Wushu Qigong</strong> - traditional martial arts have always included Qigong as part of the internal energy training. This special type of Qigong is not just for fighting. It is also for strengthening the mind and body. A healthy mind and body are the foundation for a proficient martial artist. We offer classes for offensive hard Qigong training for improving one's fighting applications and Iron Shirt Qigong training to strengthen and develop one's physical ability to withstand powerful attacks.</li>
			</ul>
			<h2>Notes/Precautions</h2>
			<ul>
				<li>Daoist and Buddhist Qigong do not refer to religion. Many Chinese follow the philosophy of Buddhism and Taoism as a part of their culture and way of life, though not necessarily as a religion.</li>
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