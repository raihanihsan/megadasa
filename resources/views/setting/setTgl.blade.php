@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Setting Periode</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/registerJadwalUjianTA') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Tangal Mulai</label>

                            <div class="col-md-6">
                                <input id="email" type="date" class="form-control" name="tglMulai" value="{{ old('date') }}">

                                
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Tanggal Akhir</label>

                            <div class="col-md-6">
                                <input id="tgl" type="date" class="form-control" name="tglAkhir" >
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Keterangan</label>

                            <div class="col-md-6">
                               
                                  <select class="form-control" id="sel1" name="keterangan">
                                    <option>Administrasi</option>
                                    <option>Ujian Tugas Akhir</option>
                                    
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
                                 <a href="javascript:void(0)" onclick="toggle_visibility('popup-box3');" class="btn btn-info" role="button">Histori</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
