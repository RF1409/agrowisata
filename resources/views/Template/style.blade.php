
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agrowisata | {{ $title }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/style/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/style/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/style/dist/css/adminlte.min.css">

    <link rel="stylesheet" href="/css/reg.css">

    <!-- Favicons -->
  	<link href="/style/dist/img/logo.png" rel="icon">

  </head>

  <body class="hold-transition login-page">
    
    @yield('container')


    <!-- jQuery -->
    <script src="/style/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/style/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/style/dist/js/adminlte.min.js"></script>

    <!-- Membatasi hanya Huruf yang boleh di input -->
<script>
  function harusHuruf(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && charCode > 32)
      return false;
    return true;
  }
</script>
 
  </body>
</html>