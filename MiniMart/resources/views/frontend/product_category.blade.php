@extends("frontend.layout_shop")
@section("do-du-lieu-vao-layout")
@php
    function getCategoryName($category_id){
        //->select("name") chỉ select cột có tên là name
        $record = DB::table("categories")->where("id","=",$category_id)->select("name")->first();
        return isset($record->name) ? $record->name : "";
    }
@endphp
<div class="sanphamto">
            <div class="danhmuc">
                <ul>
                    <li>
                        <ul>
                            <li><h2>Danh mục sản phẩm</h2></li>
                            <li><a href=""><p>Trang chủ</p></a></li>
                            <li><a href=""><p>Giới thiệu</p></a></li>
                            <li><a href=""><p>Sản phẩm</p></a></li>
                            <li><a href=""><p>Tin tức</p></a></li>
                            <li><a href=""><p>Liên hệ</p></a></li>
                        </ul>
                    </li>
                    <li>
                        <ul id="sort-options">
                          <li><h2>Sắp xếp</h2></li>
                          <li><a href="{{ url('products/category/'.$category_id.'?order=1') }}">Dưới 50.000</a></li>
                          <li><a href="{{ url('products/category/'.$category_id.'?order=2') }}">Từ 50.000 đến 100.000</a></li>
                          <li><a href="{{ url('products/category/'.$category_id.'?order=3') }}">Từ 100.000 đến 500.000</a></li>
                          <li><a href="{{ url('products/category/'.$category_id.'?order=4') }}">Trên 500.000</a></li>
                        </ul>

                    </li>
                   
                </ul>
            </div>
            <div class="sanpham">
                <!-- sanphambanchay -->
                <div class="sanphambanchay">
                    <a href="">
                        <h1> {{ getCategoryName($category_id) }}</h1>
                    </a>
                    <div class="mathang">
                         @foreach($data as $row)
                        <div class="mathangtt" >
                                <a  href="{{ url('products/detail/'.$row->id) }}"title="{{ $row->name }}" alt="{{ $row->name }}" >
                                    <img style="width: 210px" src="{{ asset('upload/products/'.$row->photo) }}" alt="">
                                </a>
                                <h3 style="height: 30px; padding-left:7px; ">{{ $row->name }}</h3>
                                <h3 style="color: red;padding-left:7px;">{{ number_format($row->price) }}</h3>
                                <button style="padding-left:7px;">Thêm vào giỏ hàng</button>
                            </div>
                         @endforeach
                        
                            
                    </div>
                </div>
                <!-- /sanphanban chay -->
               
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
  $('#sort-options li').click(function() {
    var value = $(this).data('value');
    if (value !== "") {
      var url = "{{ url('products/category/'.$category_id.'?order=') }}" + value;
      window.location.href = url;
    }
  });
});
</script>
@endsection