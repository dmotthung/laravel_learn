@include('admins.partials.header')

@include('admins.partials.navbar')

    <div class="page-body-wrapper horizontal-menu">
        @include('admins.partials.sidebar')
      
      <div class="page-body">
        @include('admins.partials.breadcrumb')
        <!-- Container-fluid starts-->
        @yield('content')
        <!-- Container-fluid Ends-->
      </div>
@include('admins.partials.footer')