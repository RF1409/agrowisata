<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Agrowisata | Dashboard</title>

  
  <!-- Bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/style/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/style/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/style/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/style/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  {{-- Trix editor --}}
  <link rel="stylesheet" type="text/css" href="/css/trix.css">
  <script type="text/javascript" src="/js/trix.js"></script>
 
  {{-- Untuk menghapus tam,bah data pada tambah text --}}
  <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }
  </style>
  <!-- Theme style -->
  <link rel="stylesheet" href="/style/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/style/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

  <!-- Favicons -->
  <link href="/style/dist/img/logo.png" rel="icon">

  
 
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/img/logo.png" alt="logo" height="250" width="250">
  </div>

  <!-- Navbar -->
  @include('dashboard.layout.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('dashboard.layout.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    
    @yield('container')


  </div>
  <!-- /.content-wrapper -->

 
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Agrowisata Bambu Sungai
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a href="#">Rafi Al-Faathir K.</a></strong> 
  </footer>



</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/style/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/style/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/style/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/style/dist/js/adminlte.js"></script>
<!-- DataTables  & Plugins -->
<script src="/style/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/style/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/style/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/style/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/style/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/style/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/style/plugins/jszip/jszip.min.js"></script>
<script src="/style/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/style/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/style/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/style/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/style/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- ChartJS -->
<script src="/style/plugins/chart.js/Chart.min.js"></script>


<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      // "buttons": ["copy", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

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
