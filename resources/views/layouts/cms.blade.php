<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('navbar.nav')
  <!-- Main Sidebar Container -->
  

  @include('includes.sidebar')


  <!-- Content Wrapper. Contains page content -->
      @yield('content')     

  <!-- /.content-wrapper -->
  <!-- 
    <footer class="main-footer">
    Design & Developed by MNFT.Banu  
    <div class="float-right d-none d-sm-inline-block">
    <b>StudentID 15903001</b> 
    </div>
  </footer>  
 -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('includes/toast')

@include('includes/script')

<!--- try for bootstrap objects in body for -->


</body>

  <footer class="main-footer">
    Design & Developed by MNFT.Banu  
    <div class="float-right d-none d-sm-inline-block">
      <b>StudentID 15903001</b> 
    </div>
    
  </footer>   