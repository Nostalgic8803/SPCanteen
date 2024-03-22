@extends('layouts.admin')


@section('content')
 <!-- navbar -->   

@include('layouts.adminnavbars')             
     <div class="container">
     <center><h1><b>QR Code Scanner</b></h1>
      <video id="qr-video" width="500" height="400" autoplay></video>
       <div id="qr-result">
        <button type="submit" class="submit" >SCAN</button></div>
           
<script src="/js/orderscanner.js"></script>

@endsection