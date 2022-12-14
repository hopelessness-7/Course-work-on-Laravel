<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Кабинет студента -  @yield('title')</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/admin/plugins/summernote/summernote-bs4.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"
  integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed" id="bodyID">
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ ('/student') }}" class="brand-link">
      <span class="brand-text font-weight-light">Кабинет студента</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a class="d-block" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              {{ __('Выход') }}
          </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            </form>
        </div>
    </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ ('/student/statement') }}" class="nav-link">
              <p>
                <i class="fab fa-500px"></i>
                Ведомость
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('studentSchedules.index') }}" class="nav-link">
              <p>
                <i class="fab fa-500px"></i>
                Расписание
              </p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <button onclick="btn_dark()" class="btn btn-secondary">Dark Mode</button>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="#">XXXXX</a>.</strong>
    Все права защищены.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3
    </div>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<script src="/admin/dist/js/adminlte.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="/admin/dist/js/demo.js"></script>
<script>

  var bodyDark = document.getElementById('bodyID').classList;
  function btn_dark(){
      if (bodyDark.contains('dark-mode') == true){

          bodyDark.remove('dark-mode');
          
      }else{

          bodyDark.add('dark-mode');
      }
  }
</script>
</body>
</html>

