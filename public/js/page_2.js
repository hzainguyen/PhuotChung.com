jQuery(document).ready(function ($) {

  var jssor_1_SlideshowTransitions = [
    {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
    {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
  ];

  var jssor_1_options = {
    $AutoPlay: true,
    $SlideshowOptions: {
      $Class: $JssorSlideshowRunner$,
      $Transitions: jssor_1_SlideshowTransitions,
      $TransitionsOrder: 1
    },
    $ArrowNavigatorOptions: {
      $Class: $JssorArrowNavigator$
    },
    $ThumbnailNavigatorOptions: {
      $Class: $JssorThumbnailNavigator$,
      $Cols: 10,
      $SpacingX: 8,
      $SpacingY: 8,
      $Align: 360
    }
  };

  var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

  //responsive code begin
  //you can remove responsive code if you don't want the slider scales while window resizing
  function ScaleSlider() {
      var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
      if (refSize) {
          refSize = Math.min(refSize, 800);
          jssor_1_slider.$ScaleWidth(refSize);
      }
      else {
          window.setTimeout(ScaleSlider, 30);
      }
  }
  ScaleSlider();
  $(window).bind("load", ScaleSlider);
  $(window).bind("resize", ScaleSlider);
  $(window).bind("orientationchange", ScaleSlider);
  //responsive code end
  var max_length = 85;
  var score_5 = $("#length_5_star").text();
  var score_4 = $("#length_4_star").text();
  var score_3 = $("#length_3_star").text();
  var score_2 = $("#length_2_star").text();
  var score_1 = $("#length_1_star").text();
  var max = Math.max(score_5,score_4,score_3,score_2,score_1);
  var length_5 = (max_length*score_5/max)+'%';
  var length_4 = (max_length*score_4/max)+'%';
  var length_3 = (max_length*score_3/max)+'%';
  var length_2 = (max_length*score_2/max)+'%';
  var length_1 = (max_length*score_1/max)+'%';
  $("#length_5_star").css({'background':'rgb(25, 113, 5)','width':length_5,'opacity':'0.8'});
  $("#length_4_star").css({'background':'rgb(25, 113, 5)','width':length_4,'opacity':'0.8'});
  $("#length_3_star").css({'background':'rgb(25, 113, 5)','width':length_3,'opacity':'0.8'});
  $("#length_2_star").css({'background':'rgb(25, 113, 5)','width':length_2,'opacity':'0.8'});
  $("#length_1_star").css({'background':'rgb(25, 113, 5)','width':length_1,'opacity':'0.8'});

  $("#show-all-itinerary").click(function(){
    if($(this).text() == 'Hiện Tất Cả'){
      $(this).text('Ẩn Tất Cả');
      $(".itinerary-on-day").children('p').slideDown();
      $(".itinerary-on-day").children('img').attr('src','public/images/page_2/icon/circle-minus.png');
    }
    else {
      $(this).text('Hiện Tất Cả');
      $(".itinerary-on-day").children('p').slideUp();
      $(".itinerary-on-day").children('img').attr('src','public/images/page_2/icon/circle-plus.png');
    }
  });
  $(".itinerary-on-day").children('p').hide();
  $(".itinerary-on-day").children('p').click(function(){
    return false;
  });
  $(".itinerary-on-day").click(function() {
    var img = $(this).children('img:first');
    if(img.attr('src') == 'public/images/page_2/icon/circle-plus.png'){
      img.attr('src','public/images/page_2/icon/circle-minus.png');
      $(this).children('p:first').slideDown();
    }
    else {
      img.attr('src','public/images/page_2/icon/circle-plus.png');
      $(this).children('p:first').slideUp();
    }
  });

  $("#included_content").children('span:first').hide();
  $("#Itinerary_content").children('span:first').hide();
  $("#item_content").children('span:first').hide();
  $("#overview_content").children('h2:first').children('img:first').attr('src','public/images/page_2/icon/circle-minus.png');
  $("#Itinerary_content").children('h2:first').children('img:first').attr('src','public/images/page_2/icon/circle-plus.png');
  $("#included_content").children('h2:first').children('img:first').attr('src','public/images/page_2/icon/circle-plus.png');
  $("#item_content").children('h2:first').children('img:first').attr('src','public/images/page_2/icon/circle-plus.png');
  $("#comment_content").children('h2:first').children('img:first').attr('src','public/images/page_2/icon/circle-minus.png');
  var sidebar = $(".sidebar");
  $("h2.title").click(function(){
    var img = $(this).children('img:first');
    if(img.attr('src') ==  'public/images/page_2/icon/circle-plus.png'){
        img.attr('src','public/images/page_2/icon/circle-minus.png');
        $(this).parent().children('span:first').slideDown('fast');
    }
    else {
      img.attr('src','public/images/page_2/icon/circle-plus.png');
        $(this).parent().children('span:first').slideUp('fast');  
    }
  });

  var height_menu = $("#menu_post_detail").offset().top;
  var margin_left_menu = $("#menu_post_detail").offset().left;

  $("#overview").click(function(){
    var overview_content = $("#overview_content");
    overview_content.children("h2:first").children("img:first").attr('src','public/images/page_2/icon/circle-minus.png');
    overview_content.children('span:first').slideDown('fast');
    var height_overview_content = overview_content.offset().top;
    $("html, body").animate({ scrollTop: height_overview_content - 150}, 300);
  });
  $("#Itinerary").click(function(){
    var Itinerary_content = $("#Itinerary_content");
    Itinerary_content.children("h2:first").children("img:first").attr('src','public/images/page_2/icon/circle-minus.png');
    Itinerary_content.children('span:first').slideDown('fast');
    var height_Itinerary_content = Itinerary_content.offset().top;
    $("html, body").animate({ scrollTop: height_Itinerary_content-150 }, 300);
  });
  $("#included").click(function(){
    var included_content = $("#included_content");
    included_content.children("h2:first").children("img:first").attr('src','public/images/page_2/icon/circle-minus.png');
    included_content.children('span:first').slideDown('fast');
    var height_included_content = included_content.offset().top;
    $("html, body").animate({ scrollTop: height_included_content-150 }, 300);
  });
  $("#item").click(function(){
    var item_content = $("#item_content");
    item_content.children("h2:first").children("img:first").attr('src','public/images/page_2/icon/circle-minus.png');
    item_content.children('span:first').slideDown('fast');
    var height_item_content = item_content.offset().top;
    $("html, body").animate({ scrollTop: height_item_content-150 }, 300);
  });
  $("#comment").click(function(){
     var comment_content = $("#comment_content");
    var height_comment_content = comment_content.offset().top;
    $("html, body").animate({ scrollTop: height_comment_content-150 }, 300);
  });
  
  $(window).scroll(function(event) {
    var height_overview_content = $("#overview_content").offset().top;
    var height_Itinerary_content = $("#Itinerary_content").offset().top;
    var height_included_content = $("#included_content").offset().top;
    var height_item_content = $("#item_content").offset().top;
    var height_comment_content = $("#comment_content").offset().top;

    var scroll_height = $(document).scrollTop();

    if(scroll_height > height_menu){
      if($("#menu_post_detail_demo").length == 0){
        $("#menu_post_detail").before('<div id="menu_post_detail_demo" style="height:50px"></div>');
      }
      $("#menu_post_detail").css({'position':'fixed','top':'0','left':'0','z-index':'100','width':'100%','border':'none'});
      $("#child_menu_post_detail").css('margin-left',$('.main').offset().left+20);
      var fixed = true;
    }
    else {
      if($("#menu_post_detail_demo").length > 0){
        $("#menu_post_detail_demo").remove();
      }
      $("#menu_post_detail").css({'position':'initial','border-bottom':'6px solid #a1c900'});
      $("#child_menu_post_detail").css({'margin-left':'0em'});
      var fixed = false;
    }
    var scroll_read = scroll_height + 200;
    if(scroll_read > 500 && scroll_read < height_Itinerary_content){
      $("#overview").css({"border-bottom":'6px solid #a1c900','color':'#a1c900'});
    }
    else {
      $("#overview").css({"border-bottom":'0','color':'white'});
    }
    if(scroll_read > height_Itinerary_content && scroll_read < height_included_content){
      $("#Itinerary").css({"border-bottom":'6px solid #a1c900','color':'#a1c900'});
    }
    else {
      $("#Itinerary").css({"border-bottom":'0','color':'white'});
    }
    if(scroll_read > height_included_content && scroll_read < height_item_content){
      $("#included").css({"border-bottom":'6px solid #a1c900','color':'#a1c900'});
    }
    else {
      $("#included").css({"border-bottom":'0','color':'white'});
    }
    if(scroll_read > height_item_content && scroll_read < height_comment_content){
      $("#item").css({"border-bottom":'6px solid #a1c900','color':'#a1c900'});
    }
    else {
      $("#item").css({"border-bottom":'0','color':'white'});
    }
    if(scroll_read > height_comment_content && scroll_read < height_comment_content + 500){
      $("#comment").css({"border-bottom":'6px solid #a1c900','color':'#a1c900'});
    }
    else {
      $("#comment").css({"border-bottom":'0','color':'white'});
    }
  });
  $('.popup-gmaps').magnificPopup({
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });

  $(".hovereffect").mouseover(function(){
      $(this).children('a').children('.place-name:first').css('color','#a1c900');
  });
  $(".hovereffect").mouseout(function(){
      $(this).children('a').children('.place-name:first').css('color','white');
  });

  var hover_star = ['#rate_1_star','#rate_2_star','#rate_3_star','#rate_4_star','#rate_5_star'];
  var detail_star = ['Dở tệ','Không thú vị','Bình thường','Khá tuyệt vời','Tuyệt vời'];
  var check_on_star = false;
  $.each(hover_star, function(index, val) {
     $(val).mouseover(function(event) {
        for(var i = 0; i <= index; i++){
          if(check_on_star == false){
            $(hover_star[i]).attr('class','rate-star-big');
            $('#detail_star').text(detail_star[i]);
          }
        }
     });
     $(val).mouseout(function(event) {
        for(var i = 0; i <= index; i++){
          if(check_on_star == false){
            $(hover_star[i]).attr('class','rate-star-big-none');
            $('#detail_star').text('');
          }
        }
     });
     $(val).click(function(){
        check_on_star = true;
        for(var i = 0; i <= index; i++){
          $(hover_star[i]).attr('class','rate-star-big');
          $('#detail_star').text(detail_star[i]);
        }
        for(var i = index+1; i <= 4; i++){
          $(hover_star[i]).attr('class','rate-star-big-none');
        }
     });
  });
  $('#show_comment').next('div').hide();
  var show_send_comment = $('#show_comment');
  show_send_comment.click(function(event) {
    $(this).parent().next().fadeToggle();
  });
  //   var height_sidebar = $(".sidebar").outerHeight();
  //   var height_footer = $(".footer").outerHeight();
  //   var height_header = $("header").outerHeight();
  //   var height_sidebar_to_header_begin  = $(".sidebar").offset().top;
  //   var left_sidebar  = $(".sidebar").offset().left;
  //   var right_sidebar  = $(".sidebar").offset().right;
  //   var width_sidebar  = $(".sidebar").outerWidth();
  //   var margin_header =  $('.container').offset().top;
  
  //   var newScrollTop,
  //   oldScrollTop = $(window).scrollTop(),
  //   preventScroll = false;
  // $(window).resize(function(){
  //   $(".sidebar").css({'position':'initial'});
  //   location.reload();
  // });
  // $(window).scroll(function() {
  //     var document_height = $(document).height();
  //     var height_main = $('.main').outerHeight();
  //     var height_window = $(window).outerHeight();
  //     var width_window = $(window).width();
  //     var height_footer_to_header = $('.container').outerHeight() + $('.container').offset().top;
  //     var margin_footer = $(document).height() - height_footer + 30;
  //     if(width_window > 992 && height_main > height_sidebar){
  //       if (!preventScroll) {
  //         preventScroll = true;
  //         newScrollTop = $(this).scrollTop();
  //         var scroll_height = $(document).scrollTop();
  //         var height_sidebar_to_header  = $(".sidebar").offset().top;
  //         var zindex = $(".sidebar").css('z-index');
  //         if (newScrollTop > oldScrollTop) {
  //             if(zindex == '3' || zindex == '4'){
  //               sidebar.css({'position':'absolute','left':'auto','top':height_sidebar_to_header-110,'bottom':'30px','right':'0px','width':width_sidebar,'z-index':'3'});
  //             }
  //             if(scroll_height + height_window > height_sidebar + height_sidebar_to_header - 20){
  //               sidebar.css({'position':'fixed','bottom':'0','top':'auto','left':left_sidebar,'width':width_sidebar,'z-index':'1'});
  //             }
  //             if(scroll_height + height_window + 80 > height_footer_to_header){
  //               sidebar.css({'position':'absolute','left':'auto','top':'auto','bottom':'30px','right':'0px','width':width_sidebar,'z-index':'2'});
  //             }
  //         }
  //         else {
  //           if(zindex == '1' || zindex == '2'){
  //             sidebar.css({'position':'absolute','left':'auto','top':height_sidebar_to_header-110,'right':'0px','width':width_sidebar,'z-index':'2'});
  //           }
  //           else {
  //             if(document_height - height_footer - height_sidebar < scroll_height + 85){
  //               sidebar.css({'position':'absolute','left':'auto','top':'auto','bottom':'30px','right':'0px','width':width_sidebar,'z-index':'3'});
  //             }
  //             else {
  //               //alert(zindex);
  //               if(scroll_height > height_header + 100 && zindex != '3' && zindex != '4'){
  //                 sidebar.css({'position':'fixed','top':'70px','bottom':'auto','left':left_sidebar,'width':width_sidebar,'z-index':'4'});
  //               }
  //               else {
  //                 sidebar.css({'position':'initial','z-index':'4'});
  //               }
  //             }  
  //           }
  //           if(scroll_height < height_sidebar_to_header && scroll_height > height_sidebar_to_header_begin){
  //             sidebar.css({'position':'fixed','top':'70px','bottom':'auto','left':left_sidebar,'width':width_sidebar,'z-index':'4'});
  //           }
  //       }
  //       oldScrollTop = newScrollTop;
  //       setTimeout(function(){ preventScroll = false; }, 0);
  //     }
  //   }
  // });
});
