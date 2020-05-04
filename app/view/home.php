<div id="home_page">
  <div id="arrow" class="col-xs-12"><span><i class="fa fa-angle-down fa-2x"></i></span></div>
  <style>
    #test_filter {
      filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale"); /* Firefox 3.5+ */
      filter: brightness(40%); /* IE6-9 */
      -webkit-filter: brightness(40%); /* Chrome 19+ & Safari 6+ */
    }
  </style>
  <div id="home_background">
    <img id="test_filter" src="public/images/background_2.jpg" alt=""
         style="position: fixed; top: 0; left: 0; min-width: 100%; min-height: 100%; z-index: -10; filter: brightness(40%);">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2" style="color: #fff; position: absolute; top: 25vh; text-align: center">
        <h1>Khám phá Việt Nam</h1>
        <p style="color: #fff;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
    <div class="row" id="button_navi">
      <div class="button-navi button-one">
        <a href="?page=page_1">Tìm địa điểm</a>
      </div>
      <div class="button-navi button-two">
        <a href="?page=group">Tìm nhóm phượt</a>
      </div>
    </div>
  </div>
  <div id="feature_place" class="row top-title">
    <h1 class="text-center">Feature Place</h1>
    <p class="text-center col-sm-8 col-sm-offset-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
      eiusmod tempor incididunt ut labore et dolore magna aliqua. There are many variations of passages of Lorem
      Ipsum available, but the majority have suffered alteration in some form.</p>
  </div>
  <style>
    body {
      background: rgb(229, 229, 229);
    }

    #home_page .feature-item {
      position: relative;
      margin-bottom: 20px;
    }

    .feature-item:hover {
      cursor: pointer;
    }

    .fix-img {
      height: 260px;
    }

    .label-place {
      padding: 3px 7px 1px 7px;
      background: #e53935;
      color: #fff;
    }

    .info-place {
      background: black;
      background-color: rgba(0, 0, 0, 0.4);
      color: white;
      width: 100%;
      display: block;
      margin: 0;
      padding: 6px 7px;
    }

    .info-place h3 {
      margin: 0;
      margin-bottom: 3px;
    }

    .feature-item:hover {
      opacity: 0.7;
    }
  </style>
  <div style="background: #ecf0f1; padding: 10px 0 50px 0;">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <a href="?page=page_2">
            <div class="feature-item">
              <img src="public/images/home_page/vinhalong.jpg" class="img-responsive fix-img full-img" alt="">
              <div style="position: absolute;left: 0px; bottom: 0px; width: 100%;">
                <span class="label-place">Miền Bắc</span><br>
                <div class="info-place clearfix">
                  <h3>Vịnh Hạ Long</h3>
                  <div>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <a href="?page=page_2">
            <div class="feature-item">
              <img src="public/images/home_page/bienquanghong.jpg" class="img-responsive fix-img full-img" alt="">
              <div style="position: absolute;left: 0px; bottom: 0px; width: 100%;">
                <span class="label-place">Miền Trung</span><br>
                <div class="info-place clearfix">
                  <h3>Biển Quảng Hồng</h3>
                  <div>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <a href="?page=page_2">
            <div class="feature-item">
              <img src="public/images/home_page/hanoi.jpg" class="img-responsive fix-img full-img" alt="">
              <div style="position: absolute;left: 0px; bottom: 0px; width: 100%;">
                <span class="label-place">Miền Nam</span><br>
                <div class="info-place clearfix">
                  <h3>Hồ Gươm - Hà Nội</h3>
                  <div>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <a href="?page=page_2">
            <div class="feature-item">
              <img src="public/images/home_page/place_2.jpg" class="img-responsive fix-img full-img" alt="">
              <div style="position: absolute;left: 0px; bottom: 0px; width: 100%;">
                <span class="label-place">Miền Trung</span><br>
                <div class="info-place clearfix">
                  <h3>Vịnh Hạ Long</h3>
                  <div>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <a href="?page=page_2">
            <div class="feature-item">
              <img src="public/images/home_page/place_3.jpg" class="img-responsive fix-img full-img" alt="">
              <div style="position: absolute;left: 0px; bottom: 0px; width: 100%;">
                <span class="label-place">Miền Bắc</span><br>
                <div class="info-place clearfix">
                  <h3>Vịnh Hạ Long</h3>
                  <div>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <a href="?page=page_2">
            <div class="feature-item">
              <img src="public/images/home_page/place_4.jpg" class="img-responsive fix-img full-img" alt="">
              <div style="position: absolute;left: 0px; bottom: 0px; width: 100%;">
                <span class="label-place">Miền Bắc</span><br>
                <div class="info-place clearfix">
                  <h3>Vịnh Hạ Long</h3>
                  <div>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <a href="?page=page_2">
            <div class="feature-item">
              <img src="public/images/home_page/vinhalong.jpg" class="img-responsive fix-img full-img" alt="">
              <div style="position: absolute;left: 0px; bottom: 0px; width: 100%;">
                <span class="label-place">Miền Bắc</span><br>
                <div class="info-place clearfix">
                  <h3>Vịnh Hạ Long</h3>
                  <div>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <a href="?page=page_2">
            <div class="feature-item">
              <img src="public/images/home_page/bienquanghong.jpg" class="img-responsive fix-img full-img" alt="">
              <div style="position: absolute;left: 0px; bottom: 0px; width: 100%;">
                <span class="label-place">Miền Trung</span><br>
                <div class="info-place clearfix">
                  <h3>Biển Quảng Hồng</h3>
                  <div>
                    <i class="fa fa-star" style="color: #99cc00;;"></i>
                    <i class="fa fa-star" style="color: #99cc00;;"></i>
                    <i class="fa fa-star" style="color: #99cc00;;"></i>
                    <i class="fa fa-star" style="color: #99cc00;;"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
          <a href="?page=page_2">
            <div class="feature-item">
              <img src="public/images/home_page/hanoi.jpg" class="img-responsive fix-img full-img" alt="">
              <div style="position: absolute;left: 0px; bottom: 0px; width: 100%;">
                <span class="label-place">Miền Nam</span><br>
                <div class="info-place clearfix">
                  <h3>Hồ Gươm - Hà Nội</h3>
                  <div>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star" style="color: #99cc00;"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="col-xs-12" style="text-align: center;"><a href="?page=page_1"><span><i
        class="fa fa-angle-down fa-4x"></i></span></a></div>
    </div>
  </div>

  <div id="about" class="row top-title" style="background: #fff;">
    <h1 class="text-center">Tổng quan</h1>
    <p class="text-center col-sm-8 col-sm-offset-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
      eiusmod tempor incididunt ut labore et dolore magna aliqua. There are many variations of passages of Lorem
      Ipsum available, but the majority have suffered alteration in some form.</p>
  </div>
  <div class="row" style="background: #fff; padding-bottom: 25px; margin-right: 0 !important;">
    <div class="container">
      <div class="col-sm-3 col-md-3 col-lg-3">
        <div id="circle_1" class="circle-info"></div>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3">
        <div id="circle_2" class="circle-info"></div>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3">
        <div id="circle_3" class="circle-info"></div>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3">
        <div id="circle_4" class="circle-info"></div>
      </div>
    </div>
  </div>

  <div id="comment" class="row top-title" style="background: #ecf0f1;">
    <h1 class="text-center">Đánh giá</h1>
    <p class="text-center col-sm-8 col-sm-offset-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
      eiusmod tempor incididunt ut labore et dolore magna aliqua. There are many variations of passages of Lorem
      Ipsum available, but the majority have suffered alteration in some form.</p>
  </div>
  <div class="row" style="background: #ecf0f1; padding: 2% 0 9% 0; margin-right: 0;">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <div class="container">
        <ol class="carousel-indicators" style="bottom: -40px !important;">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"
              style="border: 1px solid black !important;"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"
              style="border: 1px solid black !important;"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"
              style="border: 1px solid black !important;"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="quote">
              <div class="col-md-3">
                <figure class="testimonial-img">
                  <img src="public/images/home_page/place_4.jpg" alt="" class="img-circle img-responsive"
                       style="display: block; width: 150px; height: 150px; margin: 0 auto; border: 3px solid white; ">
                </figure>
              </div>
              <div class="col-md-9">
                <p style="font-size: 24px; line-height: 50px"><i>"It is a long established fact that a reader will be
                  distracted by the readable content of a page when looking at its layout."</i></p>
                <div class="author">- <i>Fabrizio De Andr&egrave;</i> -</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="quote">
              <div class="col-md-3">
                <figure class="testimonial-img">
                  <img src="public/images/home_page/place_3.jpg" alt="" class="img-circle img-responsive"
                       style="display: block; width: 150px; height: 150px; margin: 0 auto; border: 3px solid white; ">
                </figure>
              </div>
              <div class="col-md-9">
                <p style="font-size: 24px; line-height: 50px"><i>"It is a long established fact that a reader will be
                  distracted by the readable content of a page when looking at its layout."</i></p>
                <div class="author">- <i>B.B. King</i> -</div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="quote">
              <div class="col-md-3">
                <figure class="testimonial-img">
                  <img src="public/images/home_page/place_2.jpg" alt="" class="img-circle img-responsive"
                       style="display: block; width: 150px; height: 150px; margin: 0 auto; border: 3px solid white; ">
                </figure>
              </div>
              <div class="col-md-9">
                <p style="font-size: 24px; line-height: 50px"><i>"It is a long established fact that a reader will be
                  distracted by the readable content of a page when looking at its layout."</i></p>
                <div class="author">- <i>Fabrizio De Andr&egrave;</i> -</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>