@extends('layouts.product')

@section('content')
@include('layouts.adminproduct')
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
    <div id="product-list-container" style="text-align:center;">
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
    
@endsection