@extends("frontend.layout_home")
@section("do-du-lieu-vao-layout")


<div class="sanphamto">
            <div class="sanpham">
                <div class="chivoi">
                    <ul>
                        <li><a href=""> <img src="{{asset('frontend/images/banner_1.jpg')}}" alt=""></a></li>
                        <li><a href=""><img src="{{asset('frontend/images/banner_2.jpg')}}" alt=""></a></li>
                        <li><a href=""><img src="{{asset('frontend/images/banner_3.jpg')}}" alt=""></a></li>
                    </ul>
                </div>
                <!-- sanphambanchay -->
                <div class="sanphambanchay">
                    <a href="">
                        <h1>Sản phẩm bán chạy</h1>
                    </a>
                    <div class="mathang">
                        @php
                            //gọi hàm trong HomeController để lấy kết quả. Do hàm hotProducts là hàm static nên có thể truy cập từ tên class mà không cần khởi tạo đối tượng
                            $hotProducts = \App\Http\Controllers\Frontend\HomeController::hotProducts();
                        @endphp
                       
                       
                            @foreach($hotProducts as $row)
                            <div class="mathangtt" >
                                <a  href="{{ url('products/detail/'.$row->id) }}"title="{{ $row->name }}" alt="{{ $row->name }}" >
                                    <img style="width: 210px" src="{{ asset('upload/products/'.$row->photo) }}" alt="">
                                </a>
                                <h3 style="height: 30px; padding-left:7px; ">{{ $row->name }}</h3>
                                <h3 style="color: red;padding-left:7px;">{{ number_format($row->price) }}</h3>
                                <a href="{{ url('cart/buy/'.$row->id) }}"><button style="padding-left:7px;">Thêm vào giỏ hàng</button> </a>
                            </div>
                            @endforeach
                            
                        
                    </div>
                       
                        
                </div>
                <!-- /sanphanban chay -->
                

                <div >
                    @php
                    $categories = \App\Http\Controllers\Frontend\HomeController::getCategories();
                    @endphp
                    <!--Đồ khô  -->
                    @foreach($categories as $rowCategory)
                     <a href="" style="text-decoration:none;" >
                            <h1 >{{$rowCategory->name}}</h1>
                     </a>
                    
                    <div class="mathang">
                         @php
                    $products = \App\Http\Controllers\Frontend\HomeController::getProductsInCategory($rowCategory->id);
                @endphp
                        @foreach($products as $row)
                            <div class="mathangtt" >
                                <a  href="{{ url('products/detail/'.$row->id) }}" >
                                    <img style="width: 210px" src="{{ asset('upload/products/'.$row->photo) }}" title="{{ $row->name }}" alt="{{ $row->name }}">
                                </a>
                                <h3 style="height: 30px; padding-left:7px; ">{{ $row->name }}</h3>
                                <h3 style="color: red;padding-left:7px;">{{ number_format($row->price) }}</h3>
                                <a href="{{ url('cart/buy/'.$row->id) }}"><button style="padding-left:7px;">Thêm vào giỏ hàng</button> </a>
                            </div>
                        @endforeach
                    </div>
                    @endforeach
                </div>
              
                <!-- /đồ khô -->
               
            </div>
            <style>
                .limited-text {
                  white-space: nowrap;
                  overflow: hidden;
                  text-overflow: ellipsis;
                }
              </style>
              <script>
                window.addEventListener('DOMContentLoaded', function() {
                  var paragraphs = document.getElementsByTagName('p');
                  for (var i = 0; i < paragraphs.length; i++) {
                    var paragraph = paragraphs[i];
                    var text = paragraph.textContent;
                    if (text.length > 20) {
                      var truncatedText = text.substr(0, 20) + '...';
                      paragraph.textContent = truncatedText;
                      paragraph.classList.add('limited-text');
                    }
                  }
                });
              </script>
    </div>
        <!-- /sanpham -->
        <!-- Xem theo danh muc -->
        <div class="danhmuc">
            <div class="danhmucnho">
                <a href=""><h1>Xem theo danh muc</h1></a>
                <a href="" class="xemthem"><p>Xem thêm</p></a>
                <ul>
                    <li><a href=""><p>Rau củ quả</p><img src="{{asset('frontend/images/col-1.png')}}" alt=""></a></li>
                    <li><a href=""><p>Thực phẩm đồ khô</p><img src="{{asset('frontend/images/col-2.png')}}" alt=""></a></li>
                    <li><a href=""><p>Thực Phảm tươi sống</p><img src="{{asset('frontend/images/col-3-ee6358a8-1eb4-4a1f-a9bf-efcc063434a9.png')}}" alt=""></a></li>
                    <li><a href=""><p>Thực phẩm chế biến</p><img src="{{asset('frontend/images/col-3.png')}}" alt=""></a></li>
                </ul>
            </div>
            
        </div>
        <!-- /xem theo danh muc -->
        <!-- meo hay su dung -->
        <div class="meohaysudung">
            <h1>Mẹo hay sử dụng</h1>
            <div class="body">
                @php
                    $news = \App\Http\Controllers\Frontend\HomeController::hotNews();
                @endphp
                @foreach($news as $row)
                <div class="item" >
                    <div class="article"> <a href="{{ url('news/detail/'.$row->id) }}" class="image"> <img src="{{ asset('upload/news/'.$row->photo) }}" alt="{{ $row->name }}" title="{{ $row->name }}" class="img-responsive"> </a>
                      <div class="info">
                        <h3><a class="text3line" href="{{ url('news/detail/'.$row->id) }}" style="font-weight: bold;">{{ $row->name }}</a></h3>
                        <p class="desc">
                            <!-- liên quan đến ckeditor thì phải dùng tag sau -->
                            {!! $row->description !!}
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- /news item --> 
                @endforeach         

                
            </div>
        </div>
        <!-- /meo hay su dung -->
        

@endsection