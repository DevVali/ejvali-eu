<!DOCTYPE html>
<?php
$name = "Vali";
$username = "ejvali";
$desc = "This is my personal website and my corner on the internet. I'm mainly a student and a free-time developer.";
$section = "Home";
$prns = "they/it";
$keywords = "art & photo";
$color = "#68ADAD";
$discord = "https://dsc.gg/ejvali";
$discord_tag = "vidk#0024";
?>

<html lang="en">

<?php require "/home/runner/ejvali-eu/includeto/pagehead.php" ?>

</head>
<body><div id="pageselect">
  <ul class="nav-bar">
    <li class="nav-item-l"><a class="nav-item-l" href="https://ejvali.eu"><img src="https://cdn.discordapp.com/attachments/889423777123938315/1008112502778892368/favicon-1.png" style="height:1em;width:auto;font-size:30px" alt="navimage">&nbsp;&nbsp;@ejvali</a></li>
    <li class="nav-item-r"><a class="nav-item-r nav-hover" id="btn-contact" onclick="document.querySelector('.nav-active').classList.remove('nav-active');document.querySelector('#btn-contact').classList.add('nav-active')" href="#contact">Contact</a></li>
    <li class="nav-item-r"><a class="nav-item-r nav-hover" id="btn-projects" onclick="document.querySelector('.nav-active').classList.remove('nav-active');document.querySelector('#btn-projects').classList.add('nav-active')" href="#projects">Projects</a></li>
    <li class="nav-item-r"><a class="nav-item-r nav-hover" id="btn-gallery" onclick="document.querySelector('.nav-active').classList.remove('nav-active');document.querySelector('#btn-gallery').classList.add('nav-active')" href="#gallery">Gallery</a></li>
    <li class="nav-item-r"><a class="nav-item-r nav-hover" id="btn-bio" onclick="document.querySelector('.nav-active').classList.remove('nav-active');document.querySelector('#btn-bio').classList.add('nav-active')" href="#bio">Bio</a></li>
    <li class="nav-item-r"><a class="nav-item-r nav-hover nav-active" id="btn-home" onclick="document.querySelector('.nav-active').classList.remove('nav-active');document.querySelector('#btn-home').classList.add('nav-active')" href="#home">Home</a></li>
  </ul>
  <style>html{text-align:center;scroll-behavior:smooth;margin:0;}.cookie{list-style-type:none;font-family:Montserrat;font-size:18px;color:white;background-color:#68ADAD;overflow:hidden;margin:0;padding:0;position:sticky;bottom:0;width:100%;}.codearea{padding: 5px;margin-bottom: 10px;color: #aaa;box-sizing: border-box;border: 1px solid #8b8b8b;border-radius: 5px;background-color: #424242;font-size: 16px;resize: none;}footer{list-style-type:none;font-family:Montserrat;font-size:18px;color:white;background-color:#68ADAD;overflow:hidden;margin:0;padding:0;}@media screen and (max-width: 600px){.nav-bar {display:none}}</style>
  
  <br><br>
  <a href="https://linkin.bio/ejvali"><img src="https://cdn.discordapp.com/attachments/889423777123938315/1008112503429025802/favicon-3.png" alt="logo"></a><h3><?php echo "@$username" ?></h3>
  <a href="https://www.tiktok.com/<?php echo "@$username" ?>" style="font-size:30px"><i class="fa-brands fa-tiktok"></i></a>&nbsp;&nbsp;&nbsp;
  <a href="https://www.instagram.com/<?php echo $username ?>" style="font-size:30px"><i class="fa-brands fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;
  <a href="https://www.twitter.com/<?php echo $username ?>" style="font-size:30px"><i class="fa-brands fa-twitter"></i></a>&nbsp;&nbsp;&nbsp;
  <br><hr style="border:3px solid <?php echo $color ?>">
  
  <!-- Home -->
  <h1 id="home">I'm <?php echo $name ?>, <font color="<?php echo $color ?>" size="6px"><?php echo $prns ?>, <?php echo $keywords ?></font></h1>
  <center><blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/ChO1C2qsr1k/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="14" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/ChO1C2qsr1k/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;"></div></div></a><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://www.instagram.com/p/ChO1C2qsr1k/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A post shared by vali, art &amp; photo (@ejvali)</a></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script></center>

  <!-- Bio -->
  <p id="bio">This is my personal website and my corner on the internet. I'm mainly a student and a free-time developer.<br>I'm a Frontend developer (HTML, CSS, JS), but I also code at PHP.<br>I love taking photos, as well. By one word, I'm an artist. I've also been playing the guitar for seven years.<br>You can check out my lil gallery below & support me by following on <a href="https://instagram.com/<?php echo $username ?>">Instagram</a>.<br>I love traveling, new places and horses and I mainly focus on food & nature photography.<br><br>I'm content creator on social media, such as Instagram, where I post my recent photos I've taken.<br>I manage over 5 social media accounts, including Twitter, Instgram & TikTok accounts.<br>I'm volunteer discord moderator & discord community manager.</p>
  <button id="dtag" class="btn btn-lg btn-primary">Copy discord tag</button>&nbsp;
  <a href="https://dsc.gg/ejvali"><button class="btn btn-lg btn-primary">Discord</button></a>&nbsp;
  <a href="#" class="btn btn-light btn-lg">Social Media</a><br>&nbsp;

  <!-- Gallery -->
  <h2 id="gallery" style="color:red">Gallery</h2><p>A little gallery, of my favorite photos.<br><font color="#aaa">6 of 6 shown</font></p>
  <img style="width:326px" src="https://cdn.discordapp.com/attachments/889423777123938315/1009890320860852224/unknown.png">
  <img style="width:326px" src="https://cdn.discordapp.com/attachments/889423777123938315/1009890320462385172/unknown.png">
  <img style="width:326px" src="https://cdn.discordapp.com/attachments/889423777123938315/1009890321401921706/unknown.png">
  <br><br>
  <img style="width:326px" src="https://cdn.discordapp.com/attachments/889423777123938315/1009890321951371284/unknown.png">
  <img style="width:326px" src="https://cdn.discordapp.com/attachments/889423777123938315/1009890322391765022/unknown.png">
  <img style="width:326px" src="https://cdn.discordapp.com/attachments/889423777123938315/1009890322802810880/unknown.png">
  <br><br>

  <!-- Projects --> 
  <h2 id="projects" style="color:red">Projects</h2><p>Check out my developer and other based projects I made and contributed to.<br>Click the project icon to hop in to the project.<br><font color="#aaa">6 of 6 shown</font></p>
  <div><a href="https://instagram.com/testtool_apps" target="_blank"><img src="https://cdn.discordapp.com/attachments/889423777123938315/1009892016441790544/unknown.png" style="width:121px"></a><h3>TestTool<br><font color="#aaa" size="4px">Entertainment & Recreation</font></h3>
  <span>🥇 #1 world exams app, powerful, easy & online. In demo.</span><br><br><br></div>
  <div><a href="https://instagram.com/naturee_channel" target="_blank"><img src="https://cdn.discordapp.com/attachments/889423777123938315/1009892017293250570/unknown.png" style="width:121px"></a><h3>Naturee Channel<br><font color="#aaa" size="4px">Blog</font></h3>
  <span>🔎 Discover nature photos and their beauty. You can feature your photos FOR FREE.</span><br><br><br></div>
  <div><a href="https://instagram.com/somethingnew.kira" target="_blank"><img src="https://cdn.discordapp.com/attachments/889423777123938315/1009892016827678781/unknown.png" style="width:121px"></a><h3>Something New<br><font color="#aaa" size="4px">Fan page</font></h3>
  <span>A fan page made with love for <a href="https://kirakosarin.com">Kira Kosarin</a>.</span><br><br><br></div>
  <div><a href="https://github.com/DevVali/Boostyle" target="_blank"><img src="https://cdn.discordapp.com/attachments/889423777123938315/1009892015976226826/unknown.png" style="width:121px"></a><h3>Boostyle<br><font color="#aaa" size="4px">Entertainment & Recreation</font></h3>
  <span>Boostyle is a collection of CSS styles. No limitations, open source for everyone. Style webpages.</span><br><br><br></div>
  <div><a href="https://dsc.gg/bytesstudios" target="_blank"><img src="https://cdn.discordapp.com/attachments/889423777123938315/1009892015581974589/unknown.png" style="width:121px"></a><h3>Bytes Studios<br><font color="#aaa" size="4px">Entertainment & Recreation</font></h3>
  <span>Bytes Community is all about collaborating, sharing, conversation, and more!<br>We have a wide variety of topics however we're always listening to suggestions from the community.</span><br><br><br></div>

  <!-- Contact -->
  <form class="w3-container w3-card-4" method="post" action="https://getform.io/f/0092bfe5-16f1-4c7c-a90b-910be9d525a5">
    <h2 id="contact" class="w3-text-blue" style="float:left">Contact</h2><br><br><br>
    <p>
    <label class="w3-text-blue" style="float:left"><b>Name</b></label><br>
    <input class="w3-input w3-border w3-animate-input" style="width:30%" name="Name" type="text" minlength="2" maxlength="30" required></p>
    <p>      
    <label class="w3-text-blue" style="float:left"><b>Email</b></label><br>
    <input class="w3-input w3-border w3-animate-input" style="width:30%" name="Email" type="email" required></p>
    <p>
    <label class="w3-text-blue" style="float:left"><b>Message</b></label><br>
    <textarea class="w3-input w3-border w3-animate-input" style="width:30%" name="Message" type="text" minlength="20" maxlength="2000" required></textarea></p>
    <div class="g-recaptcha" data-sitekey="6LfHvIIhAAAAAB69NZWQWWZM988Uaeu0_4yxbvbt"></div>
    <div id="form-alert" style="color:red;font-weight:bold;float:left">&nbsp;</div><br><br>
    <button class="w3-btn w3-blue" style="float:left" type="submit" id="submit">Send</button>
    <br><br>
  </form>

<?php require "/home/runner/ejvali-eu/includeto/pagefooter.php" ?>

<!-- script -->
<script>
  var dtag = document.querySelector("#dtag");
  var discord = "<?php echo $discord_tag ?>";
  var submit = document.querySelector("#submit");
  let date = ""; //dev tool

  dtag.addEventListener("click", onDtag);
  function onDtag(){
    navigator.clipboard.writeText(discord);
    dtag.classList.remove("btn-primary");
    dtag.classList.add("btn-success");
    dtag.textContent = "Copied!";
    
    setTimeout(afterDtag, 3000);
    function afterDtag(){
      dtag.classList.add("btn-primary");
      dtag.classList.remove("btn-success");
      dtag.textContent = "Copy discord tag";
    }
  }

  function onCookieconsent(){
    document.querySelector(".cookie").style.display = "none";
    date = new Date(Date.now() + 86400*1000*30);
    date = date.toUTCString();
    document.cookie = "cookieconsent_status=dismiss; expires=" + date;
  }

  submit.addEventListener("click", function(){
    var captcha = document.querySelector(".g-recaptcha");
    var response = grecaptcha.getResponse();

    if (response.length === 0){
      document.querySelector("#form-alert").textContent = "Please verify you're not a robot.";
    } else {
      console.log("reCaptcha validation success.")
    }
  })

</script>

</body></div>

</html>