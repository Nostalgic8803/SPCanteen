@extends('layouts.apps')


@section('content')


@include('layouts.supernavbar')            
  <div class="container-shadow">
    <div class="container">
      <h2>
        <b>Hello Super Admin!</b>
      </h2>
      <div class="topp">
      <div class="box">
          <img class="boxImg" src="upload/first.png" alt="first.png">
          <div class="left">
            <h3>75</h3>
            <p class="above">Total Completed</p>
            <p class="below"><img class="smol" src="upload/smolicon.png" alt="smolicon.png">       4% (30 days)</p>
          </div>
        </div>
        <div class="box">
          <img class="boxImg" src="upload/second.png" alt="second.png">
          <div class="left">
            <h3>75</h3>
            <p class="above">Total Completed</p>
            <p class="below"><img class="smol" src="upload/smolicon.png" alt="smolicon.png">       4% (30 days)</p>
          </div>
        </div>
        <div class="box">
          <img class="boxImg" src="upload/third.png" alt="third.png">
          <div class="left">
            <h3>75</h3>
            <p class="above">Total Completed</p>
            <p class="below"><img class="smol" src="upload/smolicon.png" alt="smolicon.png">       4% (30 days)</p>
          </div>
        </div>
        <div class="box">
          <img class="boxImg" src="upload/first.png" alt="fourth.png">
          <div class="left">
            <h3>75</h3>
            <p class="above">Total Completed</p>
            <p class="below"><img class="smol" src="upload/smolicon.png" alt="smolicon.png">       4% (30 days)</p>
          </div>
        </div>
      </div>
      <div class="bottomm">
        <img class="chart" src="upload/chart.png" alt="chart.png">
      </div>
    </div>
    
    @endsection