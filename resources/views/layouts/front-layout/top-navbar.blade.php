<style>
    .headre-fixed {
        position: fixed;
        top: 0;
        z-index: 10000000;
        background-color: rgb(255, 255, 255);
        opacity: 0.9;
    }

    .active-top-navbar {
        /* border: 1px solid #ccc;
        padding: 10px;
        -webkit-box-shadow: 1px 1px 2px;
        -o-box-shadow: 1px 1px 2px;
        -moz-box-shadow: 1px 1px 2px;
        box-shadow: 1px 1px 2px;
        font-weight: bold; */
    }
    .main-top-nav-bar li:hover a {
        border: 1px solid #ccc;
        padding: 10px;
        -webkit-box-shadow: 1px 1px 2px;
        -o-box-shadow: 1px 1px 2px;
        -moz-box-shadow: 1px 1px 2px;
        box-shadow: 1px 1px 2px;
        font-weight: bold;
        color: #000b16;
    }
    nav{
     display: flex;
     justify-content: space-between;
     align-items: center;
     background-color:none;
     color: #333;
    min-width: 360px;

    /* height: 10vh;*/
 }
 .navbar-links {
     height: 100%;
 }
 .brand-title{
     margin: .5rem;
     font-size: 1.5rem;
     padding-left:60px ;
 }

 .navbar-links ul{
     display: flex;
     padding: 0;
     margin: 0;
     margin-right: 60px;
 }
 .navbar-links li{
     list-style: none;
 }
 .navbar-links a{
     text-decoration: none;
     color:#333;
     padding: 1rem;
     display:block;

 }

 .navbar-links li:hover{

 }
 .toggle-button{
     position: absolute;
     top: .75rem;
     right:3rem;
     display: none;
     flex-direction: column;
     justify-content: space-between;
     width: 30px;
     height: 21px;
     color: #333

 }
 .toggle-button .bar{
     height: 3px;
     width: 100%;
     background-color: #333;
     border-radius: 10px;
     transition: all 0.5s ease-in;;
 }

 @media screen and (max-width:663px){
     .toggle-button{
         display: flex;
     }
     .navbar-links {
        display: none;
        width: 100%;/* c pour avoir tt la largeur quand on hover*/
        opacity: 0;
        visibility: hidden;
        -webkit-transition: opacity 600ms, visibility 600ms;
   transition: opacity 600ms, visibility 600ms;
     }
     nav{
         flex-direction: column;
         align-items:flex-start;
     }

     nav .navbar-links ul{
         flex-direction: column;
         margin-right: 0px;
         width: 100%;
     }
     ul li{
         text-align: center;
         opacity: 0;
     }
     .navbar-links a{
         padding: .5rem 1rem;
     }
     .active{
         display: flex;
         opacity: 1;
         visibility: visible;
     }
 }



 .trg .a1{
     /*background-color: blue;*/
     transform: rotate(-60deg) translate(-5px,6px);
     position: absolute;
     left: -9px;
     color: #000;

 }
 .trg .a2{
     /*background: blue;*/
     transform: rotate(60deg) translate(-5px,6px);
     position: absolute;
     left:15px;
     top:8px;
     color: #000;
 }
 .trg .a3{
     /*background-color: blue;*/
     /*transform: rotate(-45deg) translate(-5px,6px);*/
     position: absolute;
     top:20px;
     left:1px;
     color: #000;
 }

 @keyframes navLinkFade{
     from{
         opacity: 0;
         transform:translate(50px);
     }
     to{
         opacity: 1;
         transform: translate(0px);
     }
 }

 @media screen and (max-width:360px){
   nav{
     flex-direction:column;
     flex-direction: column;
   }
 }
 </style>
<nav class="flex pt-4 font-sans bg-white container-fluid w-100" id="headre-fixed">
    <div class="brand-title">9Yards LOGO</div>
     <a href="#" class="toggle-button">
         <span class="bar a1"></span>
         <span class="bar a2"></span>
         <span class="bar a3"></span>
     </a>
     <div class="navbar-links">
         <ul class="main-top-nav-bar">
             <li><a href="#">Home</a></li>
             <li class="active-top-navbar"><a href="#">About</a></li>
             <li><a href="#">Project</a></li>
             <li><a href="#">Contact Us</a></li>

         </ul>
     </div>

 </nav>
 <script>
 const burger = document.querySelector('.toggle-button');
 const toggleClass = document.querySelector('.navbar-links');
 const linkLi = document.querySelectorAll('.navbar-links ul li');


 burger.addEventListener('click',()=>{
     toggleClass.classList.toggle('active');
     burger.classList.toggle('trg');

     linkLi.forEach((element,index) => {
         if (element.style.animation){
             element.style.animation=''
         }else{
             element.style.animation=`navLinkFade 0.5s ease forwards ${index/7+0.3}s`;
         }

     });
 });
 burger();
 </script>
