<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin dashboard</title>
<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Styles >
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"-->  

<link href="{{ asset('css/admin.css') }}" rel="stylesheet">
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>

<body>
  <!--div id="app">
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
      <div class="app-header header-shadow">
        <Menuheader :user-id='@json(auth()->user()->id)'></Menuheader>
      </div>
      <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
          <Menuadmin :user-id='@json(auth()->user()->id)'></Menuadmin>
          <a href="#" id="showmenu"><i class="fa fa-bars" aria-hidden="true"></i></a>
          <div class="search"><i class="fa fa-search" aria-hidden="true"></i> <input type='text' class='src'
              placeholder='Search...' /></div>
          <div class="uactions">
            <div class="admin-username">
              <p>Welcome, {{ Auth::user()->name }}</p>
            </div>
            <div class="admin-logout">
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>

            </div>
          </div>
        </div>
        <div class="app-main__outer">
          <div class="app-main__inner">
            <router-view></router-view>
          </div>
        </div>
      </div>
    </div>
  </div-->
  <div id="app">
    <div class="wrapper">
    <div class="side-menu">
      <div class="logo">
       <h1 class="ch1"> Teluk Coding</h1>
        <p class="cp">Admin Panel | Dashboard</p>     
      </div>

      <Menuadmin :user-id='@json(auth()->user()->id)'></Menuadmin>
         
  </div>
<div class="main-content">
  <div class="topmenu">
    <a href="#" id="showmenu"><i class="fa fa-bars" aria-hidden="true"></i></a>
      <div class="search"><i class="fa fa-search" aria-hidden="true"></i> <input type='text' class='src' placeholder='Search...'/></div>
      <div class="uactions">
      <div class="admin-username"><p>Welcome, {{ Auth::user()->name }}</p> </div>
      <div class="admin-logout">
        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
        </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf
      </form>
      </div>
    </div>                             
  </div>
    <div class="main-section"> 

      <router-view></router-view> 

    </div>
   </div>
  </div>
</div>

  <script src="{{ mix('js/app.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script> 
</body>

</html>