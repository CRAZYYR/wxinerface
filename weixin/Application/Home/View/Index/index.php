<!DOCTYPE html>
<html>
<head>
	<title>登录页面</title>
	<link href="../../../../Public/bootstrap/css/bootstrap.css" rel="stylesheet">
    	<script type="text/javascript" src="../../../../Public/jquery-3.1.1/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="../../../../Public/bootstrap/js/bootstrap.js"></script>

	
</head>
<body>
<!-- 导航开始 -->
	<nav class="navbar navbar-default"style="margin: 0px;">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- 导航结束 -->
<!-- 轮播开始 -->
<div id="carousel-example-generic" class="container-fluid carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div  class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="center-block" style="width: 1000px;height: 300px;" src="./public/image/1.jpg" alt="...">
      <div class="carousel-caption">
        这个是图片
      </div>
    </div>
    <div class="item">
      <img class="center-block" style="width: 1000px;height: 300px;" src="./public/image/2.jpg" alt="...">
      <div class="carousel-caption">
        hahahwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
      </div>
    </div>
	  <div class="item">
      <img class="center-block" style="width: 1000px;height: 300px;" src="./public/image/3.jpg" alt="...">
      <div class="carousel-caption">
       3333333333333333333333
      </div>
    </div>

  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- 轮播结束 -->

	<div class="row container" style="margin-top: 10px;">
		<div class="col-md-6  col-md-offset-3">

			<div class="panel panel-info">
			<div class="panel-heading">
				
				<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">账号：</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">密码：</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  
  <div class="form-group ">
    <div class="col-sm-offset-2 col-sm-10  ">
    <button type="button" onclick="location='<?php echo U('/Weixin/Index') ?>'" class="btn btn-default" style="margin-left: 80px;">注册</button>
      <button style="margin-left: 40px;" type="submit" class="btn btn-default">登陆</button>
    </div>
  </div>
</form>

	</div>
</body>
</html>