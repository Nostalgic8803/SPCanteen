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
      <div class="bg-red-800 relative m-0 flex flex-row justify-center w-full h-48 box-border">
        <span class="break-words mt-10 font-inter font-normal text-2xl text-white">PROFILE</span>
      </div>
      <div class="shadow-xl rounded-lg bg-zinc-300 absolute left-1/2 top-24 translate-x-[-50%] flex flex-col items-center w-72 pb-8 box-border">
        <div class="m-0 flex flex-row justify-between self-end w-56 box-border">
          <div class="flex flex-row">
            <img class="rounded-full mt-6 ml-11" style="width: 70px; height: 70px;" src="/images/bandits.png" alt="">
            <i class="fa-regular fa-pen-to-square mt-4 ml-20" style="color: maroon; font-size: 20px;"></i>
          </div>
        </div>
        <span class="text-xl font-bold mt-2 text-black">Jannlenn Viernes</span>
        <span class="text-xs text-black">STUDENT</span>
      </div>
      <div class="bg-red-800 w-16 h-16 rounded-full mt-40 ml-10">
        <div class="flex flex-row">
          <a class="flex flex-row" href="landing">
            <i class="fa-solid fa-bars text-3xl" style="margin: 12px 0 0 19px; color: white;"></i>
            <span class="text-2xl font-semibold" style="color: black; margin:  14px 0 0 28px;">Dashboard</span>
          </a>
        </div>
      </div>
      <div class="bg-red-800 w-16 h-16 rounded-full ml-10" style="margin-top: 40px;">
        <div class="flex flex-row">
          <a class="flex flex-row" href="history">
            <i class="fa-regular fa-clock text-3xl" style="margin: 13px 0 0 17px; color: white;"></i>
            <span class="text-2xl font-semibold" style="color: black; margin:  14px 0 0 28px;">History</span>
          </a>
        </div>
      </div>
      <div class="bg-red-800 w-16 h-16 rounded-full ml-10" style="margin-top: 40px;">
        <div class="flex flex-row">
          <a class="flex flex-row" href="about">
            <i class="fa-solid fa-circle-exclamation text-3xl" style="margin: 13px 0 0 17px; color: white;"></i>
            <span class="text-2xl font-semibold" style="color: black; margin:  14px 0 0 28px;">About</span>
          </a>
        </div>
      </div>
      <div class="bg-red-800 w-16 h-16 rounded-full ml-10" style="margin-top: 40px;">
        <div class="flex flex-row">
          <a class="flex flex-row" href="loginpage">
            <i class="fa-solid fa-right-from-bracket text-3xl" style="margin: 12px 0 0 18px; color: white;"></i>
            <span class="text-2xl font-semibold" style="color: black; margin:  14px 0 0 28px;">Logout</span>
          </a>
        </div>
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
        <div class="flex flex-col items-center mt-3" style="color: white;">
          <a href="emptyorder">
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
        <div class="flex flex-col items-center mt-3" style="color: lightgreen;">
          <i class="far fa-user-circle text-2xl"></i>
          <div>
            <span>Profile</span>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>