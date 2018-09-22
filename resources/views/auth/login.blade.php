<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Siperayu | Log in</title>
<link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Simple Login Form,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>

<!--/start-login-one-->
<h1>Sistem Informasi Surat Menyurat | Log in</h1>
    <div class="login"> 
      <div class="ribbon-wrapper h2 ribbon-red">
        <div class="ribbon-front">
          <h2>User Login</h2>
        </div>
        <div class="ribbon-edge-topleft2"></div>
        <div class="ribbon-edge-bottomleft"></div>
      </div>

      <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
        <ul>
          <li>
            <input type="email" class="text " value="Alamat Email" name="email" onfocus="this.value = '';"  onblur="if (this.value == '{{ $errors->has('email') ? ' is-invalid' : '' }}') {this.value = '';}" ><a href="#" class=" icon user" required autofocus ></a>

              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </li>
           <li>
            <input type="password" value="Kata Sandi" name="password" onfocus="this.value = '';" onblur="if (this.value == '{{ $errors->has('password') ? ' is-invalid' : '' }}') {this.value = 'Kata Sandi';}"><a href="#" class=" icon lock" required></a>

             @if ($errors->has('password'))
              <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
             @endif
          </li>
        </ul>

    
      <div class="submit">
        <input type="submit" onclick="myFunction()" value="masuk" >
      </div>
    </div>
  </form>
<!--start-copyright-->
      <div class="copy-right">
        <p>&copy; 2018 | <a href="http://jambi.bps.go.id">BPS Provinsi Jambi</a></p>
    </div>
  <!--//end-copyright-->
</body>
</html>