<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - StayLink </title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    
    <link rel="stylesheet" href="rawan.css">

  
</head>
<body>

   
    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo">
            <span>S</span>tay
            <span>L</span>ink
        </a>
        <nav class="navbar">
             <a href="#home">Home</a>
             <a href="#packages">Travelers</a>
             <a href="#services">Hosts</a>
             <a href="#gallery">Reviews</a>
             <a href="#review">Services</a>
             <a href="#contact">Gallery</a>
             <!-- <a href="#book">book</a> -->
        </nav>

        <div class="icons">
            <i id="search-btn"></i>
            <input type="button" id="login-btn"/>
            <label for="login-btn">
                <i class="fas fa-user"></i>
                <h1 class="fas fa-dot" style="color:black;font-family:Nunito;cursor:pointer;font-size: 2.9rem;"
                    onmouseover="this.style.color='orange'; document.querySelector('.fas.fa-user').style.color='orange';"
                    onmouseout="this.style.color='black'; document.querySelector('.fas.fa-user').style.color='black';">
                    <?php 
                        if(isset($_SESSION["username"]))
                        {
                            echo $_SESSION['username'];
                        }
                        else
                        {
                            echo 'Log In';
                        }
                    ?>
                </h1>
            </label>
        </div>

    </header>



<div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>
    <a href='check.php' class='btn' style="display:none; width:200px; height:50px; text-align: center; border-color:white; margin-bottom:280px;  " id='profile' >Status</a>
    <a href='logout.php' class='btn' style="display:none; width:200px; height:50px; text-align: center; border-color:white; margin-bottom:280px; " id='acc' >Log out</a>
   
    <form method='post' action="validation.php" id='usrfrm'>
         <h3>login</h3>
         <input type="text" name='username' id='username' class="box" placeholder="Username">
         <input type="password" name='pass' id='pass' class="box" placeholder="Enter your password">
         <input type="submit" value="login now" class="login-btn">
         <input type="checkbox" id="remember">
         <label for="remember">Remember me</label>
         <p>forget password? <a href="#">click here</a></p>
         <p>don't have and account? <a href="signup.php">register now</a></p>
    </form>

</div>





<section class="home" id="home">
    <div class="content">
        <div class ="welcome-description">
        <h3>Welcome to StayLink</h3>
        <p>Enjoy Tranquility Like Never Before !</p>
        </div>
        <a href="#" class="join-btn"> Join Now
        </a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="img/w-vid-1.mp4"></span>
        <span class="vid-btn" data-src="img/w-vid-2.mp4"></span>
        <span class="vid-btn" data-src="img/w-vid-3.mp4"></span>
        <span class="vid-btn" data-src="img/w-vid-4.mp4"></span>
        <span class="vid-btn" data-src="img/w-vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="img/w-vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- Travelers section in welcome page -->

<section class="gallery" id="packages">
    <h1 class="heading">
        <span>T</span>
        <span>r</span>
        <span>a</span>
        <span>v</span>
        <span>e</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>s</span>
    </h1>
<div class="travellers">

    <div class="user">
      <img src="img/t1.jpg" class="user-image" alt="User 1">
      <div class="circle"></div>
      <img src="img/tt1.png" class="flag-image" alt="Flag 1">
      <h3 class="traveler-name">Lucia</h3>
      <div class="activity"><span class="dot"></span>Last activity : about 7 seconds ago</div>
    </div>

    <div class="user">
      <img src="img/t2.jpg" class="user-image" alt="User 1">
      <div class="circle"></div>
      <img src="img/tt2.png" class="flag-image" alt="Flag 1">
      <h3 class="traveler-name">Juliette</h3>
      <div class="activity"><span class="dot"></span>Last activity : about 46 seconds ago</div>
    </div>

    <div class="user">
      <img src="img/t3.jpg" class="user-image" alt="User 1">
      <div class="circle"></div>
      <img src="img/tt3.png" class="flag-image" alt="Flag 1">
      <h3 class="traveler-name">Ahmed</h3>
      <div class="activity"><span class="dot"></span>Last activity : about 9 seconds ago</div>
    </div>

    <div class="user">
      <img src="img/t4.jpg" class="user-image" alt="User 1">
      <div class="circle"></div>
      <img src="img/tt4.png" class="flag-image" alt="Flag 1">
      <h3 class="traveler-name">Serena</h3>
      <div class="activity"><span class="dot"></span>Last activity : about 32 seconds ago</div>
    </div>

</div>
    <button class="see-more-btn">See More Travelers</button>
</section>



<!-- Hosts section in welcome page -->

<section class="packages" id="services">
    <h1 class="heading">
        <span>H</span>
        <span>o</span>
        <span>s</span>
        <span>t</span>
        <span>s</span>
        
    </h1>

    <div class="box-container">
        <div class="box">
            <img src="img/img1.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Egypt </h3>
                <p>My name is Bola from Egypt. I live with my family. 
                I traveled to Cyprus, Turkey and Greece and met new friends. 
                I love learning languages ​and the language I love learning most. Now it is German And Espania. 
                I hope that I can help someone and host him in my home or spend wonderful times with him in Egypt, 
                and he will also help me learn the language.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
    
                <a href="#book" class="explore-btn">Apply now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/img2.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> France </h3>
                <p>My name is Wilma, I am 43 years old and I live in Montpellier (FR) with my partner Davide, 44 years old, and our 3 kids, Gaia, Agata and Elio. 
                    They are 10, 8 and 5 years old.
                
                    We are searching for English or Spanish mother tongue to teach English or Spanish to our kids.
                    We are searching as well for French mother tongue to help our kids improve their French.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                
                <a href="#book" class="explore-btn">Apply now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/img3.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> United Kingdom </h3>
                <p>We're a family of four. Both my wife and I have been Couchsurfing hosts and language student hosts for many years, so we're very comfortable with having people at our place and know how to keep them happy. 
                We would like our children to learn Spanish, so having a 3rd person to introduce the language would be ideal (Anna speaks to them in Italian and I speak in English).</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                
                <a href="#book" class="explore-btn">Apply now</a>
            </div>
        </div>
        <button class="see-more-btn">See More Hosts</button>
    </div>
</section>





<!-- Reviews section in welcome page -->

<section class="review" id="gallery">
    <h1 class="heading">
        <span>R</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
        <span>s</span>

    </h1>
    <div class="swiper mySwiper review-slider">
        <div class="swiper-wrapper wrapper"> 
             <div class="swiper-slide">
                <div class="box">
                    <img src="img/binay-rijal.jpg" alt="">
                    <h3>Omar</h3>
                    <p>It was an amazing experience for me to be at Mrs.Khatri's home. She is such a positive person. She helped me with her tips what to see in Baglung.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                           
                        </div>
                </div>
            </div> 

             <div class="swiper-slide">
                <div class="box">
                    <img src="img/r5.jpg" alt="">
                    <h3>Lara</h3>
                    <p>I stayed for almost a week. Alisha was a great host. She was very welcoming, helped me learn my way around Baglung and was easy to talk with.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img src="img/aashika-baral.jpg" alt="">
                    <h3>Sandra</h3>
                    <p>Choosing homestay through Nest was a pleasure, host was very kind and generous and helped me whereever she could. Thank you for the great time!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img src="img/r4.png" alt="">
                    <h3>Jack</h3>
                    <p>Suman is an awesome host! He is very inviting and caring. The balcony was alsoz nice to watch the daily life outside. I absolutely recommend Booking from Nest!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
                </div>
        </div>
    </div>
</section>





<!-- Services section in welcome page -->

<section class="services" id="review">
    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-hotel"></i>
                <h3>homestays </h3>
                <p>For an authentic holiday experience, apply for a homestay in a local's home. Homestays are an excellent choice for national and foreign students, interns, and people migrating because host families give long-term stays.</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>You will be nestled in the wooden Homestays surrounded by beautiful flowers, orchids, and tea plantations. The meal is provided by your local host made from local ingredients too. You will be provided normal Nepali cuisine likes rice, roti, eggs, curries, honey, milk, and Ilam tea.</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
                <h3>safety guide</h3>
                <p>When applying you shouln't worry about internal security. Against theft; Fire safety; Proper lighting; Safeguarding assets and External Security,Homestays offer you a legal insurance.</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
                <h3>around the world</h3>
                <p>The homestays spread across the world in places, mostly villages such as Mustang, Chitwan, Shree Antu, Palpa, Nuwakot, Nagarkot to name a few.</p>
        </div>
        
    </div>
</section>





<!-- Gallery section in welcome page -->

<section class="gallery" id="contact">
    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>


<div class="box-container">
    <div class="box">
        <img src="img/g6.jpg" alt="">
        <div class="content">
        <a href="#" class="btn-gallery">Jordan</a>
        </div>
    </div>

    <div class="box">
        <img src="img/g1.jpg" alt="">
        <div class="content">
        <a href="#" class="btn-gallery">Egypt</a>
        </div>
    </div>

    <div class="box">
        <img src="img/g3.jpg" alt="">
        <div class="content">
            <a href="#" class="btn-gallery">Spain</a>
        </div>
    </div>

    <div class="box">
        <img src="img/g8.gif" alt="">
        <div class="content">
            <a href="#" class="btn-gallery">South Korea</a>
        </div>
    </div>

    <div class="box">
        <img src="img/g2.jpg" alt="">
        <div class="content">
            <a href="#" class="btn-gallery">France</a>
        </div>
    </div>

    <div class="box">
        <img src="img/g5.jpg" alt="">
        <div class="content">
            <a href="#" class="btn-gallery">Japan</a>
        </div>
    </div>

    <div class="box">
        <img src="img/g7.jpg" alt="">
        <div class="content">
            <a href="#" class="btn-gallery">United states</a>
        </div>
    </div>

    <div class="box">
        <img src="img/g4.jpg" alt="">
        <div class="content">
            <a href="#" class="btn-gallery">Turkey</a>
        </div>
    </div>

</div>
</section>




<!-- Footer section in welcome page -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>about us</h3>
            <p>StayLink is a platform that allows members to arrange homestays and cultural exchange.</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">United Kingdom</a>
            <a href="#">Egypt</a>
            <a href="#">India</a>
            <a href="#">Japan</a>
            <a href="#">Brazil</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#home">Home</a>
            <a href="#packages">Travelers</a>
            <a href="#services">Hosts</a>
            <a href="#gallery">Reviews</a>
            <a href="#review">Services</a>
            <a href="#contact">Gallery</a>
            <!-- <a href="#book">book</a>
            <a href="check.php">status</a> -->
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">linkedin</a>
            <a href="#">twitter</a>

        </div>
    </div>
    <h1 class="credit"> created by <span> StayLink Team </span> | Copyright <span> @2024 </span> All rights reserved</h1>
</section>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
       <script src="main.js"></script>
</body>

<script>
    function checkDeparture(){
            const departure=document.getElementById('departure');
            var date = new Date(departure.value);
            var day = date.getDate();
            var month = date.getMonth()+1;
            var year = date.getFullYear();
            var today = new Date();
            var curDay= today.getDate();
            var curMonth = today.getMonth()+1;
            var curYear= today.getFullYear();

            if (curYear > year){
                alert("Cannot book in the past!");
                return 0;
            }
            if (curMonth > month){
                alert("Select an appropriate month!");
                return 0;
            } 
            if (curDay > day){
                alert("Select an appropriate day");
                return 0;
            }
            return 1;
                
            console.log(day,month,year);
            console.log(curDay,curMonth,curYear);
    }
    const formlast=document.getElementById("bookForm");
    formlast.addEventListener("submit",formValidation);
    function formValidation(e){
                    e.preventDefault();
                    if (checkDeparture() && checkArrival()){
                        formlast.submit();
                    }
                    
                    
                    // const departureDate=new Date(departure);
                    // const returnDate=new Date(return);
                    console.log(departure);
    }
    function checkArrival(){
        const departure=document.getElementById('departure');
        var dateDept = new Date(departure.value);
        const arrival = document.getElementById('return');
        var dateArrival = new Date(arrival.value);

        
        var dayDept = dateDept.getDate();
        var monthDept = dateDept.getMonth()+1;
        var yearDept = dateDept.getFullYear();

        var dayArrival= dateArrival.getDate();
        var monthArrival = dateArrival.getMonth()+1;
        var yearArrival= dateArrival.getFullYear();

        if ( dayArrival <= dayDept ){
            alert("Can't Stay for negative days");
            return 0;
        }
        if ( monthArrival < monthDept ){
            alert("Can't Chose negative Month");
            return 0;
        }
        if (yearArrival < yearDept){
            alert("Cant choose negative Year");
            return 0;
        }
        return 1;
        
    }
                    
    </script>
<script>
    if("<?php
    if(isset($_SESSION["username"]))
    {
     echo $_SESSION['username'];
    }
    else
    {
     echo '';
    }
    ?>"!='')
    {
        document.getElementById('usrfrm').style.display='none';
        document.getElementById('profile').style.display='block';
        document.getElementById('acc').style.display='block';
        
    }




</script>

</html>