<!DOCTYPE html>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Menu</title>
      <link rel="stylesheet" href="menu.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
       <style>
  @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  user-select: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  height: 100vh;
  background-image: url("home2.jpg");
  background-size: cover;
}

.btn{
  position: absolute;
  top: 15px;
  left: 45px;
  height: 45px;
  width: 45px;
  text-align: center;
  background: #f5f8fb;
  border-radius: 3px;
  cursor: pointer;
  transition: left 0.4s ease;
}
.btn.click{
  left: 260px;
}
.btn span{
  color: rgb(36, 33, 42);
  font-size: 28px;
  line-height: 45px;
}
.btn.click span:before{
  content: '\f00d';
}
.sidebar{
  position: fixed;
  width: 250px;
  height: 100%;
  left: -250px;
  background: #1b1b1b;
  transition: left 0.4s ease;
}
.sidebar.show{
  left: 0px;
}
.sidebar .text{
  color: white;
  font-size: 25px;
  font-weight: 600;
  line-height: 65px;
  text-align: center;
  background: #1e1e1e;
  letter-spacing: 1px;
}
nav ul{
  background: #1b1b1b;
  height: 100%;
  width: 100%;
  list-style: none;
}
nav ul li{
  line-height: 60px;
  border-top: 1px solid rgba(255,255,255,0.1);
}
nav ul li:last-child{
  border-bottom: 1px solid rgba(255,255,255,0.05);
}
nav ul li a{
  position: relative;
  color: white;
  text-decoration: none;
  font-size: 18px;
  padding-left: 40px;
  font-weight: 500;
  display: block;
  width: 100%;
  border-left: 3px solid transparent;
}
nav ul li.active a{
  color: cyan;
  background: #1e1e1e;
  border-left-color: cyan;
}
nav ul li a:hover{
  background: #1e1e1e;
}
nav ul ul{
  position: static;
  display: none;
}
nav ul .feat-show.show{
  display: block;
}
nav ul .serv-show.show1{
  display: block;
}
nav ul ul li{
  line-height: 42px;
  border-top: none;
}
nav ul ul li a{
  font-size: 17px;
  color: #e6e6e6;
  padding-left: 80px;
}
nav ul li.active ul li a{
  color: #e6e6e6;
  background: #1b1b1b;
  border-left-color: transparent;
}
nav ul ul li a:hover{
  color: cyan!important;
  background: #1e1e1e!important;
}
nav ul li a span{
  position: absolute;
  top: 50%;
  right: 20px;
  transform: translateY(-50%);
  font-size: 22px;
  transition: transform 0.4s;
}
nav ul li a span.rotate{
  transform: translateY(-50%) rotate(-180deg);
}
.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: #202020;
  z-index: -1;
  text-align: center;
  

  
}

.content .header{
  font-size: 45px;
  font-weight: 600;
  animation: movedown 1s linear 1;
  animation-delay: 1s;
  visibility: hidden;
  animation-fill-mode: forwards;


}
.content p{
  font-size: 30px;
  font-weight: 500;
  animation: movedown 1s linear 1;
}
@keyframes movedown {
  0%{
    transform: translateY(-100px);
    visibility: visible;
  }
  100%{
    transform:translateY(0);
    visibility: visible;
  }
  
}

html {
    height: 100%;
  }
  body {
    display: flex;
    height: 100%;
    background-color: #333;
  }
  .word {
      position: absolute;
      top: 0;
      text-align: center;
      height: 75px;
    background: black;
    opacity: 0.9;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
    color: white;
    font: 700 normal 2.5em 'tahoma';
    text-shadow: 5px 2px #222324, 2px 4px #222324, 3px 5px #222324;
  }
</style>
   </head>
   <body>
       <div class="word">
             criminal database management system
           
       </div>
           

       
      <div class="btn">
         <span class="fas fa-bars"></span>
      </div>
      <nav class="sidebar">
         <div class="text">
             MENU
         </div>
         <ul>
            <li class="active"><a href="#">Dashboard</a></li>
            <li>
               <a href="#" class="feat-btn">FIR
               <span class="fas fa-caret-down first"></span>
               </a>
               <ul class="feat-show">
                  <li><a href="addfir.php">ADD FIR</a></li>
                  <li><a href="display.php">VIEW FIR</a></li>
                  <li><a href="delete.php">DELETE FIR</a></li>
                   <li><a href="update.php">UPDATE FIR</a></li>
               </ul>
            </li>
            <li>
               <a href="#" class="serv-btn">SEARCH FIR
               <span class="fas fa-caret-down second"></span>
               </a>
               <ul class="serv-show">
                  <li><a href="search1.php">SEARCH BY NAME</a></li>
                  <li><a href="search2.php">SEARCH BY DATE</a></li>
                  <li><a href="search3.php">SEARCH BY POLICE STATION</a></li>
                  <li><a href="search4.php">SEARCH BY CRIME</a></li>
               </ul>
               <li class="active"><a href="login.php">LOGOUT</a></li>

            
      </nav>
      <div class="content">
         <div class="header">
            <p>
            
            </p>
             
         </div>
         <p>
            
         </p>
      </div>
      <script>
         $('.btn').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
           $('.feat-btn').click(function(){
             $('nav ul .feat-show').toggleClass("show");
             $('nav ul .first').toggleClass("rotate");
           });
           $('.serv-btn').click(function(){
             $('nav ul .serv-show').toggleClass("show1");
             $('nav ul .second').toggleClass("rotate");
           });
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
      </script>
      <script>
          var words = ['CRIMINAL DATABASE MANAGMENT SYSTEM'],
    part,
    i = 0,
    offset = 0,
    len = words.length,
    forwards = true,
    skip_count = 0,
    skip_delay = 15,
    speed = 70;
    let count = 0;
var wordflick = function () {
let ss = setInterval(function () {
     count++;
    if (forwards) {
      if (offset >= words[i].length) {
        ++skip_count;
        if (skip_count == skip_delay) {
          forwards = false;
          skip_count = 0;
        }
      }
    }
    else {
      if (offset == 0) {
        forwards = true;
        i++;
        offset = 0;
        if (i >= len) {
          i = 0;
        }
      }
    }
    part = words[i].substr(0, offset);
    if (skip_count == 0) {
      if (forwards) {
        offset++;
      }
      else {
        offset--;
      }
    }
    $('.word').text(part);
    if(count>36){
        clearInterval(ss);
    }
  },speed);
  
};
    

$(document).ready(function () {
  wordflick();
});
      </script>
   </body>
</html>