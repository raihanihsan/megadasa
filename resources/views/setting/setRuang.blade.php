@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset0">
            <div class="panel panel-default">
                <div class="panel-heading">Setting Ruang Ujian</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/registerJadwalRuang') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Periode</label>

                            <div class="col-md-5">
                                 <select class="form-control" id="sel1" name="jadwalPeriode">
                                    @foreach($cboJadwal as $jadwal)
                                        <option value={{$jadwal->TanggalMulai}};{{$jadwal->TanggalAkhir}}> 
                                            <p>{{$jadwal->TanggalMulai}} <b>---</b> {{$jadwal->TanggalAkhir}}</p>
                                        </option>
                                    @endforeach

                                  </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Tanggal</label>

                            <div class="col-md-5">
                                 <input id="tgl" type="date" class="form-control" name="tglPeminjaman" >
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Jam</label>

                            <div class="col-md-5">
                                 <select class="form-control" id="sel1" name="jam">
                                        <option>7:00-8:30</option>
                                        <option>8:30-10:00</option>
                                        <option>10:00-11:30</option>
                                        <option>11:30-13:00</option>
                                        <option>13:00-14:30</option>
                                        <option>14:30-16:00</option>
                                  </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Nama Ruang Ujian</label>

                            <div class="col-md-5">
                                 <input id="tgl" type="text" class="form-control" name="NamaRuang" >
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
                               <a href="javascript:void(0)" onclick="toggle_visibility('popup-box4');" class="btn btn-info" role="button">Lihat Ruang Ujian</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
