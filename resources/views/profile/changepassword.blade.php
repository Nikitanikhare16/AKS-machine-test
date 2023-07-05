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
       <div class="logo"><img src="{{asset('images/logo.png')}}" border="0"></div>
    <div class="topmenu">
      <ul>
        <li><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
        <li><a href="{{route('changePassword')}}">Change Password</a>&nbsp;|</li>
        <li><a href="{{route('logout')}}"><img src="{{asset('images/logout.png')}}" width="16" height="16" border="0" align="absmiddle">&nbsp;&nbsp;Logout</a></li>
      </ul>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</header>
  <nav>
    <ul id="qm0" class="qmmc" >
      <li><a href="admin.html">Dashboard</a></li>
      <li><a href="#">Product</a>
          <ul>
            <li><a href="add-category.html">Add Category</a></li>
            <li><a href="add-sub-category.html">Add  Sub Category</a></li>

            <li><a href="product.html">Add Product</a></li>
          </ul>
      </li>
     <!--  <li><a href="#">CCTV</a>
          <ul>
          	<li><a href="product-brand.html">Add Brand</a></li>
          	<li><a href="cctv.html">Add Product</a></li>
          </ul>
      </li> -->
    </ul>
  </nav>

<div id="wrap" >
  <section class="bodymain" style="min-height:580px;">
    <aside class="middle-container">
      <div class="admin-inr"><br>
 <form method="POST" action="{{route('password.update')}}" class="mt-6 space-y-6">
    @csrf
    @method('put')
		<div class="form-outer" style="margin-left:320px; width:500px;">
		          <h1>Change Password</h1>
		          <div class="contact-row">
		            <div class="name">Current Password</div>
		            <div class="txtfld-box">
		              <input type="password" name="current_password" autocomplete="current-password">
		            </div>
		            <div class="req-field"> This Field Required </div>
		          </div>
		          <div class="clear"></div>
		          <div class="contact-row">
		            <div class="name">New Password</div>
		            <div class="txtfld-box">
		              <input type="password" name="password" autocomplete="new-password">
		            </div>
		          </div>
		          <div class="clear"></div>
		          <div class="contact-row">
		            <div class="name">Confirm Password</div>
		            <div class="txtfld-box">
		              <input type="password" name="password_confirmation" autocomplete="new-password">
		            </div>
		          </div>
		          <div class="clear">&nbsp;</div>
		          <div class="contact-row">
		            <div class="name" style="float:right; width:1px;">&nbsp;</div>
		            <div style="background:none; border:none; float:left;">
		              {{-- <input type="button" class="btn" value="Change Password"> --}}
                      <button>Change Password</button>
		              <br>
		            </div>
		          </div>
		        </div>

{{--

                    <div>
                        <x-input-label for="current_password" :value="__('Current Password')" />
                        <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
                        <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="password" :value="__('New Password')" />
                        <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                        <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                        <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex items-center gap-4">
                        <x-primary-button>{{ __('Save') }}</x-primary-button>

                        @if (session('status') === 'password-updated')
                            <p
                                x-data="{ show: true }"
                                x-show="show"
                                x-transition
                                x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600"
                            >{{ __('Saved.') }}</p>
                        @endif
                    </div> --}}
                </form>

		        <div class="clear">&nbsp;</div>

        <div class="clear"></div>
      </div>
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
                <img src="{{asset('images/akslogo.png')}}" alt="AKS Websoft Consulting Pvt. Ltd." title="AKS Websoft Consulting Pvt. Ltd."></a>

      <div class="clear"></div>
    </div>
  </footer>
</footer>
</body>
</html>
