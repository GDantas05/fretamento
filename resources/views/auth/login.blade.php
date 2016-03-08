<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AtomWEB | Sistema de Fretamento</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../css/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <b>Atom</b>WEB
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Faça o login para acessar o sistema</p>
        <form action="{{ url('/auth/login') }}" method="post">
          {!! csrf_field() !!}
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input type="email" class="form-control" placeholder="E-Mail" name="email" value="{{ old('email') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          @if (isset($errors) && $errors->has('email'))
            <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" class="form-control" placeholder="Senha" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          @if (isset($errors) && $errors->has('password'))
            <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
            </div>
            <div class="col-xs-8 col-xs-offset-3">
              <a class="text-center" href="{{ url('/password/reset') }}">Esqueceu sua senha ?</a>
            </div>
            <br>
        </form>
        <!--<a href="register.html" class="text-center">Register a new membership</a>-->
      </div><!-- /.login-box-body -->
    </div>
     <!-- jQuery 2.1.4 -->
    <script src="../js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../js/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
