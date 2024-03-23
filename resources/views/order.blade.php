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
        <span class="font-bold text-3xl mt-20 ml-32">MY ORDER</span>
        <a href="payment">
          <i class="fas fa-arrow-right text-2xl mt-20 ml-20"></i>
        </a>
      </div>
      <div class="flex flex-col bg-zinc-300" style="border: 2px solid gray; width: 370px; height: 95px; margin-top: 30px; margin-left: 20px;">
        <div class="flex flex-row">
          <img style="width: 100px; height: 93px;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV1mn8AmFrmldZhG7Lc_uTy-NbSemRXlv0FwYOpQY-Hg&s" alt="">
          <div class="flex flex-col">
            <span class="font-md text-xl mt-2 ml-4">Chicken Burger</span>
            <span class="text-3xl ml-4 mt-2">₱50</span>
          </div>
          <div class="flex flex-col">
            <i class="fa-solid fa-trash-can" style="margin: 10px 0 0 92px; color: maroon;"></i>
            <div class="flex flex-row text-center mt-2">
              <div class="rounded-full" style="background-color: maroon; color: white; width: 25px; height: 25px;">
                <i class="fa-solid fa-plus"></i>
              </div>
              <span class="ml-4 mr-4">1</span>
              <div class="rounded-full" style="background-color: maroon; color: white; width: 25px; height: 25px;">
                <i class="fa-solid fa-minus"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-col bg-zinc-300" style="border: 2px solid gray; width: 370px; height: 95px; margin-top: 30px; margin-left: 20px;">
        <div class="flex flex-row">
          <img style="width: 100px; height: 93px;" src="https://cdn.sanity.io/images/f3knbc2s/production/1e0058379c6c2c9b60fa9ac91638d80d7a5135fd-1024x605.jpg" alt="">
          <div class="flex flex-col">
            <span class="font-md text-xl mt-2 ml-4">Pork Sisig</span>
            <span class="text-3xl ml-4 mt-2">₱100</span>
          </div>
          <div class="flex flex-col">
            <i class="fa-solid fa-trash-can" style="margin: 10px 0 0 142px; color: maroon;"></i>
            <div class="flex flex-row text-center mt-2 ml-10" style="margin-left: 50px;">
              <div class="rounded-full" style="background-color: maroon; color: white; width: 25px; height: 25px;">
                <i class="fa-solid fa-plus"></i>
              </div>
              <span class="ml-4 mr-4">1</span>
              <div class="rounded-full" style="background-color: maroon; color: white; width: 25px; height: 25px;">
                <i class="fa-solid fa-minus"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-col bg-zinc-300" style="border: 2px solid gray; width: 370px; height: 95px; margin-top: 30px; margin-left: 20px;">
        <div class="flex flex-row">
          <img style="width: 100px; height: 93px;" src="https://sundeeskitchen.files.wordpress.com/2020/10/pancake-2.jpg?w=1024" alt="">
          <div class="flex flex-col">
            <span class="font-md text-xl mt-2 ml-4">Leche Flan</span>
            <span class="text-3xl ml-4 mt-2">₱100</span>
          </div>
          <div class="flex flex-col">
            <i class="fa-solid fa-trash-can" style="margin: 10px 0 0 135px; color: maroon;"></i>
            <div class="flex flex-row text-center mt-2 ml-10" style="margin-left: 46px;">
              <div class="rounded-full" style="background-color: maroon; color: white; width: 25px; height: 25px;">
                <i class="fa-solid fa-plus"></i>
              </div>
              <span class="ml-4 mr-4">1</span>
              <div class="rounded-full" style="background-color: maroon; color: white; width: 25px; height: 25px;">
                <i class="fa-solid fa-minus"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-col bg-zinc-300" style="border: 2px solid gray; width: 370px; height: 95px; margin-top: 30px; margin-left: 20px;">
        <div class="flex flex-row">
          <img style="width: 100px; height: 93px;" src="https://ideas.ted.com/wp-content/uploads/sites/3/2022/07/FINAL_Coffee.jpg" alt="">
          <div class="flex flex-col">
            <span class="font-md text-xl mt-2 ml-2">Creamy Coffee</span>
            <span class="text-3xl ml-4 mt-2">₱30</span>
          </div>
          <div class="flex flex-col">
            <i class="fa-solid fa-trash-can" style="margin: 10px 0 0 105px; color: maroon;"></i>
            <div class="flex flex-row text-center mt-2 ml-2" style="margin-left: 18px;">
              <div class="rounded-full" style="background-color: maroon; color: white; width: 25px; height: 25px;">
                <i class="fa-solid fa-plus"></i>
              </div>
              <span class="ml-4 mr-4">1</span>
              <div class="rounded-full" style="background-color: maroon; color: white; width: 25px; height: 25px;">
                <i class="fa-solid fa-minus"></i>
              </div>
            </div>
          </div>
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