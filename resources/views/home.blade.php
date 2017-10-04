@extends('layout.app')

@section('content')
<div class="container">
    <div class="row box box-body">
        <div class="col-md-6 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><sup style="font-size: 20px">Rp.</sup>12.000.000</h3>

                    <p>Belanja Bulan ini</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{url('belanja/')}}" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
            </div>

        </div>

        <div class="col-md-6 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><sup style="font-size: 20px">Rp.</sup>5.000.000</h3>

                    <p>Penerimaan Bulan ini</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{url('penerimaan/')}}" class="small-box-footer">Lihat Data <i class="fa fa-arrow-circle-right"></i></a>
            </div>

        </div>


    </div>
</div>
@endsection
