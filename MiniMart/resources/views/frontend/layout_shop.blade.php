<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <link rel="shortcut icon" href="{{ asset('frontend/100/047/633/themes/517833/assets/favicon221b.png?1481775169361') }}" type="image/x-icon" />  
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=vietnamese" rel="stylesheet"> -->
    <link href='{{ asset("frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361") }}' rel='stylesheet' type='text/css' />
    <link href='{{ asset("frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361") }}' rel='stylesheet' type='text/css' />
    <link href='{{ asset("frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361") }}' rel='stylesheet' type='text/css' />
    <link href='{{ asset("frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361") }}' rel='stylesheet' type='text/css' />
    <link href='{{ asset("frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361") }}' rel='stylesheet' type='text/css' />
    <script src='{{ asset("frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361") }}' type='text/javascript'></script>
    <script src='{{ asset("frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361") }}' type='text/javascript'></script>
    <script src='{{ asset("frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript") }}'></script>
    <link href='{{ asset("frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361") }}' rel='stylesheet' type='text/css' />
    <script src='{{ asset("frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361") }}' type='text/javascript'></script>
    <script src='{{ asset("frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361") }}' type='text/javascript'></script>
    <script src='{{ asset("frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript") }}'></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="{{asset('frontend/css/update.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/shop.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
</head>

<body>
    <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/648dece0cc26a871b0232a0f/1h356ak5b';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
    <!-- wraper -->
    <div class="wraper">
        <!-- header -->
        @include("frontend.header")
        <!-- /banner -->
        <!-- san pham -->
        @yield("do-du-lieu-vao-layout")
        <!-- /sanpham -->
      
        
        <!-- footer -->
        <footer>
            <ul>
                <li>
                    <a href=""><img src="images/logo_footer.png" alt=""></a>
                    <p>Siêu thị MiniMart cung cấp các mặt hàng siêu sạch đem lại sức khỏe cho bạn</p>
                    <div class="diachi">
                        <img src="images/i_footer_1.png" alt=""> 
                        <p>Tầng 6 Ladeco, 266 Đội Cấn, Hà Nội,</p>
                    </div >
                    <div class="sdt">
                        <img src="images/i_footer_2.png" alt="">
                        <a href="">1900 6750</a>
                    </div>
                    <div class="gmail">
                        <img src="images/i_footer_3.png" alt="">
                        <a href="">support@sapo.vn</a>
                    </div>
                </li>
                <li class="x2">
                    <h2>Tài khoản</h2>
                    <a href=""><p>Trang chủ</p></a>
                    <a href=""><p>Sản phẩm</p></a>
                    <a href=""><p>Giới thiệu</p></a>
                    <a href=""><p>Tin tức</p></a>
                    <a href=""><p>Liên hệ</p></a>
                </li>
                <li class="x2">
                    <h2>Hỗ trợ khách hàng</h2>
                    <a href=""><p>Trang chủ</p></a>
                    <a href=""><p>Giới thiệu</p></a>
                    <a href=""><p>Sản phẩm</p></a>
                    <a href=""><p>Tin tức</p></a>
                    <a href=""><p>liên hệ</p></a>
                </li>
                <li class="x2">
                    <h2>Gửi Email</h2>
                    <p>Gửi email nhận khuyến mãi</p>
                    <button>
                        <p>Email của bạn</p>
                        <div>
                            <a href=""><p>Gửi</p></a>
                        </div>
                    </button>
                    <div class="logo">
                        <img src="images/logo-mxh.jpg" alt="">
                    </div>
                </li>
            </ul>
            <ul class="banquyen">
                <li class="x3"><p>Bản quyền thuộc về Cafein Team</p></li>
                <li class="x3"><p> Cung cấp bởi Sapo</p></li>
            </ul>
        </footer>
        <!-- footer -->
    </div>
    <!-- /wraper -->
</body>

</html>