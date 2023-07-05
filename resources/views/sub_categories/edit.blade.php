<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>AKS Machine Test</title>
<!-- slider start -->
<!-- slider end -->
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
      <li><a href="admin.html">Dashboard</a></li>
      <li><a href="#">Product</a>
          <ul>
            <li><a href="{{route('category.create')}}">Add Category</a></li>
            <li><a href="{{route('sub_categories.create')}} ">Add  Sub Category</a></li>

          	<li><a href="{{route('products.create')}}">Add Product</a></li>
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
  <form action={{route('sub_categories.update',$subcategory->id)}} method="post" enctype="multipart/form-data">
    @csrf
<div id="wrap">
  <div class="clear" style="height:5px;"></div>
  <div id="wrap2">
    <h1>Add Sub Category</h1>
    <br>

<div class="form-raw">
      <div class="form-name">Select Category</div>
      <div class="form-txtfld" >
        <select name="category_id" >
             <option>Select Option</option>
            @foreach($category as $d)
             <option value="{{$d->id}}">{{$d->name}}</option>
                @endforeach

        </select>
      </div>
    </div>
      <div class="clear"></div>

    <div class="form-raw">
      <div class="form-name">Add Sub Category</div>
      <div class="form-txtfld">
        <input type="text" name="sub_category" value="{{ $subcategory->sub_category}}">
      </div>
    </div>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
    <div class="form-raw">
      <div class="form-name">Active</div>
      <div class="form-txtfld">
        <input type="checkbox" name="active">
      </div>
      <div class="clear"></div>
    </div>

    <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width:290px;">
        <button value="submit">Update</button>      </div>
    </div>
  </div>
</form>
  <div class="clear">&nbsp;</div>
</div>
<div id="wrap3">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="admintable">
    <tr>
      <th width="59" align="left" valign="middle">Sr.No.</th>
      <th width="752" align="left" valign="middle">Category Name</th>
       <th width="752" align="left" valign="middle">Sub Category Name</th>
      <th width="77" align="left" valign="middle">Status</th>
      <th width="54" align="left" valign="middle">Edit</th>
      <th width="71" align="left" valign="middle">Remove</th>
    </tr>
    @foreach ($data as $d)

    <tr>
      <td align="left" valign="top">{{$d->id}}</td>
      <td align="left" valign="top">{{$d->category_id}}</td>
       <td align="left" valign="top">{{$d->sub_category}}</td>
      <td align="left" valign="top"><strong>{{$d->active}}</strong></td>
      <td align="left" valign="top"><a href="#">Edit</a></td>
      <td align="center" valign="top"><a href="#"><img src="{{asset('images/icon-bin.jpg')}}" alt="" width="25" height="25" border="0" align="absmiddle" /></a></td>
    </tr>
    @endforeach
  </table>
  <div class="clear">&nbsp;</div>
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

