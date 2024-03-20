<!DOCTYPE html>
<html class="scroll-smooth">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPCanteen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="./output.css" rel="stylesheet"> @vite('resources/css/app.css')
  </head>
  <body class="bg-zinc-300">
    <div class="flex flex-col min-h-screen">
      <div></div>
      <div class="font-bold text-3xl mt-10 ml-2 text-center">
        <span>ABOUT</span>
        <i class="fas fa-circle-exclamation"></i>
      </div>
      <div class="bg-white shadow-2xl" style="width: 390px; margin: 20px 0 0 10px;">
        <div class="ml-2 mr-2 mt-2 mb-2">
          <span> Tired of waiting in line for lunch? Craving a fresh, made-to-order meal delivered straight to your door? Look no further than the Canteen Ordering System! We&#39;re here to revolutionize your dining experience by offering a convenient, efficient, and personalized way to enjoy delicious food from your favorite canteen. <br />
            <br> What We Do: <br> • Pre-order with ease: Browse our comprehensive menu and reserve your favorite dishes in advance. No more rushing through the lunch line – simply pick a time and we&#39;ll have your meal ready for you. <br> • Real-time ordering: Want something made just for you? Our platform allows you to order fresh, customized meals directly from our skilled chefs. Choose your ingredients, adjust spice levels, and enjoy a truly personalized culinary experience. <br> Room service at your fingertips: No need to leave your desk or dorm – select your delivery location, and we&#39;ll deliver your steaming hot meal right to your door. <br>
            <br> The Canteen Ordering System is committed to providing you with a seamless and satisfying experience. </span>
        </div>
      </div>
      <div class="grid grid-cols-5 h-20 bg-red-800 mt-auto fixed bottom-0 w-full" style="color: white;">
        <div class="flex flex-col items-center mt-3">
          <i class="fas fa-bars text-2xl"></i>
          <div>
            <span>Home</span>
          </div>
        </div>
        <div class="flex flex-col items-center mt-3" style="color: white;">
          <a href="favorite">
            <i class="fas fa-heart text-2xl"></i>
          </a>
          <div>
            <span>Favorite</span>
          </div>
        </div>
        <div class="flex flex-col items-center mt-3" style="color: white;">
          <a href="order">
            <i class="fas fa-clipboard-list text-2xl"></i>
          </a>
          <div>
            <span>Order</span>
          </div>
        </div>
        <div class="flex flex-col items-center mt-3" style="color: white;">
          <a href="history">
            <i class="fas fa-history text-2xl"></i>
          </a>
          <div>
            <span>History</span>
          </div>
        </div>
        <div class="flex flex-col items-center mt-3" style="color: white;">
          <a href="user_profile">
            <i class="far fa-user-circle text-2xl"></i>
          </a>
          <div>
            <span>Profile</span>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>