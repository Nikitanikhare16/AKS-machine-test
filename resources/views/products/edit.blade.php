<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

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

  <ul id="qm0" class="qmmc">
    <li><a href="admin.html">Dashboard</a></li>

<li><a href="#" class="qmactive">Product</a>
          <ul>
            <li><a href="{{route('category.create')}}">Add Category</a></li>
            <li><a href="{{route('sub_categories.create')}} ">Add  Sub Category</a></li>

          	<li><a href="{{route('products.create')}}">Add Product</a></li>
          </ul>
      </li>

      <!--
      <li><a href="#">CCTV</a>
          <ul>
          	<li><a href="product-brand.html">Add Brand</a></li>
          	<li><a href="cctv.html">Add Product</a></li>
          </ul>
      </li> -->
    </ul>
</nav>
<div id="wrap">
  <div class="clear" style="height:5px;"></div>
  <form action={{route('products.update',$product->id)}} method="post" enctype="multipart/form-data">
    @csrf

  <div id="wrap2">
    <h1>Add Product</h1>
    <br>

    <div class="form-raw">
      <div class="form-name">Select Category</div>
      <div class="form-txtfld">
        <select name="category_id">
            @foreach($category as $do)
             <option value="{{$do->id}}">{{$do->name}}</option>
                @endforeach
        </select>
      </div>
    </div>
      <div class="clear"></div>


      <div class="form-raw">
        <div class="form-name">Select Sub Category</div>
        <div class="form-txtfld">
          {{-- <select style="height: 100px;" name="sub_category">
            <option value="">Select Option</option>
            @foreach($subcategory as $d)
            <option value="{{ $d->name }}">{{ $d->id }}</option>
            @endforeach
          </select> --}}
          <select  style="height: 100px;" name="sub_category">
            @foreach($subcategory as $s)
             <option value={{$s->id}}>{{$s->id}}</option>
                @endforeach
        </select>
        </div>
      </div>
      <div class="clear"></div>

    <div class="form-raw">
      <div class="form-name">Product Name</div>
      <div class="form-txtfld">
        <input type="text" name="product_name" value="{{$product->product_name}}">
      </div>
    </div>

    <div class="form-name">Product Image1</div>
    <div class="form-txtfld">
      <input type="file" name="image" value="{{$product->image}}">
      <div class="form-name"> Image Size ( Width=560px, Height=390px ) (Product page)</div>
    </div>
  </div>
  <div class="form-raw" style="width:100%;">
    <div class="form-name">Short Description</div>
    <div class="form-txtfld">
      <textarea name="short_description" value="{{$product->short_description}}"></textarea>
    </div>
  </div>

  <div class="clear"></div>
  <h1 style="border-bottom: 1px solid #CCC; padding-bottom: 10px; margin: 20px 0 0px 0;">Description</h1>
    <br>
  <div class="form-raw">
    <div class="form-name"> &nbsp;</div>
      <div class="form-txtfld">
       <input type="text"  placeholder="Title" name="title" value="{{$product->title}}">
      </div>
    </div>
  <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="heading" name="heading" value="{{$product->heading}}"></div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="desciption" name="description_" value="{{$product->description_}}"></div>
       <a href="#"><img src="{{asset('images/delete.gif')}}" alt=""></a>
  </div>
  <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width: 320px; text-align: right;"><a href="#">Add More +</a></div>
  </div>



  {{-- <div class="form-raw">
      <div class="form-name"> &nbsp;</div>
      <div class="form-txtfld">
      <input type="text"  placeholder="Title">
      </div>
    </div>
  <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="heading"></div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="desciption"></div> <a href="#"><img src="images/delete.gif" alt=""></a>
  </div>
  <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width: 320px; text-align: right;"><a href="#">Add More +</a></div>
  </div>



  <div class="form-raw">
      <div class="form-name"> &nbsp;</div>
      <div class="form-txtfld">
        <input type="text"  placeholder="Title">

      </div>
    </div>
  <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="heading"></div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="desciption"></div>
       <a href="#"><img src="{{asset('images/delete.gif')}}" alt=""></a>
  </div>
  <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width: 320px; text-align: right;"><a href="#">Add More +</a></div>
  </div> --}}

 <!--  <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="heading"></div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="desciption"></div>
      <a href="#"><img src="images/delete.gif" alt=""></a>
  </div> -->







  <div class="clear"></div>
  <h1 style="border-bottom: 1px solid #CCC; padding-bottom: 10px; margin: 20px 0 0px 0; " >Features</h1>
    <br>
  <div class="form-raw" style="width:100%;">
    <div class="form-name">Content</div>
    <div class="form-txtfld" style="width:780px;">
      <textarea style="width:100%; height:500px;" name="features"  id="editor" value="{{$product->features}}"> </textarea>
    </div>
  </div>
  <div class="clear"></div>
  <h1 style="border-bottom: 1px solid #CCC; padding-bottom: 10px; margin: 20px 0 0px 0;">Upload PDF</h1>
    <br>

<div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="PDF heading" name="pdf_heading" value="{{$product->pdf_heading}}"></div>
      <div class="form-txtfld txtfld50"><input type="file" placeholder="desciption" name="pdf_file" value="{{$product->pdf_file}}"></div>
  </div>
  <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width: 320px; text-align: right;"><a href="#">Add More +</a></div>
  </div>

{{-- <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="PDF heading"></div>
      <div class="form-txtfld txtfld50"><input type="file" placeholder="desciption"></div>
  </div>
  <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld" style="width: 320px; text-align: right;"><a href="#">Add More +</a></div>
  </div>

   <div class="form-raw">
      <div class="form-name">&nbsp;</div>
      <div class="form-txtfld txtfld50"><input type="text" placeholder="PDF heading"></div>
      <div class="form-txtfld txtfld50"><input type="file" placeholder="desciption"></div>
      <a href="#"><img src="{{asset('images/delete.gif')}}" alt=""></a>
  </div>

 --}}


     <!-- <div class="form-raw">
      <div class="form-name">Heading</div>
      <div class="form-txtfld">
        <input type="text">
      </div>
    </div>
     <div class="form-raw">
      <div class="form-name">PDF</div>
      <div class="form-txtfld">
        <input type="file">
      </div>
    </div> -->



  <div class="clear"></div>
  <div class="form-raw">
    <div class="form-name">Active</div>
    <div class="form-txtfld">
      <input type="checkbox" name="active" value="{{$product->active}}">
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
  <div class="form-raw">
    <div class="form-name">&nbsp;</div>
    <div class="form-txtfld">
        <button type="submit" >Update</button>
        </div>
  </div>
</div>
</form>
<div class="clear">&nbsp;</div>
</div>
<div id="wrap2">
   <table width="100%" border="0" cellspacing="0" cellpadding="0" class="admintable">
    <tr>
      <th width="53" align="left" valign="middle">Sr.No.</th>
      <th width="153" align="left" valign="middle">Select Category</th>
      <th width="71" align="left" valign="middle"> Select Sub Category</th>
     <th width="71" align="left" valign="middle"> Product Name</th>
     <th width="61" align="left" valign="middle">Product Image</th>

      <th width="408" align="left" valign="middle">Short Description</th>
      <th width=" " align="left" valign="middle">Full Description</th>
      <th width="49" align="left" valign="middle">Status</th>

      <th width="49" align="left" valign="middle">Edit</th>
      <th width="61" align="left" valign="middle">Remove</th>
    </tr>
    @foreach ($data as $d)

    <tr>
      <td align="left" valign="top">{{$d->id}}</td>
      <td align="left" valign="top">{{$d->category_id}}</td>
      <td align="left" valign="top">{{$d->sub_category}}</td>
      <td align="left" valign="top">{{$d->product_name}}</td>

      <td align="left" valign="top">{{$d->image}}</td>
      <td align="left" valign="top">{{$d->short_description}}</td>
      <td align="left" valign="top">{{$d->description_}}</td>

      <td align="left" valign="top">{{$d->active}}</td>

      {{-- <td align="left" valign="top"><strong>Active</strong></td> --}}
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
      <a href="https://www.akswebsoft.com/" target="_blank" style="float:right;"> <img src="{{asset('images/akslogo.png')}}" alt="AKS Websoft Consulting Pvt. Ltd." title="AKS Websoft Consulting Pvt. Ltd."></a>
      <div class="clear"></div>
    </div>
  </footer>
</footer>
<script>
  ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .catch( error => {
      console.error( error );
    } );
</script>
</body>
</html>
