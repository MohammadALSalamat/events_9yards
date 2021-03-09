<nav class="flex pt-2 font-sans bg-white container-fluid w-100" id="headre-fixed">
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
