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
        <p class="login-box-msg">Faça o seu registro para acessar o sistema</p>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
          {!! csrf_field() !!}

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nome">
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
          </div>
          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail">
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <input type="password" class="form-control" name="password" placeholder="Senha">
          @if ($errors->has('password'))
              <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
          </div>
          <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          <input type="password" class="form-control" name="password_confirmation" placeholder="Confirme a senha">
          @if ($errors->has('password_confirmation'))
              <span class="help-block">
                  <strong>{{ $errors->first('password_confirmation') }}</strong>
              </span>
          @endif
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-flat">
              <i class="fa fa-btn fa-user"></i>Registrar
            </button>
          </div>
        </form>
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
