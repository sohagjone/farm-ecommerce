<!DOCTYPE html>
<html>
<head>
<title>Vegetable Shop</title>
<meta charset="utf-8">
<link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css" charset="utf-8">
</head>
<body>
<div id="background">
  <div id="page">
    <div id="header"> 
      <div id="featured">
        
    <center><button class="btn btn-success"><a href="{{URL::to('productview')}}" class="button">shop Now!</a>
      </button></center></div>
    </div>
    <div id="contents">
      <div id="main">
        <div id="adbox"> 
  <div id="featured">
    <center><button class="btn btn-success"><a href="{{URL::to('productview')}}" class="button">shop Now!</a>
      </button></center></div>
          <img src="images/bg-header-1.jpg" alt=""> </div>
      </div>
      <div id="featured">
        <ul>
          <li><img src="images/mango.jpg" alt=""></li>
          <li><img src="images/tomato.jpg" alt=""></li>
          <li><img src="images/orange.jpg" alt=""></li>
        <li class="last"><img src="images/banana.jpg" alt=""></li>
        </ul>
        <a href="{{URL::to('productview')}}" class="button">shop Now!</a> </div>
    </div>
    <div id="featured">
        <ul>
          <li><img src="images/mango.jpg" alt=""></li>
          <li><img src="images/tomato.jpg" alt=""></li>
          <li><img src="images/orange.jpg" alt=""></li>
        <li class="last"><img src="images/banana.jpg" alt=""></li>
        </ul>
        <a href="{{URL::to('admin-login')}}" class="button">Admin!</a> </div>
    </div>
    <!-- /#contents -->
    <div id="footer">
 >
  </div>
  <!-- /#page -->
</div>
<!-- /#background -->
</body>
</html>
