
@php
    function getCategoryName($category_id){
        //->select("name") chỉ select cột có tên là name
        $record = DB::table("categories")->where("id","=",$category_id)->select("name")->first();
        return isset($record->name) ? $record->name : "";
    }
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="{{asset('frontend/css/product.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/update.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
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
</head>

<body>
    <!-- wraper -->
    @include("frontend.header")
        <!-- /banner -->
        <!-- motasanpham -->
        <div class="motasanpham">
            <!-- left -->
            <div class="left">
                <div class="anhto">
                    <img id="mainImage" src="{{ asset('upload/products/'.$record->photo) }}" alt="">
                </div>
                <ul>
                    <li><img src="{{ asset('upload/products/'.$record->photo) }}" alt="" onclick="displayImage(this)"></li>
                    <li><img src="{{ asset('upload/products/'.$record->photo) }}" alt="" onclick="displayImage(this)"></li>
                    <li><img src="{{ asset('upload/products/'.$record->photo) }}" alt="" onclick="displayImage(this)"></li>
                    <li><img src="{{ asset('upload/products/'.$record->photo) }}" alt="" onclick="displayImage(this)"></li>
                    <li><img src="{{ asset('upload/products/'.$record->photo) }}" alt="" onclick="displayImage(this)"></li>
                </ul>
            </div>

            <script>
                function displayImage(clickedImage) {
                    var mainImage = document.getElementById('mainImage');
                    var newImageSource = clickedImage.src;
                    mainImage.src = newImageSource;
                }
            </script>

            <!-- /left -->
            <!-- main -->
            <div class="main">
                <h1>{{$record->name}}</h1>
                <div class="xuatxu">
                    <p><b>Xuất xứ:</b> Vinmart</p>
                </div>
                <div class="gia">
                    <h1>{{ number_format($record->price) }}₫</h1>
                </div>
                <div class="gioithieu">
                    <p>{{$record->description}}</p>
                </div>
                <div class="soluong">
                    <p>Số lượng:</p>
                    <button>
                        <p>1</p>
                    </button>
                </div>
                
                <div class="dathang">
                
                        
                       <a href="{{ url('cart/buy/'.$record->id) }}" class="btn btn-primary" >Cho vào giỏ hàng</a>
                        
                    
                        <a href="{{ url('cart/buy/'.$record->id) }}" class="btn btn-primary" >Gọi điện đặt hàng ngay</a>
                </div>
            </div>
            <!-- /main -->
            <!-- right -->
            <div class="right">
                <ul>
                    <li><img src="{{asset('frontend/images/service_product_1.webp')}}" alt=""><p>Giao hàng miễn phí</p></li>
                    <li><img src="{{asset('frontend/images/service_product_2.webp')}}" alt=""><p>Tích điểm đổi quà</p></li>
                    <li><img src="{{asset('frontend/images/service_product_3.webp')}}" alt=""><p>100% an toàn thực phẩm</p></li>
                    <li>
                        <img src="images/service_product_4.webp" alt="">
                        <p>
                        Tư vấn 8/24
                        </p>
                    </li>
                </ul>
            </div>
            <!-- /right -->
        </div>
        <!-- /motasanpham -->
         <!-- san pham -->
         <!-- thongtinsanpham -->
         <div class="thongtinsanpham">
            <div class="luachon">
                <span style="padding-right: 10px;">Mô tả</span>
                <span>Xuất xứ</span>
            </div>
            <div class="chitiet">
                <p>{{$record->content}}
                    
                     </p>
                
            </div>
         </div>
         <!-- /thong tin san pham -->
        <div class="sanphamto">
            
            <div class="sanpham">
                <!-- sanphambanchay -->
               <div >
                   
                    <div class="mathang">
                        <h1>Sản phẩm cùng loại</h1>
                         @php
                    $products = \App\Http\Controllers\Frontend\HomeController::getProductsInCategory($record->category_id);
                @endphp
                        @foreach($products as $row)
                            <div class="mathangtt" >
                                <a  href="{{ url('products/detail/'.$row->id) }}" >
                                    <img style="width: 210px" src="{{ asset('upload/products/'.$row->photo) }}" title="{{ $row->name }}" alt="{{ $row->name }}">
                                </a>
                                <h5 style="height: 30px; padding-left:7px;margin-bottom:5px ">{{ $row->name }}</h5>
                                <h5 style="color: red;padding-left:7px; margin-top: 20px;">{{ number_format($row->price) }}</h5>
                                <button style="padding-left:7px;">Thêm vào giỏ hàng</button>
                            </div>
                        @endforeach
                    </div>
                    
                </div>
                <!-- /sanphanban chay -->
               
            </div>
        </div>
        <!-- /sanpham -->
      
        
        <!-- footer -->
        <footer>
            <ul>
                <li>
                    <a href=""><img src="frontend/images/logo_footer.png" alt=""></a>
                    <p>Siêu thị MiniMart cung cấp các mặt hàng siêu sạch đem lại sức khỏe cho bạn</p>
                    <div class="diachi">
                        <img src="{{asset('frontend/images/i_footer_1.png')}}" alt=""> 
                        <p>Tầng 6 Ladeco, 266 Đội Cấn, Hà Nội,</p>
                    </div >
                    <div class="sdt">
                        <img src="{{asset('frontend/images/i_footer_2.png')}}" alt="">
                        <a href="">1900 6750</a>
                    </div>
                    <div class="gmail">
                        <img src="{{asset('frontend/images/i_footer_3.png')}}" alt="">
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
