{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>AKS Machine Test</title>

<link rel="stylesheet" href="{{asset('css/style.css')}}">
<!--[if lt IE 9]>
<script type="text/javascript" src="html5.js"></script>
<![endif]-->
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="pngfix1.js"></script>
<![endif]-->
<!-- Menu start --------------->
<link href="{{asset('menu/quickmenu0.css')}}" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="{{asset('menu/quickmenu0.js')}}"></script>
<!-- Menu End --------------->
</head>
<body>
<header>
  <div id="wrap">
       <div class="logo"><img src="images/logo.png" border="0"></div>
    <div class="topmenu">
      <ul>
        <li><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
        <li><a href="{{route('changePassword')}}">Change Password</a>&nbsp;|</li>
        <li><a href="{{route('logout')}}"><img src="images/logout.png" width="16" height="16" border="0" align="absmiddle">&nbsp;&nbsp;Logout</a></li>
      </ul>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</header>
  <nav>
    <ul id="qm0" class="qmmc" >
      <li><a href="admin.html" class="qmactive">Dashboard</a></li>
      <li><a href="#">Product</a>
          <ul>
          	<li><a href="{{route('category.create')}}">Add Category</a></li>
            <li><a href="{{route('sub_categories.create')}} ">Add  Sub Category</a></li>

          	<li><a href="{{route('products.create')}}">Add Product</a></li>
          </ul>
      </li>
      <!-- <li><a href="#">CCTV</a>
          <ul>
          	<li><a href="product-brand.html">Add Brand</a></li>
          	<li><a href="cctv.html">Add Product</a></li>
          </ul>
      </li> -->


    </ul>
  </nav>

<div id="wrap">
  <section class="bodymain" style="min-height:540px;">
    <aside class="middle-container">
     <div class="clear" style="height:5px;"></div>
      <h1 style="margin:50px 0 0 270px; font-size:35px; color:#036d9a;">Welcome To Admin Panel</h1>

      </aside>
    <div class="clear"></div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </section>
</div>
<div class="clear"></div>
<footer>
  <footer class="whitefoter">
    <div class="whitefooter-cont">
      <div style="float:left;">Copyright © AKS Machine Test. All Rights Reserved.</div>
           <a href="https://www.akswebsoft.com/" target="_blank" style="float:right;">
                <img src="images/akslogo.png" alt="AKS Websoft Consulting Pvt. Ltd." title="AKS Websoft Consulting Pvt. Ltd."></a>

      <div class="clear"></div>
    </div>
  </footer>
</footer>
</body>
</html>
