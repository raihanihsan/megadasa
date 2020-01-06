<!--untuk nampilkan pop up box untuk profile-->
<div id="popup-box1" class="popup-position">
                <div id="popup-wrapper">
                     <p><a href="javascript:void(0)" onclick="toggle_visibility('popup-box1');">Close</a></p>
                    <div id="popup-container">
                        
                         @if(Auth::check())
							<h4>Profile {{ Auth::user()->jabatan }}</h4>
							<h5>Nama		: {{ Auth::user()->name }}</h5><br>

							<h5>E-mail	: {{ Auth::user()->email }}</h5>
						@endif

                    </div>
                </div>
</div>

<!--untuk nampilkan pop up box untuk Histori Bidang Ilmu-->
<div id="popup-box2" class="popup-position">
                <div id="popup-wrapper">
                     <p><a href="javascript:void(0)" onclick="toggle_visibility('popup-box2');">Close</a></p>
                    <div id="popup-container">
                        <h4>Histori Bidang Ilmu</h4>
                        <div class="table-responsive">          
						  <table class="table">
						    <thead>
						      <tr>
						        <th>#</th>
						        <th>Nama Bidang Ilmu</th>
						        <th></th>
						      </tr>
						    </thead>
						    <tbody>
						      @if(isset($data))
						      	 <?php $i=1;?>
						      	@foreach ($data as $bidangIlmu)
						      		<tr>
    								<td>{{ $i }}</td>
    								<td>{{ $bidangIlmu->name }}</td>
    								<td>
    									<a href="">
                                			<span class="glyphicon glyphicon-edit"> Edit</span>
                            			</a>
                            			
                            		</td>
    								<?php $i++;?>
    								</tr>
								@endforeach
						      @endif
						    </tbody>
						  </table>
						</div>
                    </div>
                </div>
</div>


<!--untuk nampilkan pop up box untuk Histori Periode-->
<div id="popup-box3" class="popup-position">
                <div id="popup-wrapper">
                     <p><a href="javascript:void(0)" onclick="toggle_visibility('popup-box3');">Close</a></p>
                    <div id="popup-container">
                        <h4>Histori Periode</h4>
                        <div class="table-responsive">          
                          <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              @if(isset($dataJadwal))
                                 <?php $i=1;?>
                                @foreach ($dataJadwal as $jadwal)
                                    <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $jadwal->TanggalMulai }} <strong>s/d</strong> {{$jadwal->TanggalAkhir}}</td>
                                    <td>{{ $jadwal->Keterangan }}</td>
                                    <td>
                                        <a href="">
                                            <span class="glyphicon glyphicon-edit"> Edit</span>
                                        </a>
                                        
                                    </td>
                                    <?php $i++;?>
                                    </tr>
                                @endforeach
                              @endif
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
</div>
<!--untuk nampilkan pop up box untuk Histori Ruangan-->
<div id="popup-box4" class="popup-position">
                <div id="popup-wrapper">
                     <p><a href="javascript:void(0)" onclick="toggle_visibility('popup-box4');">Close</a></p>
                    <div id="popup-container">
                        <h4>Histori Ruangan</h4>
                        <div class="table-responsive">          
                          <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Nama Ruang Ujian</th>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              @if(isset($ruangUjian))
                                 <?php $i=1;?>
                                @foreach ($ruangUjian as $ruang)
                                    <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $ruang->NamaRuang }} </td>
                                    <td>{{ $ruang->tanggal }}</td>
                                    <td>{{ $ruang->jam }}</td>
                                    <td>
                                        <a href="">
                                            <span class="glyphicon glyphicon-edit"> Edit</span>
                                        </a>
                                        
                                    </td>
                                    <?php $i++;?>
                                    </tr>
                                @endforeach
                              @endif
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
</div>

<!--untuk nampilkan pop up box untuk Histori Judul-->
<div id="popup-box5" class="popup-position">
                <div id="popup-wrapper">
                     <p><a href="javascript:void(0)" onclick="toggle_visibility('popup-box5');">Close</a></p>
                    <div id="popup-container">
                        <h4>Histori Judul</h4>
                        <div class="table-responsive">          
                          <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>NRP</th>
                                <th>Nama Mahasiswa</th>
                                <th>Nama Judul</th>
                                <th>Petugas</th>
                                
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              @if(isset($judul))
                                 <?php $i=1;?>
                                @foreach ($judul as $jdl)
                                    <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $jdl->nrp }} </td>
                                    <td>{{ $jdl->namaMahasiswa }}</td>
                                    <td>{{ $jdl->NamaJudul }}</td>
                                    <td>{{ $jdl->namaPetugas }}</td>
                                    <td>
                                        <a href="">
                                            <span class="glyphicon glyphicon-edit"> Edit</span>
                                        </a>
                                        
                                    </td>
                                    <?php $i++;?>
                                    </tr>
                                @endforeach
                              @endif
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
</div>

<!--untuk nampilkan pop up box untuk Histori Informasi-->
<div id="popup-box6" class="popup-position">
                <div id="popup-wrapper">
                     <p><a href="javascript:void(0)" onclick="toggle_visibility('popup-box6');">Close</a></p>
                    <div id="popup-container">
                        <h4>Histori Informasi Mahasiwa</h4>
                        <div class="table-responsive">          
                          <table class="table">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>NRP</th>
                                <th>Nama Mahasiswa</th>
                                <th>Informasi</th>
                                <th>Petugas</th>
                                
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              @if(isset($info))
                                 <?php $i=1;?>
                                @foreach ($info as $inf)
                                    <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $inf->nrp }} </td>
                                    <td>{{ $inf->namaMahasiswa }}</td>
                                    <td>{{ $inf->NamaKeterangan }}</td>
                                    <td>{{ $inf->namaPetugas }}</td>
                                    <td>
                                        <a href="">
                                            <span class="glyphicon glyphicon-edit"> Edit</span>
                                        </a>
                                        
                                    </td>
                                    <?php $i++;?>
                                    </tr>
                                @endforeach
                              @endif
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
</div>
