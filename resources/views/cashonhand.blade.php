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
        <i class="fas fa-arrow-left text-2xl mt-20 ml-6"></i>
        <span class="font-bold text-3xl mt-20 ml-24">PAYMENT</span>
      </div>
      <a href="gcash">
        <div class="flex flex-col rounded-xl shadow-xl" style="background-color: white; width: 370px; height: 90px; margin-top: 30px; margin-left: 20px;">
          <div class="flex flex-row">
            <img class="w-14 mt-4 ml-4 rounded-2xl" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSMu0uy7QmaOOqFpYfRv6LdinOVhUfJLiEIkvedIA9Ww&s" alt="">
            <span class="font-bold text-2xl mt-6 ml-4">GCASH</span>
            <i class="fa-regular fa-circle-dot text-2xl" style="margin: 28px 0 0 160px; color: #D3D3D3;"></i>
          </div>
        </div>
      </a>
      <a href="schoolfee">
        <div class="flex flex-col rounded-xl shadow-xl" style="background-color: white; width: 370px; height: 90px; margin-top: 20px; margin-left: 20px;">
          <div class="flex flex-row">
            <img class="w-14 mt-4 ml-4 rounded-2xl" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRJXmMbrItPLMTeMbSZzS46aE6JBdUvO6EtTa7dLw8LQ&s" alt="">
            <span class="font-bold text-2xl mt-6 ml-4">School Fee</span>
            <i class="fa-regular fa-circle-dot text-2xl" style="margin: 28px 0 0 120px; color: #D3D3D3;"></i>
          </div>
        </div>
      </a>
      <a href="payment">
        <div class="flex flex-col rounded-xl shadow-xl" style="background-color: white; width: 370px; height: 90px; margin-top: 20px; margin-left: 20px;">
          <div class="flex flex-row">
            <img class="w-14 mt-4 ml-4 rounded-2xl" src="/images/cash.png" alt="">
            <span class="font-bold text-2xl mt-6 ml-4">Cash On Hand</span>
            <i class="fa-regular fa-circle-dot text-2xl" style="margin: 28px 0 0 80px; color: maroon;"></i>
          </div>
        </div>
      </a>
      <div class="text-center" style="color: maroon; margin-top: 40px;">
        <span>Note: Failure to pay will result in automatic <br> addition to your schoolfee. </span>
      </div>
      <div class="flex flex-col justify-center items-center" style="margin-top: 92px;">
        <div class="bg-white" style="background-color: white; width: 360px; height: 80px; border-radius: 20px 20px 0 0;">
          <div class="flex flex-row mt-4">
            <span style="margin-left: 2em;">Selected</span>
            <span style="margin-left: 230px;">4</span>
          </div>
          <hr style="width: 310px; margin-left: 30px;">
          <div class="flex flex-row">
            <span class="font-bold" style="margin-left: 2em;">Total</span>
            <span style="margin-left: 230px;">₱280</span>
          </div>
        </div>
        <a href="qrcode">
          <div class="text-center" style="background-color: maroon; color: white; width: 360px; height: 60px; border-radius: 5px;">
            <button class="mt-4 text-xl font-semibold">PAY NOW</button>
          </div>
        </a>
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
          <a href="emptyhistory">
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