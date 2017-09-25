
<html>

@include('layout.header_script')

<body class="hold-transition skin-red layout-top-nav">
<div class="wrapper">

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