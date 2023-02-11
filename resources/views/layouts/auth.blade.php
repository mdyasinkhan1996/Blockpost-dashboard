<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Admin & Dashboard</title>

    <!-- theme meta -->
    <meta name="theme-name" content="mono" />

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="{{asset('assets/auth/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('assets/auth/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />

    <link href="{{asset('assets/auth/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />


    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <link href="{{asset('assets/auth/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />

    <!-- MONO CSS -->
    <link id="main-css-href" rel="stylesheet" href="{{asset('assets/auth/css/style.css')}}" />
    <link id="main-css-href" rel="stylesheet" href="{{asset('assets/auth/css/customstyle.css')}}" />

    <!-- FAVICON -->
    <link href="{{asset('assets/auth/images/favicon.png')}}" rel="shortcut icon" />

    {{-- fontawsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- select2 cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    @yield('additionalCSS')
    <script src="{{asset('assets/auth/plugins/nprogress/nprogress.js')}}"></script>
  </head>

  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    {{-- <div id="toaster"></div> --}}

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">

        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
          <div id="sidebar" class="sidebar">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="{{url('/')}}">
                <img src="{{asset('assets/auth/images/favicon.png')}}" alt="myk">
                {{-- <span class="brand-name">MYK</span> --}}
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-left" data-simplebar style="height: 100%;">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                    <li class="active">
                        <a class="sidenav-item-link" href="{{route('dashboard')}}">
                            <i class="fa-solid fa-bahai"></i>
                            <span class="nav-text">Business Dashboard</span>
                        </a>
                    </li>
                    <li class="section-title">
                        Apps
                    </li>
                    <li  class="has-sub" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                            aria-expanded="false" aria-controls="ui-elements">
                            <i class="fa-regular fa-folder-closed"></i>
                            <span class="nav-text">Manage Posts</span> <i class="fa-solid fa-angle-down"></i>
                        </a>
                        <ul  class="collapse"  id="ui-elements" data-parent="#sidebar-menu">
                            <div class="sub-menu">
                                    <li >
                                    <a class="sidenav-item-link" href="{{route('posts.index')}}">
                                        <span class="nav-text">Posts</span>
                                    </a>
                                    </li>

                                    <li >
                                    <a class="sidenav-item-link" href="{{route('posts.create')}}">
                                        <span class="nav-text">Create</span>

                                    </a>
                                    </li>
                            </div>
                        </ul>
                    </li>
                  <li>
                    <a class="sidenav-item-link" href="{{route('categories.index')}}">
                      <i class="fa-solid fa-border-all"></i>
                      <span class="nav-text">Categories</span>
                    </a>
                  </li>
                  <li>
                    <a class="sidenav-item-link" href="{{route('tags.index')}}">
                      <i class="fa-solid fa-square-rss"></i>
                      <span class="nav-text">Tags</span>
                    </a>
                  </li>
                  <li>
                    <a class="sidenav-item-link" href="{{route('location.index')}}">
                      <i class="fa-solid fa-location-dot"></i>
                      <span class="nav-text">Location</span>
                    </a>
                  </li>
                  {{-- <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Charts</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="charts"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                            <li >
                              <a class="sidenav-item-link" href="apex-charts.html">
                                <span class="nav-text">Apex Charts</span>
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li> --}}
                  <li class="section-title">
                    Settings
                  </li>
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users"
                      aria-expanded="false" aria-controls="users">
                      <i class="fa-solid fa-user-gear"></i>
                      <span class="nav-text">User</span> <i class="fa-solid fa-angle-down"></i>
                    </a>
                    <ul  class="collapse"  id="users"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                            <li >
                              <a class="sidenav-item-link" href="{{route('user.profile')}}">
                                <span class="nav-text">User Profile</span>
                              </a>
                            </li>
                            <li >
                              <a class="sidenav-item-link" href="{{route('user.profile.settings')}}">
                                <span class="nav-text">User Profile Settings</span>
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                      aria-expanded="false" aria-controls="authentication">
                      <i class="fa-solid fa-user-shield"></i>
                      <span class="nav-text">Authentication</span> <i class="fa-solid fa-angle-down"></i>
                    </a>
                    <ul  class="collapse"  id="authentication"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                            <li >
                              <a class="sidenav-item-link" href="{{route('password.change')}}">
                                <span class="nav-text">Reset Password</span>
                              </a>
                            </li>
                      </div>
                    </ul>
                  </li>
              </ul>
            </div>
          </div>
        </aside>

      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class="page-wrapper">

          <!-- Header -->
          <header class="main-header" id="header">
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <i class="fa-solid fa-bars"></i>
              </button>

              <span class="page-title">dashboard</span>

              <div class="navbar-right ">

                <!-- search form -->
                <div class="search-form">
                  <form action="index.html" method="get">
                    <div class="input-group input-group-sm" id="input-group-search">
                      <input type="text" autocomplete="off" name="query" id="search-input" class="form-control" placeholder="Search..." />
                      <div class="input-group-append">
                        <button class="btn" type="button">/</button>
                      </div>
                    </div>
                  </form>
                  <ul class="dropdown-menu dropdown-menu-search">

                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Morbi leo risus</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Dapibus ac facilisis in</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Porta ac consectetur ac</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Vestibulum at eros</a>
                    </li>

                  </ul>

                </div>

                <ul class="nav navbar-nav">
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="{{asset('assets/auth/images/dummyUser.png')}}" class="user-image rounded-circle" alt="User Image" />
                      <span class="d-none d-lg-inline-block">John Doe</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <a class="dropdown-link-item" href="{{route('user.profile')}}">
                          <i class="mdi mdi-account-outline"></i>
                          <span class="nav-text">My Profile</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-link-item" href="{{route('user.profile.settings')}}">
                          <i class="mdi mdi-settings"></i>
                          <span class="nav-text">Account Setting</span>
                        </a>
                      </li>

                      <li class="dropdown-footer">
                        <form id="logout-form" method="POST" action="{{route('logout')}}">
                            @csrf
                            <a id="logout-button" class="dropdown-link-item" type="submit" href="javascript:void(0)">
                              <i class="mdi mdi-logout"></i>
                              <span class="text-left">Log Out</span>
                            </a>
                            {{-- <button type="submit">logout</button> --}}
                        </form>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
          @yield('content')


        </div>

          <!-- Footer -->
          <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year"></span> Copyright Mono Dashboard Bootstrap Template by <a class="text-primary" href="http://www.iamabdus.com/" target="_blank" >Abdus</a>.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>
      </div>
    </div>



  <script src="{{asset('assets/auth/plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/auth/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/auth/plugins/simplebar/simplebar.min.js')}}"></script>
  <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>



  <script src="{{asset('assets/auth/plugins/apexcharts/apexcharts.js')}}"></script>


  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

  <script src="{{asset('assets/auth/plugins/toaster/toastr.min.js')}}"></script>


  <script src="{{asset('assets/auth/js/mono.js')}}"></script>
  <script src="{{asset('assets/auth/js/chart.js')}}"></script>
  <script src="{{asset('assets/auth/js/custom.js')}}"></script>
  @yield('bottomJS')
  <script>
      // toster js starts
        @if(Session::has('message'))
        toastr.options =
        {
          "closeButton" : true,
          "progressBar" : true
        }
              toastr.success("{{ session('message') }}");
        @endif

        @if(Session::has('error'))
        toastr.options =
        {
          "closeButton" : true,
          "progressBar" : true
        }
              toastr.error("{{ session('error') }}");
        @endif

        @if(Session::has('info'))
        toastr.options =
        {
          "closeButton" : true,
          "progressBar" : true
        }
              toastr.info("{{ session('info') }}");
        @endif

        @if(Session::has('warning'))
        toastr.options =
        {
          "closeButton" : true,
          "progressBar" : true
        }
              toastr.warning("{{ session('warning') }}");
        @endif
      // toster js ends
      $( document ).ready(function() {
          // select2 js for this app starts
            $('.posttags').select2();

            $(".js-tags-tokenizer").select2({
                tags: true,
                tokenSeparators: [',', ' ']
            })
          // select2 js for this app ends

          // logout js for this app start
          $('#logout-form').click(function (){
              $(this).submit();
          })
      });
  </script>


  </body>
</html>
