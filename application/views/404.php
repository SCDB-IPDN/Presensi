<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/thumb/5/56/Lambang_IPDN.png/781px-Lambang_IPDN.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>404</title>
  </head>
  <body>
    <div class="text">
        <div>PERINGATAN !!!</div>
        <h3><div 0px="" 12px="" arial="" color:="" ff0000="" font:="" id="textDestination" margin:="" style="background-color: none;"></div></h3> 
        <!-- <h3><b>/b></h3> -->
    </div>
    <div class="text2">
      <div class="row">
        <div class="col-xl-12">
          <img src="https://i.pinimg.com/originals/6a/0a/57/6a0a5782fa3dbfd9c12491d034c43c1a.gif" width="40%">
        </div>
        <div class="col-xl-12">
          <a href="http://gg.gg/presensithl" class="btn btn-danger" target="_blank">PENGADUAN</a>
        </div>
      </div>
    </div>
    <div class="astronaut">
        <img src="https://images.vexels.com/media/users/3/152639/isolated/preview/506b575739e90613428cdb399175e2c8-space-astronaut-cartoon-by-vexels.png" alt="" class="src">
    </div>
  </body>
</html>

<style>
body{
  margin:0;
  padding:0;
  font-family: 'Tomorrow', sans-serif;
  height:100vh;
  background-image: linear-gradient(to top, #2e1753, #1f1746, #131537, #0d1028, #050819);
  display:flex;
  justify-content:center;
  align-items:center;
  overflow:hidden;
}
.text{
  position:absolute;
  top:10%;
  color:#fff;
  text-align:center;
}
.text2{
  position:absolute;
  top:22%;
  color:#fff;
  text-align:center;
}
h1{
  font-size:50px;
}
.star{
  position:absolute;
  width:2px;
  height:2px;
  background:#fff;
  right:0;
  animation:starTwinkle 3s infinite linear;
}
.astronaut img{
  width:100px;
  position:absolute;
  top:55%;
  animation:astronautFly 10s infinite linear;
}
@keyframes astronautFly{
  0%{
    left:-100px;
  }
  25%{
    top:50%;
    transform:rotate(30deg);
  }
  50%{
    transform:rotate(45deg);
    top:55%;
  }
  75%{
    top:60%;
    transform:rotate(30deg);
  }
  100%{
    left:110%;
    transform:rotate(45deg);
  }
}
@keyframes starTwinkle{
  0%{
     background:rgba(255,255,255,0.4);
  }
  25%{
    background:rgba(255,255,255,0.8);
  }
  50%{
   background:rgba(255,255,255,1);
  }
  75%{
    background:rgba(255,255,255,0.8);
  }
  100%{
    background:rgba(255,255,255,0.4);
  }
}
</style>

<script language="JavaScript">

document.addEventListener("DOMContentLoaded",function(){
  
  var body=document.body;
   setInterval(createStar,100);
   function createStar(){
    var right=Math.random()*500;
    var top=Math.random()*screen.height;
    var star=document.createElement("div");
    star.classList.add("star")
    body.appendChild(star);
    setInterval(runStar,10);
    star.style.top=top+"px";
    
    function runStar(){
      if(right>=screen.width){
        star.remove();
      }
      right+=3;
      star.style.right=right+"px";
    }
  }  
})

var text= "<?php echo $title ?>";
var delay=20;
var currentChar=1;
var destination="[none]";

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

function startTyping(textParam, delayParam, destinationParam){
  text=textParam;
  delay=delayParam;
  currentChar=1;
  destination=destinationParam;
  type();
}

javascript:startTyping(text, 150, "textDestination");

</script> 