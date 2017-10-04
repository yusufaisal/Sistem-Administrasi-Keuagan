<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://www.shareicon.net/data/128x128/2015/10/07/113615_face_512x512.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><span class="label label-default text-bold">{{\Illuminate\Support\Facades\Auth::user()->name}}</span></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">NAVIGATION</li>
            <li>
                <a href="{{url('home')}}">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>Transaksi</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="{{url('penerimaan/')}}"><i class="fa fa-circle-o"></i> View Penerimaan</a></li>
                    <li><a href="{{url('belanja/')}}"><i class="fa fa-circle-o"></i> View Belanja</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Laporan</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display: none;">
                    <li><a href="#"><i class="fa fa-angle-right"></i> Laporan Jurnal</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i> Laporan Tutup Buku</a></li>
                </ul>
            </li>
        </ul>
        <ul class="sidebar-menu">
            <li class="header">USER</li>
            <li class="bg-red color-palette">
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>