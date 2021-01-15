<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/login/style.css'); ?>" />
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Lambang_IPDN.png/781px-Lambang_IPDN.png">
    <title>PRESENSI | LOGIN</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?= base_url('auth/login') ?>" method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="No. Identitas" name="username" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required/>
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Social Media IPDN</p>
            <div class="social-media">
              <a href="https://www.facebook.com/bhineka.nara.eka.bhakti" target="_blank" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/ipdn_stpdn" target="_blank" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://instagram.com/humas.ipdn" target="_blank" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://scdb.ipdn.ac.id" target="_blank" class="social-icon">
                <i class="fas fa-globe"></i>
              </a>
            </div>
          </form>
    
          <form action="#" class="sign-up-form">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Lambang_IPDN.png/781px-Lambang_IPDN.png" width="25%">
            <h4><p class="text-juancok"> 
              INSTITUT PEMERINTAHAN DALAM NEGERI (IPDN)
            </p></h4>
            <p class="social-text"> </p>
            <div class="social-media">
              <a href="https://www.facebook.com/bhineka.nara.eka.bhakti" target="_blank" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/ipdn_stpdn" target="_blank" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://instagram.com/humas.ipdn" target="_blank" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://scdb.ipdn.ac.id" target="_blank" class="social-icon">
                <i class="fas fa-globe"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3><div 0px="" 12px="" arial="" color:="" ff0000="" font:="" id="textDestination" margin:="" style="background-color: none;"></div></h3> 
            <p><div 0px="" 12px="" arial="" color:="" ff0000="" font:="" id="textDestination2" margin:="" style="background-color: none;"></div>
            </p>
            <button class="btn transparent" id="sign-up-btn">
              About
            </button>
          </div>
          <img src="<?php echo base_url('assets/login/img/login.png'); ?>" class="image" alt="" />
          
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>CREATED BY IPDN IT DEVELOPMENT TEAM</h3>
            <p> 
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="<?php echo base_url('assets/login/img/register.svg'); ?>" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="<?php echo base_url('assets/login/app.js'); ?>"></script>
  </body>
</html>

<script language="JavaScript">

var text="PRESENSI HARIAN THL";
var text2="Aplikasi presensi kehadiran pegawai THL Institut Pemerintahan Dalam Negeri (IPDN)";
var delay=20;
var delay2=20;
var currentChar=1;
var currentChar2=1;
var destination="[none]";
var destination2="[none]";

function type()
{
  {
    var dest=document.getElementById(destination);
    
    if (dest)// && dest.innerHTML)
    {
      dest.innerHTML=text.substr(0, currentChar)+"<blink></blink>";
      currentChar++;
      if (currentChar>text.length){
        currentChar=1;
        setTimeout("type()", 5000);
      }else{
        setTimeout("type()", delay);
      }
    }
  }
}

function type2()
{
  {
    var dest2=document.getElementById(destination2);
    
    if (dest2)// && dest.innerHTML)
    {
      dest2.innerHTML=text2.substr(0, currentChar2)+"<blink></blink>";
      currentChar2++;
      if (!currentChar2>text2.length){
        currentChar2=1;
        setTimeout("type2()", 5000);
      }else{
        setTimeout("type2()", delay2);
      }

      if(!currentChar2>text2.length){
      }
    }
  }
}

function startTyping(textParam, delayParam, destinationParam){
  text=textParam;
  delay=delayParam;
  currentChar=1;
  destination=destinationParam;
  type();
}

function startTyping2(textParam2, delayParam2, destinationParam2){
  text2=textParam2;
  delay2=delayParam2;
  currentChar2=1;
  destination2=destinationParam2;
  type2();
}

javascript:startTyping(text, 200, "textDestination");
javascript:startTyping2(text2, 50, "textDestination2");

</script> 