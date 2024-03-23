@extends('layouts.addproduct')

@section('content') 
  <center>
    <div class="container-shadow">
      <div class="center-icon">
        <img src="https://i.ibb.co/7QLKBSz/423062764-1342544113808335-7405620093325838006-n-removebg-preview.png" alt="423062764-1342544113808335-7405620093325838006-n-removebg-preview" style="margin-top:25px; width:220px;height:180px;margin-right:10px;">
        <br>
        <br>
        <div class="icon-bar">
    <a class="active" href="superadmin"><span class="fa fa-dashboard "><class style="color: black; margin-left:26px;">Dashboard</span></a><br> 
       <a class="active" href="superproductlist"><span class="fa fa-history"><class style="color: black; margin-left:26px;">Add Products</span></a><br></span></a>
         <a class="active" href="transactionsuper"><span class="far fa-file"><class style="color: black; margin-left:26px;">Transaction  History</span></a><br></span></a>
          <a class="active" href="manageuser"><span class="far fa-address-book"><class style="color: black; margin-left:26px;">Manage User</span></a><br></span></a>
           <a class="active" href="loginpage"><span class="fa fa-sign-out"><class style="color: black; margin-left:26px;">Logout</span></a></span></a><br>
            <p style="color: #999; font-size:13px;"><b>SPC CANTEEN</b><br>© 2024 All Rights Reserved</p>
             </form></center></div>
  <div class="container">
    <div class="search-form">
      <form action="" method="GET">
        <input type="text" name="search" placeholder="Search...">
        <button id="searchButton">
          <i class="fa fa-search" style="font-size:20px;"></i>
        </button>
      </form>
    </div>
    <a href="addproduct" class="add-product-btn">
      <i class="far fa-plus-square"></i> Add Product </a>
    <div id="product-list-container">
      <a href="edit.php">
        <img class="profile" src="{{URL('upload/as.PNG')}}" style="margin-left:8px;width: 300px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
      </a>
      <a href="#">
        <img class="profile" src="{{URL('upload/as.PNG')}}" style="margin-left:8px;width: 300px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
      </a>
      <a href="#">
        <img class="profile" src="{{URL('upload/as.PNG')}}" style="margin-left:8px;width: 300px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
      </a>
      <a href="#">
        <img class="profile" src="{{URL('upload/as.PNG')}}" style="margin-left:8px;width: 300px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
      </a>
      <a href="#">
        <img class="profile" src="{{URL('upload/as.PNG')}}" style="margin-left:8px;width: 300px; height: 250px; border-radius: 20px; margin-right:5px;margin-bottom:10px;">
      </a>
    </div>

    <div class="floating-container">
<center><br>
        <form action="#">
        <div class="containerbox ">
        <label for="image"><br><br>
    <input type="file" id="image" name="image">
  </label>
  <div class="background-image"></div>
</div>
            <label for="name" style="margin-right:60px; font-weight:bold;">Product Name: 
            <input type="text" id="name" name="name"><br><br>
            <label for="price">Product Price:
            <input type="text" id="price" placeholder="₱" name="price"><br><br>
            <label for="category"style="margin-right:80px; font-weight:bold;">Select Category:
            <select id="category" name="category">
                <option value="1">Breakfast</option>
                <option value="2">Lunch</option>
                <option value="3">Snack</option>
                <option value="4">Beverage</option>
                <option value="5">Dinner</option>
                <option value="6">Dessert</option>
                <option value="7">Healthy</option>
            </select></label><br><br>       
            <button type="button" onclick="window.location.href='superproductlist'" style="margin-left: 60px; width: 80px; font-size: 17px; height: 30px; background-color: maroon; border: none; border-radius: 7px; color:white;">Save</button>

            <button type="button" onclick="window.location.href='superproductlist'" style="margin-left: 4px; width: 85px; font-size: 17px; height: 30px; background-color: red; border: none; border-radius: 7px; color:white;">Cancel</button>
            </form>
</div>
@endsection