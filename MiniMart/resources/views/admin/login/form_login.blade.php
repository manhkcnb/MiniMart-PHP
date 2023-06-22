
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTVN</title>
   
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/login.css')}}">
</head>

<body>
    

        <!--Form login  -->
        <div class="login">
        	
            <div class="form--login__title">
                <h1>Đăng nhập</h1>
                <p>Nếu bạn có tài khoản, xin vui lòng đăng nhập</p>
            </div>
            <div class="form--container">
            	@if(Request::get("notify")=="invalid")
				<div class="alert alert-danger"> Sai email or mk</div>
				@endif
               <form method="post" action="{{url('backend/login-post')}}">
               	@csrf
               	 <div class="e-mail">
                    <h3 class="text">Email:</h3>
                    <input class="input" name="email" type="text" placeholder=" Xin vui lòng nhập e-mail">
                </div>
                <div class="password">
                    <h3 class="text">Mật khẩu:</h3>
                    <input class="input" name="password" type="password" placeholder=" Xin vui lòng nhập mật khẩu">
                </div>
                <div class="loginSubmitBtn">
                    <input style=" margin-top:10px;" type="submit" value="Đăng nhập">
                </div>
               </form>
            </div>
            <div class="form--footer">
                <div class="link--register">Bạn chưa có tài khoản</div>
                <a href="./dangky.html">Đăng kí tại đây</a>
            </div>
        </div>
        <!-- footer -->
        
</body>

</html>