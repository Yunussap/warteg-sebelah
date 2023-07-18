<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>warteg sebelah</title>
  <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
  <style>
    * {
      padding:0;
      margin:0;
      box-sizing:border-box;
    }

    html {
      height:100%;
    }

    body {
      min-height:1005;
    }
.custom-card {
  margin: 1rem;
  padding: 1.5rem;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  display: black;
  flex-direction:column;
}


.footer {
  margin-top:auto;
}
img:hover {
  opacity: 70%;
}

.custom-card img {
  transition: transform 0.3s ease-in-out;
}

.card-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.card-container .custom-card {
  width: calc(33.33% - 2rem);
  margin: 1rem;
}

@media (max-width: 768px) {
  .card-container .custom-card {
    width: calc(50% - 2rem);
  }
}

@media (max-width: 640px) {
  .card-container .custom-card {
    width: calc(100% - 2rem);
  }
}

    
  </style>
</head>

<body class="bg-gray-100 text-gray-900">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('layouts.navbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
          </div>

          @yield('contents')

          <!-- Content Row -->


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


      <!-- Footer -->
      @include('layouts.footer')
      <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

</body>

</html>
