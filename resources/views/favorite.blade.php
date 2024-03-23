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
      <div class="sticky top-0 bg-zinc-300" style="z-index: 2;">
        <div class="font-bold text-3xl mt-10 text-center">
          <span>MY FAVORITE</span>
        </div>
        <form>
          <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg aria-hidden="true" class="w-5 h-5 ml-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
            </div>
            <input type="search" id="default-search" class="block h-12 w-96 mt-10 ml-4 p-4 pl-10 text-base text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search favorite . . ." required>
          </div>
        </form>
        <div class="flex flex-row sticky mt-6"></div>
      </div>
      <div class="flex flex-col bg-white mt-4 ml-4 mr-5 w-96">
        <div class="flex flex-col items-center mb-3 mt-5">
          <img style="width: 350px; height: 180px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV1mn8AmFrmldZhG7Lc_uTy-NbSemRXlv0FwYOpQY-Hg&s" alt="">
          <div class="absolute bg-white w-10 h-10 rounded-full" style="margin: 8px 0 0 18em;">
            <i class="fas fa-heart text-2xl" style="color: maroon; margin: 5px 0 0 8px;"></i>
          </div>
        </div>
        <div class="font-regular">
          <i class="fas fa-clock ml-5 text-xl" style="color: green;"></i>
          <span style="color: green;">10 mins</span>
          <i class="fas fa-cart-plus mt-1 text-2xl ml-48" style="color: maroon;"></i>
          <span class="text-2xl">₱50</span>
        </div>
        <div class="font-bold">
          <h1 class="font-bold text-2xl ml-5 mt-2 mb-4">Chicken Burger</h1>
        </div>
      </div>
      <div class="flex flex-col bg-white mt-10 ml-4 mr-5 w-96">
        <div class="flex flex-col items-center mb-3 mt-5">
          <img style="width: 350px; height: 180px;" src="https://cdn.sanity.io/images/f3knbc2s/production/1e0058379c6c2c9b60fa9ac91638d80d7a5135fd-1024x605.jpg" alt="">
          <div class="absolute bg-white w-10 h-10 rounded-full" style="margin: 8px 0 0 18em;">
            <i class="fas fa-heart text-2xl" style="color: maroon; margin: 5px 0 0 8px;"></i>
          </div>
        </div>
        <div class="font-regular">
          <i class="fas fa-clock ml-5 text-xl" style="color: green;"></i>
          <span style="color: green;">10 mins</span>
          <i class="fas fa-cart-plus mt-1 text-2xl ml-44" style="color: maroon;"></i>
          <span class="text-2xl">₱100</span>
        </div>
        <div class="font-bold">
          <h1 class="font-bold text-2xl ml-5 mt-2 mb-4">Pork Sisig w/ Egg & Rice</h1>
        </div>
      </div>
      <div class="flex flex-col bg-white mt-10 ml-4 mr-5 w-96">
        <div class="flex flex-col items-center mb-3 mt-5">
          <img style="width: 350px; height: 180px;" src="https://sundeeskitchen.files.wordpress.com/2020/10/pancake-2.jpg?w=1024" alt="">
          <div class="absolute bg-white w-10 h-10 rounded-full" style="margin: 8px 0 0 18em;">
            <i class="fas fa-heart text-2xl" style="color: maroon; margin: 5px 0 0 8px;"></i>
          </div>
        </div>
        <div class="font-regular">
          <i class="fas fa-clock ml-5 text-xl" style="color: green;"></i>
          <span style="color: green;">10 mins</span>
          <i class="fas fa-cart-plus mt-1 text-2xl ml-48" style="color: maroon;"></i>
          <span class="text-2xl">₱100</span>
        </div>
        <div class="font-bold">
          <h1 class="font-bold text-2xl ml-5 mt-2 mb-4">Leche Flan</h1>
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
        <div class="flex flex-col items-center mt-3" style="color: lightgreen;">
          <i class="fas fa-heart text-2xl"></i>
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