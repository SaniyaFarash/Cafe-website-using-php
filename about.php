<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">
      
      <!--<div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>why choose us?</h3>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam, a quod, quis alias eius dignissimos pariatur laborum dolorem ad ullam iure, consequatur autem animi illo odit! Atque quia minima voluptatibus.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>-->
      
      <div class="box">
         <img src="" alt="">
         <h3>About Us</h3>
         <p>Established in 2001, Cafe Deluxe is a locally-owned,
independent catering and restaurant service. Twenty years later,
we are still happily serving the community with quality fresh
food. Our catering service has grown to become one of banglore’s
largest and most recognized services. It’s almost as popular as
our famous cookies!</p>
<h1>Our Story</h1>
<p>
For over 20 years, Cafe Deluxe has been catering memorable
meals in Banglore. From humble beginnings as a homegrown
restaurant in the heart of the city, our exceptional service and
attention to detail has allowed us to steadily grow to become
one of banglore’s largest and most recognized catering
companies.
Whether it’s a corporate function, upscale event, or a family
gathering, Cafe Deluxe provides delicious meals that fit your
vision and your budget. Our dedicated and experienced team will
cheerfully give your event the care and attention it deserves.</p>
         <a href="shop.php" class="btn">our shop</a>
      </div>
      
   </div>

</section>

<section class="reviews">

   <h1 class="title">clients reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>The quality of coffee is amazing. The organic coffee beans are just refreshing and dazzling.
             The place is worth visiting.The ambience is awesome</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Malti Shetty</h3>
      </div>

      <div class="box">
         <p>The quality of coffee is amazing. The organic coffee beans are just refreshing and dazzling.
             The place is worth visiting.The ambience is awesome</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Saniya Mehta</h3>
      </div>

      <div class="box"> 
         <p>The quality of coffee is amazing. The organic coffee beans are just refreshing and dazzling.
             The place is worth visiting.The ambience is awesome</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rahul Sharma</h3>
      </div>

      <!--<div class="box">
         <img src="images/pic-4.png" alt="">
         <p>The quality of coffee is amazing. The organic coffee beans are just refreshing and dazzling.
             The place is worth visiting.The ambience is awesome.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Arjun Reddy</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>The quality of coffee is amazing. The organic coffee beans are just refreshing and dazzling.
             The place is worth visiting.The ambience is awesome</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Chirag Shah</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>The quality of coffee is amazing. The organic coffee beans are just refreshing and dazzling.
             The place is worth visiting.The ambience is awesome</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Myra khan</h3>
      </div>-->

   </div>

</section>









<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>