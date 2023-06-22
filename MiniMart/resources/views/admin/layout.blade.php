<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/font-awesome/admin/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Blank -->

    <!-- SB Admin CSS - Include with every page -->
    <link href="{{asset('admin/css/sb-admin.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/css/styles.css')}}">
</head>
<body>
    <div class="admin__page--container">
        <div class="admin__page--header">
            <h1>Mini Mart Admin</h1>
        </div>
        <div class="admin__page--body">
            <div class="admin__page--menu__bar" style="text-decoration: none;">
                <ul>
                        <li>
                            <a href="{{url('/')}}"><i class="fa fa-dashboard fa-fw"></i> Trang chủ</a>
                        </li>                        
                        <li>
                            <a href="{{url('backend/categories')}}"><i class="fa fa-table fa-fw"></i> Danh mục sản phẩm</a>
                        </li>
                        <li>
                            <a href="{{url('backend/products')}}"></i> Danh sách sản phẩm</a>
                        </li>
                        <li>
                            <a href="{{url('backend/news')}}"></i> Tin tuc</a>
                        </li>
                        <li>
                            <a href="{{url('backend/orders')}}"><i class="fa fa-edit fa-fw"></i>Đơn hàng</a>
                        </li>
                        <li>
                            <a href="{{url('backend/users')}}"><i class="fa fa-edit fa-fw"></i>User</a>
                        </li>
                        <li>
                            <a href="{{url('backend/logout')}}"><i class="fa fa-edit fa-fw"></i>Login</a>
                        </li>
                </ul>
            </div>
            <div class="x1">
                @yield("do-du-lieu-tu-view")
            </div>
    </div>
</body>
</html>