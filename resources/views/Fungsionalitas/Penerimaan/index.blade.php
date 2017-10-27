@extends('layout.app')
@section('content')
    @if (Session::has('message'))
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4><i class="icon fa fa-check"></i>Info</h4>
            {{ Session::get('message') }}
        </div>
    @endif

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
                                    <tbody><tr class="bg-blue">
                                        <th>#</th>
                                        <th>Profit</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th style="width: 400px">Keterangan</th>
                                        <th>User</th>
                                        <th style="width: 100px">Action</th>
                                    </tr>
                                    @foreach($penerimaan as $item)
                                        <tr>
                                            <td>{{$i++."."}}</td>
                                            <td>Rp. {{$item->profit}}</td>
                                            <td>{{$item->bulan}}</td>
                                            <td><span class="badge bg-green">{{$item->tahun}}</span></td>
                                            <td>{{$item->keterangan}}</td>
                                            <td>{{$item->user->name}}</td>
                                            @if($item->user->id == \Illuminate\Support\Facades\Auth::user()->id)
                                                <td><a href="{{url("penerimaan/".$item->id)}}" class="btn-xs btn-success">Edit</a> | <a href="{{route('penerimaan.delete',$item->id)}}" class="btn-xs btn-danger" onclick="return confirm('Are you sure want to delete?')">Delete</a></td>
                                            @endif
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