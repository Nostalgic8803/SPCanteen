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
      <div class="sticky top-0 bg-zinc-300" style="z-index: 2;">
        <div class="grid grid-cols-2 gap-56 my-11">
          <h1 class="ml-6 font-bold text-3xl whitespace-nowrap">Hello User!</h1>
          <div class="flex flex-row">
            <i class="fa-regular fa-bell mt-1 text-2xl" style="color: black;"></i>
            <img class="rounded-full w-10 h-10 ml-2" src="/images/bandits.png" alt="">
          </div>
        </div>
        <div class="flex flex-row overflow-x-auto space-x-8 pl-2 pr-2">
          <div class="flex flex-col items-center">
            <div class="rounded-full w-12 h-12">
              <a href="#">
                <img src="https://cdn-icons-png.flaticon.com/512/5562/5562062.png" alt="">
              </a>
            </div>
            <div class="font-semibold">
              <span>All</span>
              <div class="ml-1">
                <i class="fas fa-circle" style="font-size: 10px; color: green;"></i>
              </div>
            </div>
          </div>
          <div class="flex flex-col items-center">
            <a href="category1">
              <img class="rounded-full w-12 h-12" src="https://cdn-icons-png.freepik.com/256/3480/3480823.png" alt="">
            </a>
            <div class="opacity-75">
              <span>Breakfast</span>
            </div>
          </div>
          <div class="flex flex-col items-center">
            <a href="category2">
              <img class="rounded-full w-12 h-12" src="https://cdn-icons-png.flaticon.com/512/5787/5787212.png" alt="">
            </a>
            <div class="opacity-75">
              <span>Lunch</span>
            </div>
          </div>
          <div class="flex flex-col items-center">
            <a href="category3">
              <img class="rounded-full w-12 h-12" src="https://cdn-icons-png.freepik.com/512/2497/2497904.png" alt="">
            </a>
            <div class="opacity-75">
              <span>Snack</span>
            </div>
          </div>
          <div class="flex flex-col items-center">
            <a href="category4">
              <img class="rounded-full w-12 h-12" src="https://cdn2.iconfinder.com/data/icons/food-72/192/.svg-12-512.png" alt="">
            </a>
            <div class="opacity-75">
              <span>Beverages</span>
            </div>
          </div>
          <div class="flex flex-col items-center">
            <a href="category5">
              <img class="rounded-full w-12 h-12" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSFf5pWRMd8tjnW9HrVQLO2Ir2yTQ2hQJCAvrUlxIdCGIbCRCTh" alt="">
            </a>
            <div class="opacity-75">
              <span>Dinner</span>
            </div>
          </div>
          <div class="flex flex-col items-center">
            <a href="category6">
              <img class="rounded-full w-12 h-12" src="https://cdn-icons-png.flaticon.com/256/6030/6030105.png" alt="">
            </a>
            <div class="opacity-75">
              <span>Dessert</span>
            </div>
          </div>
          <div class="flex flex-col items-center">
            <a href="category7">
              <img class="rounded-full w-12 h-12" src="https://cdn.icon-icons.com/icons2/3277/PNG/512/salad_bowl_food_vegetables_vegan_healthy_food_icon_208011.png" alt="">
            </a>
            <div class="opacity-75">
              <span>Healthy</span>
            </div>
          </div>
        </div>
        <div>
          <form>
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
              <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 ml-4 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
              </div>
              <input type="search" id="default-search" class="block h-12 w-96 mt-10 ml-4 p-4 pl-10 text-base text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-white dark:border-white dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search . . ." required>
            </div>
          </form>
        </div>
        <div class="flex flex-row sticky mt-4">
          <span class="ml-6 font-bold text-xl">Recommended</span>
          <span class="ml-52">All</span>
        </div>
      </div>
      <div class="flex flex-col bg-white mt-4 ml-4 mr-5 w-96">
        <div class="flex flex-col items-center mb-3 mt-5">
          <img style="width: 350px; height: 180px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV1mn8AmFrmldZhG7Lc_uTy-NbSemRXlv0FwYOpQY-Hg&s" alt="">
          <div class="absolute bg-white w-10 h-10 rounded-full" style="margin: 8px 0 0 18em;">
            <a href="landing2">
              <i class="fas fa-heart text-2xl" style="color: lightgray; margin: 5px 0 0 8px;"></i>
            </a>
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
            <i class="fas fa-heart text-2xl" style="color: lightgray; margin: 5px 0 0 8px;"></i>
          </div>
        </div>
        <div class="font-regular">
          <i class="fas fa-clock ml-5 text-xl" style="color: green;"></i>
          <span style="color: green;">10 mins</span>
          <a href="landing6">
            <i class="fas fa-cart-plus mt-1 text-2xl ml-44" style="color: maroon;"></i>
            <span class="text-2xl">₱100</span>
          </a>
        </div>
        <div class="font-bold">
          <h1 class="font-bold text-2xl ml-5 mt-2 mb-4">Pork Sisig w/ Egg & Rice</h1>
        </div>
      </div>
      <div class="flex flex-col bg-white mt-10 ml-4 mr-5 w-96">
        <div class="flex flex-col items-center mb-3 mt-5">
          <img style="width: 350px; height: 180px;" src="https://sundeeskitchen.files.wordpress.com/2020/10/pancake-2.jpg?w=1024" alt="">
          <div class="absolute bg-white w-10 h-10 rounded-full" style="margin: 8px 0 0 18em;">
            <i class="fas fa-heart text-2xl" style="color: lightgray; margin: 5px 0 0 8px;"></i>
          </div>
        </div>
        <div class="font-regular">
          <i class="fas fa-clock ml-5 text-xl" style="color: green;"></i>
          <span style="color: green;">10 mins</span>
          <i class="fas fa-cart-plus mt-1 text-2xl ml-44" style="color: maroon;"></i>
          <span class="text-2xl">₱100</span>
        </div>
        <div class="font-bold">
          <h1 class="font-bold text-2xl ml-5 mt-2 mb-4">Leche Flan</h1>
        </div>
      </div>
      <div class="flex flex-col bg-white mt-10 ml-4 mr-5 w-96">
        <div class="flex flex-col items-center mb-3 mt-5">
          <img style="width: 350px; height: 180px;" src="https://ideas.ted.com/wp-content/uploads/sites/3/2022/07/FINAL_Coffee.jpg" alt="">
          <div class="absolute bg-white w-10 h-10 rounded-full" style="margin: 8px 0 0 18em;">
            <i class="fas fa-heart text-2xl" style="color: lightgray; margin: 5px 0 0 8px;"></i>
          </div>
        </div>
        <div class="font-regular">
          <i class="fas fa-clock ml-5 text-xl" style="color: green;"></i>
          <span style="color: green;">10 mins</span>
          <i class="fas fa-cart-plus mt-1 text-2xl ml-48" style="color: maroon;"></i>
          <span class="text-2xl">₱30</span>
        </div>
        <div class="font-bold">
          <h1 class="font-bold text-2xl ml-5 mt-2 mb-4">Creamy Coffee</h1>
        </div>
      </div>
      <div class="flex flex-col bg-white mt-10 ml-4 mr-5 w-96">
        <div class="flex flex-col items-center mb-3 mt-5">
          <img style="width: 350px; height: 180px;" src="https://leitesculinaria.com/wp-content/uploads/2021/05/perfect-hot-dog-fp.jpg" alt="">
          <div class="absolute bg-white w-10 h-10 rounded-full" style="margin: 8px 0 0 18em;">
            <i class="fas fa-heart text-2xl" style="color: lightgray; margin: 5px 0 0 8px;"></i>
          </div>
        </div>
        <div class="font-regular">
          <i class="fas fa-clock ml-5 text-xl" style="color: green;"></i>
          <span style="color: green;">10 mins</span>
          <i class="fas fa-cart-plus mt-1 text-2xl ml-48" style="color: maroon;"></i>
          <span class="text-2xl">₱10</span>
        </div>
        <div class="font-bold">
          <h1 class="font-bold text-2xl ml-5 mt-2 mb-4">Classic Hotdog</h1>
        </div>
      </div>
      <div class="grid grid-cols-5 h-20 bg-red-800 mt-auto fixed bottom-0 w-full" style="color: lightgreen;">
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