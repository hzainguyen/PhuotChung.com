<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="public/css/reset.css">
  <link rel="stylesheet" href="public/css/style.css"> <!-- Resource style -->
  <link rel="stylesheet" href="public/lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="public/lib/font-awesome/css/font-awesome.min.css">
  <style type="text/css" media="screen">
    @font-face {
      font-family: 'Roboto Black';
      src: url('public/css/fonts/Roboto-Black.ttf');
    }

    @font-face {
      font-family: 'Roboto Bold';
      src: url('public/css/fonts/Roboto-Bold.ttf');
    }

    @font-face {
      font-family: 'Roboto Italic';
      src: url('public/css/fonts/Roboto-Italic.ttf');
    }

    @font-face {
      font-family: 'Roboto Light';
      src: url('public/css/fonts/Roboto-Light.ttf');
    }

    @font-face {
      font-family: 'Roboto Medium';
      src: url('public/css/fonts/Roboto-Medium.ttf');
    }

    @font-face {
      font-family: 'Roboto Regular';
      src: url('public/css/fonts/Roboto-Regular.ttf');
    }

    @font-face {
      font-family: 'Roboto Thin';
      src: url('public/css/fonts/Roboto-Thin.ttf');
    }
  </style>

  <script src="public/js/page_1.js"></script>
  <title>Tourism Community</title>
</head>
<body>
<?php
		if(isset($_GET['page'])){
			$page = $_GET['page'];
		} else {
			$page = 'home';
		}
	?>

<div id="tab_nav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn">&times;</a>
  <ul class="clearfix">
    <li><a href="?page=home"><i class="fa fa-home fa-fw"></i> Trang chủ</a></li>
    <li><a href="?page=page_1"><i class="fa fa-mobile-phone fa-fw"></i> Địa điểm</a></li>
    <li><a href="?page=group"><i class="fa fa-laptop fa-fw"></i> Nhóm</a></li>
    <li><a href="?page=post_place"><i class="fa fa-laptop fa-fw"></i> Đăng</a></li>
    <li><a href="" data-toggle="modal" data-target="#myModal"><i class="fa fa-volume-control-phone fa-fw"></i> Login</a>
    </li>
  </ul>
</div>

<div id="search_nav" class="searchnav">
  <a href="javascript:void(0)" class="closebtn">&times;</a>
  <h3>Search</h3>
  <input type="text">
  <div id="effect"></div>
  <div id="show_result">
    <ul class="nav nav-tabs" role="tablist">
      <li class="active"><a href="#place_search" role="tab" data-toggle="tab" style="color: black;">Địa điểm</a></li>
      <li><a href="#group_search" role="tab" data-toggle="tab" style="color: black;">Nhóm</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane fade in active" id="place_search">
        <ul>
          <li class="clearfix">
            <a href="?page=page_2">
              <div class="col-xs-5 item-search-image"><img class="full-img" src="public/images/home_page/place_3.jpg"
                                                           alt=""></div>
              <div class="col-xs-7 item-search-desc">
                <p class="title">Lorem Ipsum is simply dummy text </p>
                <p>It has survived only five</p>
                <i class="fa fa-star-o" style="color: #99cc00;"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
              </div>
            </a>
          </li>
          <li class="clearfix">
            <a href="?page=page_2">
              <div class="col-xs-5 item-search-image"><img class="full-img" src="public/images/home_page/place_2.jpg"
                                                           alt=""></div>
              <div class="col-xs-7 item-search-desc">
                <p class="title">Lorem Ipsum is simply dummy text </p>
                <p>It has survived only five</p>
              </div>
            </a>
          </li>
          <li class="clearfix">
            <a href="?page=page_2">
              <div class="col-xs-5 item-search-image"><img class="full-img" src="public/images/home_page/place_4.jpg"
                                                           alt=""></div>
              <div class="col-xs-7 item-search-desc">
                <p class="title">Lorem Ipsum is simply dummy text </p>
                <p>It has survived only five</p>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <div class="tab-pane fade" id="group_search">
        <ul>
          <li class="clearfix">
            <div class="col-xs-5 item-search-image"><img class="full-img" src="public/images/home_page/place_3.jpg"
                                                         alt=""></div>
            <div class="col-xs-7 item-search-desc">
              <p class="title">Lorem Ipsum is simply dummy text </p>
              <p>It has survived only five</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div id="main">
  <header class="header-fixed">
    <div class="header-limiter clearfix">
      <span class="resize_menu"><i class="fa fa-navicon fa-2x"></i></span>
      <!-- <h1><a href="?page=home">Tourism<span>logo</span></a></h1> -->
      <a href="?page=home"><img src="public/images/phuotchung-final.png" alt="" class="full-img logo"></a>
      <nav>
        <a href="?page=home" <?php if($page == 'home') echo 'class="selected"'; ?>>Trang chủ</a>
        <a href="?page=page_1" <?php if($page == 'page_1') echo 'class="selected"'; ?>>Địa điểm</a>
        <a href="?page=group" <?php if($page == 'group') echo 'class="selected"'; ?>>Nhóm</a>
        <a href="?page=post_place" <?php if($page == 'post_place') echo 'class="selected"'; ?>>Đăng</a>
        <a href="" data-toggle="modal" data-target="#myModal">Login</a>
        <a href="javascript:void(0)" class="search_menu_large"><i class="fa fa-search"></i></a>
      </nav>
      <span class="search_menu_small"><i class="fa fa-search fa-2x"></i></span>
    </div>
  </header>
  <!-- You need this element to prevent the content of the page from jumping up -->
  <div class="header-fixed-placeholder"></div>

  <!-- Login popup -->
  <div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
       aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
            class="sr-only">Close</span></button>
          <!-- <h4 class="modal-title text-center" id="myModalLabel">Login</h4> -->
        </div>
        <div class="modal-body">
          <section id="hero" class="login">
            <div id="login">
              <div class="text-center"><img src="" alt="" data-retina="true"></div>
              <hr>
              <form>
                <div class="row">
                  <div class="col-md-6 col-sm-6 login_social">
                    <a href="#" class="btn btn-primary btn-block"><i class="icon-facebook"></i> Facebook</a>
                  </div>
                  <div class="col-md-6 col-sm-6 login_social">
                    <a href="#" class="btn btn-danger btn-block "><i class="icon-twitter"></i>Google+</a>
                  </div>
                </div> <!-- end row -->
                <div class="login-or">
                  <hr class="hr-or">
                  <span class="span-or">or</span></div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class=" form-control " placeholder="Username">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class=" form-control" placeholder="Password">
                </div>
                <p class="small">
                  <a href="#">Forgot Password?</a>
                </p>
                <a href="#" class="btn btn-success btn-lag" style="width: 100%;">Sign in</a>
              </form>
            </div>
          </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
