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
      <div class="flex flex-row">
        <a href="payment">
          <i class="fas fa-arrow-left text-2xl mt-20 ml-6"></i>
          <span class="font-bold text-3xl mt-20 ml-16">MY QR CODE</span>
        </a>
      </div>
      <div class="flex flex-col justify-center items-center">
        <img class="rounded-full mt-6" style="width: 100px; height: 100px;" src="/images/bandits.png" alt="">
        <span class="font-bold text-3xl mt-2">Jannlenn Vierness</span>
        <div class="bg-white mt-10" style="width: 300px; height: 300px; border-radius: 20px;">
          <img style="width: 250px; height: 250px; margin: 25px 0 0 25px;" src="https://www.pngall.com/wp-content/uploads/2/QR-Code-PNG-Picture.png" alt="">
        </div>
        <span class="mt-6" style="color: gray;">Scan this to see your order.</span>
      </div>
      <div class="grid grid-cols-5 h-20 bg-red-800 mt-auto fixed bottom-0 w-full" style="color: white;">
        <div class="flex flex-col items-center mt-3">
          <i class="fas fa-bars text-2xl"></i>
          <div>
            <span>Home</span>
          </div>
        </div>
        <div class="flex flex-col items-center mt-3" style="color: white;">
          <a href="favempty">
            <i class="fas fa-heart text-2xl"></i>
          </a>
          <div>
            <span>Favorite</span>
          </div>
        </div>
        <div class="flex flex-col items-center mt-3" style="color: lightgreen;">
          <a href="#">
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