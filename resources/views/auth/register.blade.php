<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
    <title>Sign Up - Printline</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="frontpage/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- //web font -->
</head>

<body>
    <!-- main -->
    <div class="main-w3layouts wrapper">
        <h1>Sign Up</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form class="card" action="{{ route('register') }}" method="post" novalidate>
                    @csrf
                    <div class="card-body p-6">

                        <div class="form-group">
                            <input type="text" class="text email{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                placeholder="Full Name" name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="email" class="text{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                placeholder="Enter email" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" class="text{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                placeholder="Password" name="password" required>
                            @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input class="text w3lpass" type="password" name="password_confirmation" placeholder="Confirm Password"
                                required="">
                        </div>
                        <div class="wthree-text">
                            <label class="anim">
                                <input type="radio" name="type" id="seller" value="seller" name="role" required=""><label for="seller">Seller</label>
                                <input type="radio" name="type" id="customer" value="member" name="role" required=""><label for="customer">Customer</label>
                                <br>
                                <input type="checkbox" class="checkbox" required="">I Agree To The Terms & Conditions
                            </label>
                            <div class="clear"> </div>
                        </div>
                        <div class="form-footer">
                            <input type="submit" value="SIGNUP">
                        </div>
                    </div>
                </form>
                <p>Have an Account? <a href="{{ route('login') }}"> Login Now!</a></p>
            </div>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <p>© 2018 PrintLine</a></p>
        </div>
        <!-- //copyright -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- //main -->
</body>

</html>