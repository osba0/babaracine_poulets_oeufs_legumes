<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{{ config('app.name', 'BABARCINE') }}</title>
		<link rel="shortcut icon" type="image/png" href="{{ asset('admin/assets/images/logos/favicon.png') }}" />
		<link rel="stylesheet" href="{{ asset('admin/assets/css/styles.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('admin/assets/css/styles.css') }}" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.css" />
    </head>
    <body class="font-sans antialiased">
          <!--  Body Wrapper -->
		  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
		    data-sidebar-position="fixed" data-header-position="fixed">
		    <!-- Sidebar Start -->
		    <aside class="left-sidebar">
		      <!-- Sidebar scroll-->
		      <div>
		        <div class="brand-logo d-flex flex-column align-items-center justify-content-between border-bottom py-2">
		          <a href="" class="text-nowrap logo-img text-center">
		            <img src="{{ asset('admin/assets/images/logos/babaracine.png') }}" class="shadow border rounded-circle" width="100%" alt="" style="border: 5px solid #eaeff4 !important" /> 
		          </a>
		          
		          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
		            <i class="ti ti-x fs-8"></i>
		          </div>
		        </div>
		        <!-- Sidebar navigation-->
            @include('navigation_admin')
		        <!-- End Sidebar navigation -->
		      </div>
		      <!-- End Sidebar scroll-->
		    </aside>
		    <!--  Sidebar End -->
		    <!--  Main wrapper -->
		    <div class="body-wrapper">
		      <!--  Header Start -->
		      <header class="app-header border-bottom">
		        <nav class="navbar navbar-expand-lg navbar-light">
		          <ul class="navbar-nav align-items-center">
		            <li class="nav-item d-block d-xl-none">
		              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
		                <i class="ti ti-menu-2"></i>
		              </a>
		            </li>
		            <li class="nav-item">
		              <span class="fs-6 text-uppercase text-danger fw-bold-900 pe-3">{{ config('app.name', 'BABARCINE') }}</span>
		               <span class="fs-6 text-uppercase text-info fw-bold-900">POULETS - ŒUFS - LEGUMES</span>
		             
		            </li>
		             <li class="nav-item">
		              <a href="/" target="_blank" class="btn text-success btn-lg"><i class="ti ti-world fs-6"></i> Visitez la boutique!</a>
		            </li>
		          </ul>
		          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
		            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
		              <li class="nav-item">
			              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
			                <i class="ti ti-bell-ringing"></i>
			                <div class="notification bg-primary rounded-circle"></div>
			              </a>
		           		</li>
		           		<li>
		           			<span class="badge bg-info">Profil</span>
		           			<i class="ti ti-minus fs-5" aria-hidden="true"></i>
		           			<span class="badge bg-warning text-uppercase">{{ Auth::user()->utype }}</span>
		           		</li>
		              <li class="nav-item dropdown">
		                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
		                  aria-expanded="false">

		                  <img src="{{ asset('admin/assets/images/profile/user-1.jpg') }}" alt="" width="35" height="35" class="rounded-circle">
		                  <span class="ms-2">{{ Auth::user()->name }}</span>
		                </a>
		                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
		                  <div class="message-body">
		                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
		                      <i class="ti ti-user fs-6"></i>
		                      <p class="mb-0 fs-3">My Profile</p>
		                    </a>
		                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
		                      <i class="ti ti-mail fs-6"></i>
		                      <p class="mb-0 fs-3">My Account</p>
		                    </a>
		                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
		                      <i class="ti ti-list-check fs-6"></i>
		                      <p class="mb-0 fs-3">My Task</p>
		                    </a>

		                    <a title="Logout" href="{{ route('logout') }}" class="btn btn-outline-primary mx-3 mt-2 d-block" onclick="event.preventDefault(); document.getElementById('logout-Form').submit()" >Logout</a>
		                  </div>
		                  <form id="logout-Form" action="{{ route('logout') }}" method="POST">@csrf</form>
		                </div>
		              </li>
		            </ul>
		          </div>
		        </nav>
		      </header>
		      <!--  Header End -->
		      <!--MAin-->
		      	{{ $slot }}
		  
		    </div>
		  </div>

    <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
		<script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
		<script src="{{asset('admin/assets/js/sidebarmenu.js')}}"></script>
		<script src="{{asset('admin/assets/js/app.min.js')}}"></script>
		<script src="{{asset('admin/assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
		<script src="{{asset('admin/assets/libs/simplebar/dist/simplebar.js')}}"></script>
		<script src="{{asset('admin/assets/js/dashboard.js')}}"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
	<script src="{{ asset('assets/js/functions.js') }}"></script>

        @livewireScripts
    </body>
</html>
