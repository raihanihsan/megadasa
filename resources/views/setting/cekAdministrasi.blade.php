@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset0">
            <div class="panel panel-default">
                <div class="panel-heading">Cek Administrasi</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/registercheckAdministrasi') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Periode</label>

                            <div class="col-md-4">
                                <input id="email" type="text" class="form-control" name="periode" value="<?php echo $periods;?>" disabled>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">NRP</label>

                            <div class="col-md-4">
                                <input id="email" type="text" class="form-control" name="nrp" value="<?php  ?>">
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
                            <label for="password" class="col-md-4 control-label">Judul</label>
                            <div class="col-md-6">
                                <select class="form-control" id="sel1" name="Jabatan">
                                    
                                    @if(isset($jdl))
                                        @foreach($jdl as $judl)
                                            <option>{{$judl->NamaJudul}}</option>
                                            
                                        @endforeach
                                    @endif
                                    
                                </select>
                            </div>
                        </div> 


                        <div class="table-responsive">          
                          <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Transkrip</th>
                                <th>Kartu Studi</th>
                                <th>Surat Tugas</th>
                                <th>Kartu Bimbingan</th>
                                <th>Slip UPP</th>
                                <th>Form Persetujuan Dosen</th>
                                <th>SertifikatLSTA</th>
                                <th>NaskahTA</th>
                                <th>Proposal</th>
                                <th>Karya Tulis Ilmiah</th>
                                

                              </tr>
                            </thead>
                            <tbody>
                              @if(isset($admn))
                                 <?php $i=1;?>
                                @foreach ($admn as $dat)

                                    <tr>
                                    <td><input type="radio" name="rdo[]"></td>
                                    <td><a href='../storage/uploads/image/<?php echo $dat->transkrip;?>'>View</a></td>
                                    <?php $i++;?>
                                    </tr>
                                @endforeach
                              @endif
                            </tbody>
                          </table>
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
