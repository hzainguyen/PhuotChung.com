	<div class="container-fluid page_1" id="searchPage">
		<!-- <div class="row" style="margin-top: 10px ; padding-bottom: 10px;vertical-align: center;">
			<form id="search-form" action="index.php">
				<div class="col-lg-3" id="input-search" >
					<input id="input-search-text" type="text" class="form-control nullborder" placeholder="VD: Hàm Lợn, Tam Đảo, Ba Vì,..." style="width: 100%; margin-left: 0px">
				</div>
				<div class="col-lg-2" id="input-selectionSearch">
					<select class="form-control"  id="input-selectionSearch-text">
						  <option>Tất cả</option>
						  <option>Địa chỉ</option>
						  <option>Mô tả</option>
						</select>
				</div>
				<div class="col-lg-1">
					<button class="btn-md btn btn-info" id="search-btn"> <span class="glyphicon glyphicon-search"></span> Tìm</button>
				</div>
			</form>
		</div> -->
		
		<div class="row" style="margin-top:0px;background-color: #e5e5e5;">
			<div id="left" class="col-lg-3 col-xs-12 col-md-3 col-sm-12">
				<!-- <div class="row">
					<button id="btn-filter" class="btn btn-info">BỘ LỌC</button>
				</div>
				<div id="filter" >
						<div class="element-filter" id="khuvuc">
							<a class="filter-title" data-toggle="collapse" href="#dt1"><b>Khu vực</b></a>
							<div class="filter-detail" id="dt1">	

				    				<div class="radio">
				     				 <label class="label-scheck"><input class="scheck" type="checkbox" name="optradio" > Tất cả</label>
				   				 </div>
				    				<div class="radio">
				     				 <label class="label-scheck"><input class="scheck" type="checkbox" name="optradio"> Miền Bắc</label>
				    					</div>
				    				<div class="radio">
				      				<label class="label-scheck"><input class="scheck" type="checkbox" name="optradio"> Miền Trung</label>
				    				</div>
				    				<div class="radio">
				      				<label class="label-scheck"><input class="scheck" type="checkbox" name="optradio"> Miền Nam</label>
				    				</div>
				 			</div>
						</div>
						<div class="element-filter" id="diahinh">
							<h3 class="filter-title"><b>Địa hình</b></h3>
							<div class="filter-detail">	
				    				<div class="radio">
				     				 <label class="label-scheck"><input class="scheck" type="checkbox" name="optradio"> Tất cả</label>
				   				 </div>
				    				<div class="radio">
				     				 <label class="label-scheck"><input class="scheck" type="checkbox" name="optradio"> Vùng biển</label>
				    					</div>
				    				<div class="radio">
				      				<label class="label-scheck"><input class="scheck" type="checkbox" name="optradio"> Đồng bằng</label>
				    				</div>
				    				<div class="radio">
				      				<label class="label-scheck"><input class="scheck" type="checkbox" name="optradio"> Núi cao</label>
				    				</div>
				 			</div>
						</div>
						<div class="element-filter" id="chiphi">
							<h3 class="filter-title"><b>Chi phí (Mỗi người)</b></h3>
							<div class="filter-detail">	
				    				<div class="radio">
				     				 <label class="label-scheck"><input class="scheck" type="checkbox" name="optradio"> Tất cả</label>
				   				 </div>
				    				<div class="radio">
				     				 <label class="label-scheck"><input class="scheck" type="checkbox" name="optradio"> Dưới 1 triệu</label>
				    					</div>
				    				<div class="radio">
				      				<label class="label-scheck"><input class="scheck" type="checkbox" name="optradio"> Từ 1-3 triệu</label>
				    				</div>
				    				<div class="radio">
				      				<label class="label-scheck"><input class="scheck" type="checkbox" name="optradio"> Lớn hơn 3 triệu</label>
				    				</div>
				 			</div>
						</div>
						<div class="element-filter" id="luongnguoi">
							<h3 class="filter-title"><b>Số lượng người</b></h3>
							<div class="filter-detail">	
				    				<div class="radio">
				     				 <label class="label-scheck"><input class="scheck" type="checkbox" name="optradio"> 1 Người</label>
				   				 </div>
				    				<div class="radio">
				     				 <label class="label-scheck"><input class="scheck" type="checkbox" name="optradio"> 1-3 Người</label>
				    					</div>
				    				<div class="radio">
				      				<label class="label-scheck"><input class="scheck" type="checkbox" name="optradio"> 3-10 Người</label>
				    				</div>
				    				<div class="radio">
				      				<label class="label-scheck"><input class="scheck" type="checkbox" name="optradio"> Lớn hơn 10 Người</label>
				    				</div>
				 			</div>
						</div>
					
				</div> -->

				
				<div class="panel-group" id="accordion">
				  	<div class="panel panel-default">
				    	<div>
							<button id="btn-filter" class="btn btn-info" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">BỘ LỌC</button>
				    	</div>
				    	
					    <div id="collapseOne" class="panel-collapse collapse in">
					      	<div class="panel-body">
					      		<style>
/*#second {
  background-color: #FF8A66;
}*/
.page_1 .section {
  padding-left: 30px;
}
.page_1 .section input[type="checkbox"]{
  display: none;
}
.page_1 .container {
  /*margin-bottom: 10px;*/
}
.page_1 .container label {
  position: relative;
  color: rgb(153, 153, 153);
}

.page_1 .container span::before,
.page_1 .container span::after {
  content: '';
  position: absolute;
  top: 0;
  bottom: 0;
  margin: auto;
}
.page_1 span.checkbox {margin-top: 5px; margin-bottom: 5px;}

.page_1 .container span.checkbox::before {
  width: 25px;
  height: 25px;
  background-color: #fff;
  left: -33px;
  box-sizing: border-box;
  border: 1px solid rgb(153, 153, 153);
  transition: border-color .2s;
}
.page_1 .container span.checkbox:hover::before {
  border: 2px solid #565a5c;
}
.page_1 .container span.checkbox::after {
  content: '\f00c';
  font-family: 'FontAwesome';
  left: -27px;
  top: 2px;
  color: transparent;
  transition: color .2s;
}
.page_1 input[type="checkbox"]:checked + label span.checkbox::after {
  color: #565a5c;
}
.page_1 .star-rate {margin-right: 7px; font-size: 20px;}
.page_1 .star-mark {color: #a1c900;}
					      		</style>
								<h4 style="margin-left: 10px;">Địa hình</h4>
								<section id="second" class="section">

								    <div class="container">
								      	<input type="checkbox" name="group2" id="checkbox-12">
								      	<label for="checkbox-12"><span class="checkbox">Vùng biển</span></label>
								    </div>
								    <div class="container">
								      	<input type="checkbox" name="group2" id="checkbox-13">
								      	<label for="checkbox-13"><span class="checkbox">Đồng bằng</span></label>
								    </div>
								    <div class="container">
								      	<input type="checkbox" name="group2" id="checkbox-14">
								      	<label for="checkbox-14"><span class="checkbox">Núi cao</span></label>
								    </div>
								</section>
								<div style="margin: 5px 10px; border-bottom: 1px solid rgb(153, 153, 153);"></div>

								<h4 style="margin-left: 10px; margin-top: 15px;">Mức đánh giá</h4>
								<section id="second" class="section">

								    <div class="container">
								      	<input type="checkbox" name="group2" id="checkbox-8">
								      	<label for="checkbox-8"><span class="checkbox">
								      		<i class="fa fa-star-o star-rate star-mark"></i>
								      		<i class="fa fa-star-o star-rate star-mark"></i>
								      		<i class="fa fa-star-o star-rate star-mark"></i>
								      		<i class="fa fa-star-o star-rate star-mark"></i>
								      	(45)</span></label>
								    </div>
								    <div class="container">
								      	<input type="checkbox" name="group2" id="checkbox-9">
								      	<label for="checkbox-9"><span class="checkbox">
								      		<i class="fa fa-star-o star-rate star-mark"></i>
								      		<i class="fa fa-star-o star-rate star-mark"></i>
								      		<i class="fa fa-star-o star-rate star-mark"></i>
								      		<i class="fa fa-star-o star-rate"></i>
								      	(35)</span></label>
								    </div>
								    <div class="container">
								      	<input type="checkbox" name="group2" id="checkbox-10">
								      	<label for="checkbox-10"><span class="checkbox">
								      		<i class="fa fa-star-o star-rate star-mark"></i>
								      		<i class="fa fa-star-o star-rate star-mark"></i>
								      		<i class="fa fa-star-o star-rate"></i>
								      		<i class="fa fa-star-o star-rate"></i>
								      	(25)</span></label>
								    </div>
								    <div class="container">
								      	<input type="checkbox" name="group2" id="checkbox-11">
								      	<label for="checkbox-11"><span class="checkbox">
								      		<i class="fa fa-star-o star-rate star-mark"></i>
								      		<i class="fa fa-star-o star-rate"></i>
								      		<i class="fa fa-star-o star-rate"></i>
								      		<i class="fa fa-star-o star-rate"></i>
								      	(10)</span></label>
								    </div>
								</section>
								<div style="margin: 5px 10px; border-bottom: 1px solid rgb(153, 153, 153);"></div>

								<h4 style="margin-left: 10px; margin-top: 15px;">Chi phí</h4>
								<section id="second" class="section">

								    <div class="container">
								      	<input type="checkbox" name="group2" id="checkbox-1">
								      	<label for="checkbox-1"><span class="checkbox">Từ 10$ đến 50$</span></label>
								    </div>
								    <div class="container">
								      	<input type="checkbox" name="group2" id="checkbox-2">
								      	<label for="checkbox-2"><span class="checkbox">Từ 50$ đến 80$</span></label>
								    </div>
								    <div class="container">
								      	<input type="checkbox" name="group2" id="checkbox-3">
								      	<label for="checkbox-3"><span class="checkbox">Từ 80$ đến 100$</span></label>
								    </div>
								    <div class="container">
								      	<input type="checkbox" name="group2" id="checkbox-100">
								      	<label for="checkbox-100"><span class="checkbox">Từ 100$ đến 150$</span></label>
								    </div>
								</section>
								<div style="margin: 5px 10px; border-bottom: 1px solid rgb(153, 153, 153);"></div>

								<h4 style="margin-left: 10px; margin-top: 15px;">Khu vực</h4>
								<section id="second" class="section">

								    <div class="container">
								      	<input type="checkbox" name="group2" id="checkbox-4">
								      	<label for="checkbox-4"><span class="checkbox">Đông Bắc Bộ</span></label>
								    </div>
								    <div class="container">
								      	<input type="checkbox" name="group2" id="checkbox-5">
								      	<label for="checkbox-5"><span class="checkbox">Duyên hải miền Trung</span></label>
								    </div>
								    <div class="container">
								      	<input type="checkbox" name="group2" id="checkbox-6">
								      	<label for="checkbox-6"><span class="checkbox">Đông Nam Bộ</span></label>
								    </div>
								    <div class="container">
								      	<input type="checkbox" name="group2" id="checkbox-7">
								      	<label for="checkbox-7"><span class="checkbox">Tây Bắc Bộ</span></label>
								    </div>
								</section>

					      	</div>
					    </div>
					 </div>
				</div>

			</div>
			
			<div id="grid-model" class="col-lg-9 col-xs-12 col-md-9 col-sm-9" style="display:none; ">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-left: 0px;">	
							<h3 style="font-family: 'Roboto Condensed', sans-serif;">  Có 19 kết quả được tìm thấy</h3>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">	
							<button id="btn-grid" class="btn btn-default btn-lg btn-switch"><span class="glyphicon glyphicon-th"></span> Grid</button>
					</div>
				</div>
				<div class="row">
					<div class="result">
						<a href="index.php?page=page_2">
							<img class="img" src="public/images/baclieu.jpg" alt="" href="index.php?page=page_2">
						</a>
						<a href="index.php?page=page_2" class="a_title">Biển Bạc Liêu</a>
						<br>
						<div class="ps-vote">
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
						</div>
						<div class="ps-description">
							<p><b>Mô tả:</b><i> "Biển đầy gió, ngắm nhìn những tuabin điện gió khổng lồ."</i></p>
						</div>	

				
						<img src="public/images/avt1.jpg" class="img-circle img-avt" >

						
						<div class="vote-list">
							 <a href="index.php?page=page_2" class="like-icon"><span class="glyphicon glyphicon-thumbs-up" style="font-size: 20px;"></span></a>
							 <a href="index.php?page=page_2" class="like-quantity"> 6k9</a>
							 <a href="index.php?page=page_2" class="go-icon"><i style="font-size:20px" class="fa">&#xf21c;</i></a>

							 <a href="index.php?page=page_2" class="go-quantity"> 9k6</a>
						</div>
					</div>
					<div class="result">
						<a href="index.php?page=page_2">
							<img class="img" src="public/images/mucangchai.jpg" alt="" href="index.php?page=page_2">
						</a>
						<a href="index.php?page=page_2" class="a_title">Cánh đồng Mù Căng Chải</a>
						<br>
						<div class="ps-vote">
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
						</div>
						<div class="ps-description">
							<p><b>Mô tả:</b><i> "Không khí thoáng mát, con người thân thiện, cánh đồng tuyệt"</i></p>
						</div>	

						<img src="public/images/avt2.jpg" class="img-circle img-avt" >
						<div class="vote-list">
							 <a href="index.php?page=page_2" class="like-icon"><span class="glyphicon glyphicon-thumbs-up" style="font-size: 20px;"></span></a>
							 <a href="index.php?page=page_2" class="like-quantity"> 169</a>
							 <a href="index.php?page=page_2" class="go-icon"><i style="font-size:20px" class="fa">&#xf21c;</i></a>

							 <a href="index.php?page=page_2" class="go-quantity"> 9600</a>
						</div>
					</div>
					<div class="result">
						<a href="index.php?page=page_2">
							<img class="img" src="public/images/hanoi.jpg" alt="" href="index.php?page=page_2">
						</a>
						<a href="index.php?page=page_2" class="a_title">Hồ Gươm - Hà Nội</a>
						<br>
						<div class="ps-vote">
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
						</div>
						<div class="ps-description">
							<p><b>Mô tả:</b><i> "Nơi đây là một trong những điểm hút khách du lịch nhất Hà Nội"</i></p>
						</div>	

						<img src="public/images/avt3.jpg" class="img-circle img-avt" >
						<div class="vote-list">
							 <a href="index.php?page=page_2" class="like-icon"><span class="glyphicon glyphicon-thumbs-up" style="font-size: 20px;"></span></a>
							 <a href="index.php?page=page_2" class="like-quantity"> 6k9</a>
							 <a href="index.php?page=page_2" class="go-icon"><i style="font-size:20px" class="fa">&#xf21c;</i></a>

							 <a href="index.php?page=page_2" class="go-quantity"> 9k6</a>
						</div>
					</div>
					<div class="result">
						<a href="index.php?page=page_2">
							<img class="img" src="public/images/bienquanghong.jpg" alt="" href="index.php?page=page_2">
						</a>
						<a href="index.php?page=page_2" class="a_title">Biển Quảng Hồng</a>
						<br>
						<div class="ps-vote">
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
						</div>
						<div class="ps-description">
							<p><b>Mô tả:</b><i> "Bãi biển nguyên sơ với làn nước trong xanh tự nhiên."</i></p>
						</div>	

						<img src="public/images/avt4.jpg" class="img-circle img-avt" >
						<div class="vote-list">
							 <a href="index.php?page=page_2" class="like-icon"><span class="glyphicon glyphicon-thumbs-up" style="font-size: 20px;"></span></a>
							 <a href="index.php?page=page_2" class="like-quantity"> 69</a>
							 <a href="index.php?page=page_2" class="go-icon"><i style="font-size:20px" class="fa">&#xf21c;</i></a>

							 <a href="index.php?page=page_2" class="go-quantity"> 96</a>
						</div>
					</div>
					<div class="result">
						<a href="index.php?page=page_2">
							<img class="img" src="public/images/vinhalong.jpg" alt="" href="index.php?page=page_2">
						</a>
						<a href="index.php?page=page_2" class="a_title">Vịnh Hạ Long</a>
						<br>
						<div class="ps-vote">
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
						</div>
						<div class="ps-description">
							<p><b>Mô tả:</b><i> Đây là một trong những bãi biển đẹp nhất Việt Nam,....</i></p>
						</div>	

						<img src="public/images/avt4.jpg" class="img-circle img-avt" >
						<div class="vote-list">
							 <a href="index.php?page=page_2" class="like-icon"><span class="glyphicon glyphicon-thumbs-up" style="font-size: 20px;"></span></a>
							 <a href="index.php?page=page_2" class="like-quantity"> 69</a>
							 <a href="index.php?page=page_2" class="go-icon"><i style="font-size:20px" class="fa">&#xf21c;</i></a>

							 <a href="index.php?page=page_2" class="go-quantity"> 96</a>
						</div>
					</div>
					<div class="result">
						<a href="index.php?page=page_2">
							<img class="img" src="public/images/vinhalong.jpg" alt="" href="index.php?page=page_2">
						</a>
						<a href="index.php?page=page_2" class="a_title">Vịnh Hạ Long</a>
						<br>
						<div class="ps-vote">
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
						</div>
						<div class="ps-description">
							<p><b>Mô tả:</b><i> Đây là một trong những bãi biển đẹp nhất Việt Nam,....</i></p>
						</div>	

						<img src="public/images/avt2.jpg" class="img-circle img-avt" >
						<div class="vote-list">
							 <a href="index.php?page=page_2" class="like-icon"><span class="glyphicon glyphicon-thumbs-up" style="font-size: 20px;"></span></a>
							 <a href="index.php?page=page_2" class="like-quantity"> 69</a>
							 <a href="index.php?page=page_2" class="go-icon"><i style="font-size:20px" class="fa">&#xf21c;</i></a>

							 <a href="index.php?page=page_2" class="go-quantity"> 96</a>
						</div>
					</div>
					<div class="result">
						<a href="index.php?page=page_2">
							<img class="img" src="public/images/mucangchai.jpg" alt="" href="index.php?page=page_2">
						</a>
						<a href="index.php?page=page_2" class="a_title">Cánh đồng Mù Căng Chải</a>
						<br>
						<div class="ps-vote">
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
						</div>
						<div class="ps-description">
							<p><b>Mô tả:</b><i> "Không khí thoáng mát, con người thân thiện, cánh đồng tuyệt"</i></p>
						</div>	

						<img src="public/images/avt2.jpg" class="img-circle img-avt" >
						<div class="vote-list">
							 <a href="index.php?page=page_2" class="like-icon"><span class="glyphicon glyphicon-thumbs-up" style="font-size: 20px;"></span></a>
							 <a href="index.php?page=page_2" class="like-quantity"> 169</a>
							 <a href="index.php?page=page_2" class="go-icon"><i style="font-size:20px" class="fa">&#xf21c;</i></a>

							 <a href="index.php?page=page_2" class="go-quantity"> 9600</a>
						</div>
					</div>
					<div class="result">
						<a href="index.php?page=page_2">
							<img class="img" src="public/images/hanoi.jpg" alt="" href="index.php?page=page_2">
						</a>
						<a href="index.php?page=page_2" class="a_title">Hồ Gươm - Hà Nội</a>
						<br>
						<div class="ps-vote">
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
						</div>
						<div class="ps-description">
							<p><b>Mô tả:</b><i> "Nơi đây là một trong những điểm hút khách du lịch nhất Hà Nội"</i></p>
						</div>	

						<img src="public/images/avt3.jpg" class="img-circle img-avt" >
						<div class="vote-list">
							 <a href="index.php?page=page_2" class="like-icon"><span class="glyphicon glyphicon-thumbs-up" style="font-size: 20px;"></span></a>
							 <a href="index.php?page=page_2" class="like-quantity"> 6k9</a>
							 <a href="index.php?page=page_2" class="go-icon"><i style="font-size:20px" class="fa">&#xf21c;</i></a>

							 <a href="index.php?page=page_2" class="go-quantity"> 9k6</a>
						</div>
					</div>
					<div class="result">
						<a href="index.php?page=page_2">
							<img class="img" src="public/images/bienquanghong.jpg" alt="" href="index.php?page=page_2">
						</a>
						<a href="index.php?page=page_2" class="a_title">Biển Quảng Hồng</a>
						<br>
						<div class="ps-vote">
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
							<i class="fa fa-star star-color"></i>
						</div>
						<div class="ps-description">
							<p><b>Mô tả:</b><i> "Bãi biển nguyên sơ với làn nước trong xanh tự nhiên."</i></p>
						</div>	

						<img src="public/images/avt4.jpg" class="img-circle img-avt" >
						<div class="vote-list">
							 <a href="index.php?page=page_2" class="like-icon"><span class="glyphicon glyphicon-thumbs-up" style="font-size: 20px;"></span></a>
							 <a href="index.php?page=page_2" class="like-quantity"> 69</a>
							 <a href="index.php?page=page_2" class="go-icon"><i style="font-size:20px" class="fa">&#xf21c;</i></a>

							 <a href="index.php?page=page_2" class="go-quantity"> 96</a>
						</div>
					</div>
					
				</div>

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
						<ul class="pagination" >
							<li><a href="#">Prev</a></li>
						    <li class="active"><a href="#">1</a></li>
						    <li><a href="#">2</a></li>
						    <li><a href="#">3</a></li>
						    <li><a href="#">4</a></li>
						    <li><a href="#">5</a></li>
						    <li><a href="#">Next</a></li>
						  </ul>
					</div>
				</div>
			</div>
			<div id="list-model" class="col-lg-9 col-xs-12 col-md-9 col-sm-9" style=" display:block;">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="padding-left: 0px;">	
							<h3 style="font-family: 'Roboto Condensed', sans-serif;">  Có 19 kết quả được tìm thấy</h3>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">	
							<button id="btn-list" class="btn btn-default btn-lg btn-switch"><span class="glyphicon glyphicon-th-list"> </span> List</button>
					</div>
				</div>
				<div class="row row-list">
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" style="padding-left: 0px;">
						<a href="index.php?page=page_2">
							<img class="img-list" src="public/images/phuot1.jpg">
						</a>
					<!-- 	<button class="btn btn-info" style="width: 100%;background-color: #bdd94d;border-radius: 0px;border-color: #bdd94d;color:#004e00;">Xem chi tiết địa điểm</button> -->
						

					</div>
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="">
							<div class="detail-list">
									<br>	
								<a href="index.php?page=page_2">
									<h3 style="margin-top: 0px; font-weight: 400px;">Mộc Châu - Sơn La</h3>
								</a>
								<div>
									<i class="fa fa-star star-color"></i>
									<i class="fa fa-star star-color"></i>
									<i class="fa fa-star star-color"></i>
									<i class="fa fa-star-half-empty star-color"></i>
									<i class="fa fa-star-o star-color"></i>
									(73 reviews)
								</div>
								<p style="margin-top: 10px;padding-right: 50px;font-size: 18px;">	Mộc Châu là cao nguyên rộng lớn và xinh đẹp nhất miền núi phía bắc, có khí hậu ôn đới gió mùa, các điểm du lịch nổi tiếng như: Hang Doi, rừng thông Mộc Châu, thác Thái Hưng...</p>

								<div class="row">
								<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
								<p><b>Số người:</b> 4</p>
								<p>	<b>Chi phí:</b> 5 Triệu (Tất cả)</p>
								<p style="margin-bottom: 10px;"><b>	Đăng bởi: </b><a href="index.php?page=page_2">Nguyễn Minh Hiếu</a></p>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
								<div class="row" style="margin-top:15px;">
								
									 <a href="public/images/mocchau1.jpg" data-lightbox="mocchau" data-title="Bộ ảnh tuyệt đẹp về sapa, Thiên đường nghỉ mát là đây !!!"><img class="post-image-show small-img" data-u="image" src="public/images/mocchau1.jpg"  /></a>
									 
									 
									 <a href="public/images/mocchau2.jpg" data-lightbox="mocchau" data-title="Bộ ảnh tuyệt đẹp về sapa, Thiên đường nghỉ mát là đây !!!"><img class="post-image-show small-img" data-u="image" src="public/images/mocchau2.jpg"  /></a>
									
									 
									 <a href="public/images/mocchau3.jpg" data-lightbox="mocchau" data-title="Bộ ảnh tuyệt đẹp về sapa, Thiên đường nghỉ mát là đây !!!"><img class="post-image-show small-img" data-u="image" src="public/images/mocchau3.jpg"  /></a>
									 
									
								</div>
								</div>
								</div>
							</div>
					</div>
				</div>
				<div class="row row-list">
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" style="padding-left: 0px;">
						<a href="index.php?page=page_2">
							<img  class="img-list" src="public/images/phuot3.jpg">
						</a>
					<!-- 	<button class="btn btn-info" style="width: 100%;background-color: #bdd94d;border-radius: 0px;border-color: #bdd94d;color:#004e00;">Xem chi tiết địa điểm</button> -->
						

					</div>
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="">
							<div class="detail-list">
									<br>	
								<a href="index.php?page=page_2">
									<h3 style="margin-top: 0px; font-weight: 400px;">Vịnh Hạ Long - Tỉnh Quảng Ninh</h3>
								</a>
								<div>
									<i class="fa fa-star star-color"></i>
									<i class="fa fa-star star-color"></i>
									<i class="fa fa-star star-color"></i>
									<i class="fa fa-star-half-empty star-color"></i>
									<i class="fa fa-star-o star-color"></i>
									(73 reviews)
								</div>
								<p style="margin-top: 10px;padding-right: 50px;font-size: 18px;">	Với 4 ngày cùng bạn bè đi dạo trên bãi biển đầy nắng và gió bạn sẽ cảm thấy thiên nhiên thật tuyệt. Đây là 1 địa điểm lý tưởng cho mùa hè nóng bức bla bla bla.</p>

								<div class="row">
								<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
								<p><b>Số người:</b> 3-7</p>
								<p>	<b>Chi phí:</b> 1.5 Triệu(Mỗi người)</p>
								<p style="margin-bottom: 10px;"><b>	Đăng bởi: </b><a href="index.php?page=page_2">Nguyễn Quang Hiếu</a></p>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
								<div class="row" style="margin-top:15px;">
									 <a href="public/images/page_2/img/01.jpg" data-lightbox="roadtrip" data-title="Bộ ảnh tuyệt đẹp về sapa, Thiên đường nghỉ mát là đây !!!"><img class="post-image-show small-img" data-u="image" src="public/images/page_2/img/01.jpg"  /></a>
									 <a href="public/images/page_2/img/01.jpg" data-lightbox="roadtrip" data-title="Bộ ảnh tuyệt đẹp về sapa, Thiên đường nghỉ mát là đây !!!"><img class="post-image-show small-img" data-u="image" src="public/images/page_2/img/01.jpg"  /></a>						
									 <a href="public/images/page_2/img/01.jpg" data-lightbox="roadtrip" data-title="Bộ ảnh tuyệt đẹp về sapa, Thiên đường nghỉ mát là đây !!!"><img class="post-image-show small-img" data-u="image" src="public/images/page_2/img/01.jpg"  /></a>
									 
									
								</div>
								</div>
								</div>
							</div>
					</div>
				</div>
				<div class="row row-list">
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" style="padding-left: 0px;">
						<a href="index.php?page=page_2">
							<img class="img-list"  src="public/images/phuot2.jpg">
						</a>
					<!-- 	<button class="btn btn-info" style="width: 100%;background-color: #bdd94d;border-radius: 0px;border-color: #bdd94d;color:#004e00;">Xem chi tiết địa điểm</button> -->
						

					</div>
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" style="">
							<div class="detail-list">
									<br>	
								<a href="index.php?page=page_2">
									<h3 style="margin-top: 0px; font-weight: 400px;">Nha Trang - Tỉnh Khánh Hòa</h3>
								</a>
								<div>
									<i class="fa fa-star star-color"></i>
									<i class="fa fa-star star-color"></i>
									<i class="fa fa-star star-color"></i>
									<i class="fa fa-star-half-empty star-color"></i>
									<i class="fa fa-star-o star-color"></i>
									(73 reviews)
								</div>
								<p style="margin-top: 10px;padding-right: 50px;font-size: 18px;">Mệnh danh là "Hòn ngọc viễn Đông", Nha Trang không chỉ sở hữu thiên nhiên trong lành,những hòn đảo ngoài khơi có hệ sinh thái san hô kỳ ảo, mà còn nổi tiếng bởi có nhiều ngôi đền Chăm cổ kính rêu phong.</p>

								<div class="row">
								<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
								<p><b>Số người:</b> 3</p>
								<p>	<b>Chi phí:</b> 4.3 Triệu(Tất cả)</p>
								<p style="margin-bottom: 10px;"><b>	Đăng bởi: </b><a href="index.php?page=page_2">Tô Mạnh Hiệp</a></p>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
								<div class="row" style="margin-top:15px;">
								
									 <a href="public/images/page_2/img/01.jpg" data-lightbox="roadtrip" data-title="Bộ ảnh tuyệt đẹp về sapa, Thiên đường nghỉ mát là đây !!!"><img class="post-image-show small-img" data-u="image" src="public/images/page_2/img/01.jpg"  /></a>
									 
									 
									 <a href="public/images/page_2/img/01.jpg" data-lightbox="roadtrip" data-title="Bộ ảnh tuyệt đẹp về sapa, Thiên đường nghỉ mát là đây !!!"><img class="post-image-show small-img" data-u="image" src="public/images/page_2/img/01.jpg"  /></a>
									
									 
									 <a href="public/images/page_2/img/01.jpg" data-lightbox="roadtrip" data-title="Bộ ảnh tuyệt đẹp về sapa, Thiên đường nghỉ mát là đây !!!"><img class="post-image-show small-img" data-u="image" src="public/images/page_2/img/01.jpg"  /></a>
									 
				
								</div>
								</div>
								</div>
							</div>
					</div>
				</div>
					<div class="row">
						 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
						<ul class="pagination" >
							  <li><a href="#">Prev</a></li>
						    <li class="active"><a href="#">1</a></li>
						    <li><a href="#">2</a></li>
						    <li><a href="#">3</a></li>
						    <li><a href="#">4</a></li>
						    <li><a href="#">5</a></li>
						      <li><a href="#">Next</a></li>
						  </ul>
						 </div>
					</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>