<!DOCTYPE html>
<html class="scroll-smooth">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPCanteen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="./output.css" rel="stylesheet"> @vite('resources/css/app.css')
  </head>
  <body class="bg-zinc-300">
    <div class="flex flex-col min-h-screen">
      <div class="flex flex-col">
        <span class="font-bold text-3xl mt-20 ml-24">ORDER HISTORY</span>
        <img class="mt-32" src="/images/empties.png" alt="">
      </div>
      <div class="grid grid-cols-5 h-20 bg-red-800 mt-auto fixed bottom-0 w-full" style="color: white;">
        <div class="flex flex-col items-center mt-3">
          <a href="landing">
            <i class="fas fa-bars text-2xl"></i>
          </a>
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
        <div class="flex flex-col items-center mt-3" style="color: lightgreen;">
          <i class="fas fa-history text-2xl"></i>
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