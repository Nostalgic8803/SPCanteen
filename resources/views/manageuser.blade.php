@extends('layouts.admin')


@section('content')
    
@include('layouts.superadminnavbar')  
            <div class="container">
           <h2 style="margin-bottom:117px;"><b>Manage User</b></h2>
          <div class="container shadow " style="width: 1000px; margin-top:5px; height:255px; background-color: white; border-radius: 5px;  margin-bottom: 20px;">
         <p style="font-size: 18px; margin-left:10px; color:black; font-weight: bold;">User Profile
        <span style="font-size: 18px; font-weight: normal; margin-left:40px; font-weight: bold;">Username
       <span style="font-size: 18px; font-weight: normal; margin-left:70px; font-weight: bold;">Student_Id
      <span style="font-size: 18px; font-weight: normal; margin-left:80px; font-weight: bold;"> Email</span>
     <span style="font-size: 18px; font-weight: normal; margin-left:120px; font-weight: bold;"> Status</span> 
    <span style="font-size: 18px; font-weight: normal; margin-left:130px; font-weight: bold;">Action</span>
   <hr>
    <img class="profile" src="{{URL('images/pic.PNG')}}" style="width: 60px; height: 60px; border-radius: 50%; margin-left:5px;">
     <span style="font-size: 15px; font-weight: normal; margin-left:70px; ">Romarc Bongcaron</span>
      <span style="font-size: 15px; font-weight: normal; margin-left:65px; ">7202</span>
       <span style="font-size: 15px; font-weight: normal;  margin-left:90px;">romarc@gmail.com</span>
        <span style="font-size: 15px; font-weight: normal;  margin-left:70px;">Student</span>

         <button type="button" onclick="window.location.href='dashboard'" style="margin-left: 60px; width: 80px; font-size: 17px; height: 40px; background-color: blue; border: none; border-radius: 7px; color:white;">Edit</button>
          <button type="button" onclick="window.location.href='dashboard'" style="margin-left: 4px; width: 85px; font-size: 17px; height: 40px; background-color: red; border: none; border-radius: 7px; color:white;">Remove</button>
      
           <hr>
            <img class="profile" src="{{URL('images/profile.jpg')}}" style="width: 60px; height: 60px; border-radius: 50%; margin-right:5px;">
             <span style="font-size: 15px; font-weight: normal; margin-left:70px; ">Harley Cabasagan</span>
              <span style="font-size: 15px; font-weight: normal; margin-left:70px; ">52024</span>
               <span style="font-size: 15px; font-weight: normal;  margin-left:90px;">harley@gmail.com</span>
                <span style="font-size: 15px; font-weight: normal;  margin-left:70px;">Student</span>
            <!-- Button added here -->
                 <button type="button" onclick="window.location.href='dashboard'" style="margin-left: 60px; width: 80px; font-size: 17px; height: 40px; background-color: blue; border: none; border-radius: 7px; color:white;">Edit</button>
                  <button type="button" onclick="window.location.href='dashboard'" style="margin-left: 4px; width: 85px; font-size: 17px; height: 40px; background-color: red; border: none; border-radius: 7px; color:white;">Remove</button>
                   </div>	      

       @endsection