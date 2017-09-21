<footer class="footer clearfix">
    <div class="top-footer">
        <p>CỘNG ĐỒNG PHƯỢT VIỆT NAM</p>
    </div>
    <div class="bottom-footer clearfix">
        <div class="col-xs-12 col-sm-6">
            <!-- <h1>LOGO</h1> -->
            <a href="?page=home"><img src="public/images/logo_4.png" alt="" class="full-img logo" style="width: 160px; height:75px; "></a>
            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis
                sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
            <p>@ 2016 G5Team | UI Design</p>
        </div>
        <div class="col-xs-12 col-sm-3 col-sm-offset-3">
            <h3>follow us</h3>
            <div>
                <span class="icon-follow"><i class="fa fa-facebook"></i></span>
                <span class="icon-follow"><i class="fa fa-twitter"></i></span>
                <span class="icon-follow"><i class="fa fa-instagram"></i></span>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="public/lib/jquery-3.1.0.min.js"></script>
<script src="public/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="public/lib/progressbar/dist/progressbar.js"></script>
<script src="public/js/main.js"></script>
<script src="public/lib/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
<script src="public/lib/lightbox.js" type="text/javascript"></script>
<script src="public/lib/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="public/js/page_2.js" type="text/javascript"></script>
<script src="public/js/page_1.js" type="text/javascript"></script>

<script>
    $(document).ready(function () {
        var flag = '<?php
            if ((isset($_GET['page']) && $_GET['page'] == 'home') || !isset($_GET['page'])) echo true;
            else echo false;
            ?>';
        console.log(flag);
        if (flag) {
            $('.header-fixed').addClass('change-color-home');
        }
    });
</script>
</body>
</html>