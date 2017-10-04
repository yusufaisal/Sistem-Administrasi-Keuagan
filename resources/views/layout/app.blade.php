
<html>

@include('layout.header_script')

<body class=" skin-red layout-top-nav sidebar-collapse">
<div class="wrapper">
    @if(\Illuminate\Support\Facades\Auth::check())
        @include('layout.sidebar')
    @endif

    @include('layout.header')

    <div class="content-wrapper">
        <div class="container">

            <!-- Main content -->
            <section class="content">
                @yield('content')
            </section>
            <!-- /.Main content -->

        </div>
    </div>

    @include('layout.footer')

</div>

@include('layout.footer_script')

</body>
</html>