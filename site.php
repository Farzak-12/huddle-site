<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- displays site properly based on user's device -->

  <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/1f946127e0.js" crossorigin="anonymous"></script>
  <title>Frontend Mentor | Huddle landing page with curved sections</title>

  <!-- Feel free to remove these styles or customise in your own stylesheet 👍 -->
  <style>
    .attribution { font-size: 11px; text-align: center; }
    .attribution a { color: hsl(228, 45%, 44%); }
  </style>
</head>
<body>
  <header>
    <img src="images/logo.svg" alt="">
    <button class="try">Try it for free</button>
  </header>

  <div class="main1">
    <div class="textb">
      <h1>Build The Community Your Fans Will Love</h1><br>
      <p class="p1">Huddle re-imagines the way we build communities. You have a voice, but so does 
        your audience. Create connections with your users as you engage in genuine discussion. </p>
      <button class="get">Get Started For Free</button>
      </div>
      <img src="images/screen-mockups.svg" alt="" class="mock">
  </div>

  <div class="sec2">
    <div>
      <img src="images/icon-communities.svg" alt="">
      <h1 class="big"> 1.4k+</h1>
      <p>Communities Formed</p>
    </div>
    <div>
      <img src="images/icon-messages.svg" alt="">
      <h1 class="big">2.7m+</h1>
      <p>Messages Sent</p>
    </div>
  </div>

  <div class="wrap">

    <img src="images/bg-section-top-desktop-1.svg" alt="" width="100%" style="margin-bottom: -6px;"margin-top: 5px;>  
    <div class="sec3">
      <div class="right">
        <h1>Grow Together</h1>
        <p>Generate meaningful discussions with your audience and build a strong, loyal community. 
          Think of the insightful conversations you miss out on with a feedback form. </p>
      </div>
      <img src="images/illustration-grow-together.svg" alt="" width="100%" class="left">  
    </div>
    <img src="images/bg-section-bottom-desktop-1.svg" alt="" width="100%">
  </div>

  <div class="wrap">
  </div>
  <div class="sec3" id="sec3">
    <img src="images/illustration-flowing-conversation.svg" alt="" class="right" width="100%"><div class="left">
      <div class="right">
      <h1>Flowing Conversations</h1>
      <p> You wouldn't paginate a conversation in real life, so why do it online? Our threads have 
        just-in-time loading for a more natural flow. </p>
    </div>  
  </div>
  </div>


  <div class="wrap">
  <img src="images/bg-section-top-desktop-2.svg" alt="" width="100%" style="margin-bottom: -6px; margin-top: 5px;" >  
  <div class="sec3">
    
    <div class="right">
      <h1>Your Users</h1>
      <p>It takes no time at all to integrate Huddle with your app's authentication solution. This means, 
        once signed in to your app, your users can start chatting immediately.</p>
    </div>
    <img src="images/illustration-your-users.svg" alt="" class="left"> 
  </div>
  <img src="images/bg-section-bottom-desktop-2.svg" alt="" width="100%">
  </div>

  <div class="sec4">
    <h1>Ready To Build Your Community?</h1><br>
    <button class="get">Get Started For Free</button>
  </div>
  <img src="images/bg-footer-top-desktop.svg" alt="" width="100%" style="margin-bottom: -6px; margin-top: 5px;" >
  <footer class="" >
    <div class="foot1">
      <h1><span style="color: white;"><img src="images/icon-messages.svg" alt="" style="color: white;"></span> Huddle</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nulla quam, hendrerit lacinia 
        vestibulum a, ultrices quis sem.</p>
        <p style="margin-top: 50px;">
        <img src="images/icon-phone.svg" alt="" style="margin-right: 10px;">Phone: +1-543-123-4567<br>
        <img src="images/icon-email.svg" alt="" style="margin-right: 10px;">example@huddle.com
      </p>
      <div class="icons" >
        <span class="fa-2x">
          <i class="fa-brands fa-square-facebook fa-beat"></i>
        </span>
        <span class="fa-2x" style="margin-left: 10px;">
          <i class="fa-brands fa-instagram fa-beat"></i>
        </span>
        <span>
          <span class="fa-2x" style="margin-left: 10px;">
            <i class="fa-brands fa-square-twitter fa-beat"></i>
          </span>
        </span>
      </div>
    </div>
    
    <div class="foot2">
      <h1>Newsletter</h1>
      <p>To recieve tips on how to grow your community, sign up to our weekly newsletter. We’ll never 
        send you spam or pass on your email address</p>
      <form action="site.php" method="get">
        <input type="text" class="inp"  name="sum" >
        <input type="submit" value="Register" class="sum">
      </form>
    </div>
    <?php
        error_reporting(0);
    ?>
    <?php
        $boy = $_GET["sum"];
        echo "Welcome $boy";
    ?>
    
  </footer>
  
</body>
</html>