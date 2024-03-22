@extends('layouts.admin')

@section('content')   


@include('layouts.adminnavbars')    
<div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search...">
            <button id="searchButton"><i class="fa fa-search" style="font-size:20px;"></i></button>
        </div>
        
              
             <div class="container">
            <h2 style="margin-left:25px; margin-bottom:180px; font-size:35px; margin-top:20px;"><b>Transaction History</b>
            <span><p style="margin-left:15px;">March 03 2024</p></h2>
            <div class="container " style="width: 1000px;  height:97px; background-color: white; border-radius: 17px;  margin-bottom: 20px;">
    <p style="font-size: 15px; margin-left:20px; color:gray;">Status
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Amount
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Date
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Transaction Date</span>
        <h3 style="font-size: 15px; font-weight: bold; ">
            <i class="fa fa-circle" style="color: orange; margin-right: 10px;"></i>Processing
            <span style="font-size: 15px; font-weight: normal; margin-left:130px; font-weight: bold;">₱ 135.00</span>
            <span style="font-size: 15px; font-weight: normal; margin-left:130px; font-weight: bold;">5 February 2024</span>
            <span style="font-size: 15px; font-weight: normal; font-weight: bold;  margin-left:130px;">SPC2024-69</span>
            <!-- Button added here -->
            <button type="button" onclick="window.location.href='dashboard'" style="margin-left: 60px; width: 100px; font-size: 17px; height: 30px; background-color: maroon; color: #fff; border: none; border-radius: 3px;">Details</button>
        </h3>
    </p>
</div>
<div class="container " style="width: 1000px; margin-bottom: 4px; height:97px; background-color: white; border-radius: 17px;  margin-bottom: 20px;">
    <p style="font-size: 15px; margin-left:20px; color:gray;">Status
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Amount
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Date
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Transaction Date</span>
        <h3 style="font-size: 15px; font-weight: bold; ">
            <i class="fa fa-circle" style="color: red; margin-right: 10px;"></i>Cancelled
            <span style="font-size: 15px; font-weight: normal; margin-left:130px; font-weight: bold;">₱ 105.00</span>
            <span style="font-size: 15px; font-weight: normal; margin-left:130px; font-weight: bold;">3 February 2024</span>
            <span style="font-size: 15px; font-weight: normal; font-weight: bold;  margin-left:140px;">SPC2024-69</span>
            <!-- Button added here -->
            <button type="button" onclick="window.location.href='#'" style="margin-left: 60px; width: 100px; font-size: 17px; height: 30px; background-color: maroon; color: #fff; border: none; border-radius: 3px;">Details</button>
        </h3>
    </p>
</div>
<div class="container " style="width: 1000px; margin-bottom: 4px; height:97px; background-color: white; border-radius: 17px;  margin-bottom: 50px;">
    <p style="font-size: 15px; margin-left:20px; color:gray;">Status
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Amount
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Date
        <span style="font-size: 15px; font-weight: normal; margin-left:170px;">Transaction Date</span>
        <h3 style="font-size: 15px; font-weight: bold; ">
            <i class="fa fa-circle" style="color: green; margin-right: 10px;"></i>Successful
            <span style="font-size: 15px; font-weight: normal; margin-left:130px; font-weight: bold;">₱ 35.00</span>
            <span style="font-size: 15px; font-weight: normal; margin-left:130px; font-weight: bold;">3 February 2024</span>
            <span style="font-size: 15px; font-weight: normal; font-weight: bold;  margin-left:145px;">SPC2024-69</span>
            <!-- Button added here -->
            <button type="button" onclick="window.location.href='#'" style="margin-left: 60px; width: 100px; font-size: 17px; height: 30px; background-color: maroon; color: #fff; border: none; border-radius: 3px;">Details</button>
        </h3>
    </p>
</div>
@endsection