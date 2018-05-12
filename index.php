<!DOCTYPE html>

<?php
$globalNavId = "home";
?>


<html lang="en">

<head>
<title>Shou-Yu Liang Wushu Taiji Qigong Institute home - shouyuliang.com</title>
<meta name="keywords" content="Grandmaster, Shou-Yu Liang, Wushu, Taiji, Qigong, Institute, Website, Chinese Martial Arts, wushu class, tai chi class, qigong class, learn wushu, learn tai chi, learn qigong" />
<meta name="description" content="Shou-Yu Liang Wushu Taiji Qigong Institute teaches Chinese martial arts, Wushu, Tai Chi, and Qigong" />
<?php include "ssi/meta.php"; ?>
<script type="text/javascript">
window.addEvent('load', function() {
   var imgs = [];
   imgs.push({file: '1.jpg', title: '', desc: '', url: '#'});
   imgs.push({file: '2.jpg', title: '', desc: '', url: '#'});
   imgs.push({file: '3.jpg', title: '', desc: '', url: '#'});
   imgs.push({file: '4.jpg', title: '', desc: '', url: '#'});
   var myshow = new Slideshow('slideshow', {
   	type: 'fade',
   	externals: 0,
   	showTitleCaption: 1,
   	captionHeight: 45,
   	width: 773,
   	height: 318,
   	pan: 50,
   	zoom: 50,
   	loadingDiv: 1,
   	resize: true,
   	duration: [2000, 9000],
   	transition: Fx.Transitions.Cubic.easeInOut,
   	images: imgs,
   	path: '/images/homeslide/'
   });

   myshow.caps.h2.setStyles({color: '#fff', fontSize: '13px'});
   myshow.caps.p.setStyles({color: '#ccc', fontSize: '11px'});
});

</script>
<link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
 /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
    We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
#mc_embed_signup{ background:none; clear:left; font:14px Helvetica,Arial,sans-serif; }
#mc_embed_signup form { padding:0; }
#mc_embed_signup input.email { width:550px; float:left; margin:0 5px 15px 0; }
#mc_embed_signup input.button { clear:none; margin:0;  }
</style>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>

<body>

<?php include "ssi/header.php"; ?>

<div id="syl-body-bkg">
  <div id="syl-body">
    <div id="syl-body1">
      <div class="contentWidth clearfix">
        <div id="syl-center-col">
          <div id="syl-contentTop">
            <ul>
              <li><a href="/instructors/shou-yu-liang.php">Grandmaster Shou-Yu Liang</a></li>
              <li><a href="/instructors/ben-chenhan-yang.php">Master Chenhan Yang</a></li>
              <li><a href="/instructors/helen-liang.php">Master Helen Liang</a></li>
              <li><a href="/about-us/school-location.php">School Location</a></li>
              <li><a href="/classes/all-class-schedules-fees.php">Full Class Schedule/Fees</a></li>
              <li><a href="/pdf/SYL_Brochure.pdf">Our Brochure (PDF)</a></li>
              <li><a href="/about-us/contact-information.shtml">Contact us</a></li>
            </ul>

            <div class="moduletable-classHomeMasthead">
              <div id="slidewrap">
                <div id="slideshow"></div>
                <div id="loadingDiv"></div>
              </div>
            </div>

            <br clear="all"/>
            <br/>
            <br/>
            <h1>Welcome to the Shou-Yu Liang Wushu Taiji Qigong Institute</h1>
            <p>Traditional Chinese martial arts instruction in Vancouver since 1987</p>

            <div id="mc_embed_signup">
              <form action="http://shouyuliang.us6.list-manage.com/subscribe/post?u=38d6116fd8aedd16456fa2270&amp;id=c6dbe9b921" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <h3 style="font-size:15px;">Subscribe to the SYL mailing list!</h3>
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                <input type="submit" value="Subscribe Now" name="subscribe" id="mc-embedded-subscribe" class="button" style="border:solid 1px #ccc !important; color:#f00; background:none; width:150px !important; height:34px !important;">
              </form>
            </div>

          </div>
          <div id="syl-contentHalfLeft">
            <h3>School Announcements</h3>
            <?php
              if (file_exists('byang/syl_schedule.xml'))
              {
                $xml = simplexml_load_file('byang/syl_schedule.xml');

                $announcementCount = 0;
                $announcementHTML = "";

                $aTodaysDate = getdate();
                $oTodaysDate = date("Y-m-d", mktime(0,0,0, $aTodaysDate[mon], $aTodaysDate[mday], $aTodaysDate[year]));

                // Add announcements to announcements
                foreach ($xml->announcement as $announcement){
                  $oShowUntilDateObject = mktime(0,0,0, intval(substr($announcement->showUntilDate,-5,2)), intval(substr($announcement->showUntilDate,-2,2)), intval(substr($announcement->showUntilDate,-10,4)));
                  $oShowUntilDate = date("Y-m-d", $oShowUntilDateObject);
                  if ($oTodaysDate < $oShowUntilDate){
                    ++$announcementCount;
                    $announcementHTML = $announcementHTML.'<div>';
                    if (strcasecmp($announcement->moreLink, '') != 0) $announcementHTML = $announcementHTML.'<a href="'.$announcement->moreLink.'">';
                    $announcementHTML = $announcementHTML.'<b>'.$announcement->title.'</b>';
                    if (strcasecmp($announcement->moreLink, '') != 0) $announcementHTML = $announcementHTML.'</a>';
                    if (strcasecmp($announcement->description, '') != 0) $announcementHTML = $announcementHTML.'<span class="announcementBody">'.str_replace('\n','<br>',$announcement->description).'</span>';
                    //if (strcasecmp($announcement->moreLink, '') != 0) $announcementHTML = $announcementHTML.'<a href="'.$announcement->moreLink.'">View more details</a>';
                    $announcementHTML = $announcementHTML.'</div>';
                  }
                }

                if ($announcementCount>0){
            ?>
            <div id="homepageAnnouncements">
              <?php echo $announcementHTML; ?>
            </div>
            <?php
                }
              }else{
                  //Failed to open xml - output nothing
              }
            ?>
          </div>
          <div id="syl-contentHalfRight">
            <div class="fb-like-box" data-href="http://www.facebook.com/SYLWushu" data-width="460" data-show-faces="true" data-stream="true" data-header="true"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include "ssi/footer.php"; ?>

</body>

</html>