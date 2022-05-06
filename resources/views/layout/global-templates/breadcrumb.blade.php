<div class="breadcrumbs overlay" style="background-image:url('{{ asset('frontend/img/breadcrumb.jpg')}}')">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bread-inner">
                    <!-- Bread Menu -->
                    <div class="bread-menu">
                        @yield('breadcrumbs')

                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                        </ul>
                    </div>
                    <!-- Bread Title -->
                    <div class="bread-title">
                        <h2>@yield('title')</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>