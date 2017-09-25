@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Penerimaan</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table class="table table-bordered">
                                    <tbody><tr class="bg-info">
                                        <th>#</th>
                                        <th>Profit</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th style="width: 400px">Keterangan</th>
                                        <th>User</th>
                                    </tr>
                                    @foreach($penerimaan as $item)
                                        <tr>
                                            <td>{{$i++."."}}</td>
                                            <td>{{$item->profit}}</td>
                                            <td>{{$item->bulan}}</td>
                                            <td><span class="badge bg-green">{{$item->tahun}}</span></td>
                                            <td>{{$item->keterangan}}</td>
                                            <td>{{$item->user}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody></table>
                                <div class="pull-right">{{$penerimaan->render()}}</div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                </div>
                <div class="panel-footer">
                        <a href="{{url('penerimaan/create')}}" class="btn btn-group bg-blue">
                            <i class="fa fa-plus"></i> Tambah Penerimaan</a>
                </div>
            </div>
        </div>
    </div>
@endsection