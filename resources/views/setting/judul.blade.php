@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Judul</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/inputJudulBaru') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">NRP</label>

                            <div class="col-md-4">
                                <input id="email" type="text" class="form-control" name="nrp" value="{{ old('date') }}">
                            </div>
                            
                            <div class="col-md-4">
                                <input id="email" type="submit" class="btn btn-info" name="btn" value="Check">
                            </div>
                        </div>
                        @if (Session::has('namaMhs'))
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"></label>

                            <div class="col-md-8">
                                <div for="email" class="label label-info" style="background-color:red;">{{ Session::get('namaMhs') }}</div>
                            </div>
                            
                        </div>
                            @endif

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Judul Baru</label>
                            <div class="col-md-6">
                                
                                <textarea id="tgl" type="date" class="form-control" name="judul" ></textarea>
                            </div>
                        </div>

                        
                        @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                         @if (Session::has('error'))
                                <div class="alert alert-warning">{{ Session::get('error') }}</div>
                        @endif
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-save"></i> Simpan
                                </button>
                                 <a href="javascript:void(0)" onclick="toggle_visibility('popup-box5');" class="btn btn-info" role="button">Histori</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
