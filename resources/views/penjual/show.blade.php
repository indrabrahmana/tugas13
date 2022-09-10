@extends('template.base')

@section('content')
    
        <div class="container">
                <div class="card">
                    <div class="card-header">
                        Detail Data User Penjual
                        <a href="{{url('admin/penjual', $penjual->id)}}/edit" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Edit Data </a>
                    </div>
                    <div class="card-body">
                        <h3>{{$penjual->nama}}</h3>
                        <hr>
                        <p>
                            Username : {{"@".$penjual->username}} <br>
                            Email : {{$penjual->email}} <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection