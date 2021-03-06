@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Informasi Mahasiswa</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/settingPetugas') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">NIK dosen</label>

                            <div class="col-md-4">
                                <input id="email" type="text" class="form-control" name="nik" value="{{ old('date') }}">
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
                            <label for="password" class="col-md-4 control-label">Jabatan</label>
                            <div class="col-md-6">
                                <select class="form-control" id="sel1" name="Jabatan">
                                    <option>PAJ</option>
                                    <option>Kalab/Korprog</option>
                                   
                                    
                                </select>
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
                                 <a href="javascript:void(0)" onclick="toggle_visibility('popup-box6');" class="btn btn-info" role="button">Histori</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
