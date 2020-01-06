@extends('welcome')

@section('content')
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
          <div class="col-md-3">
            <img class="img img-responsive" style="width:100%" src="<?php echo url("/");?>/img/<?php echo $detail->Gambar;?>">
          </div>
          <div class="col-md-9">
              <!-- <form method="POST" action="<?php echo url("/");?>/kalkulasikpr.php"> -->
                 {!! csrf_field() !!}
                <input type="hidden" name="id" value="<?php echo $detail->RumahID;?>"/>
                <table style="margin-top:10px" class="table table-bordered">
                      <tr>
                          <th colspan="2">
                              <?php
                                echo $detail->Judul
                              ?>
                          </th>
                      </tr>
                      <tr>
                          <th style="text-align:left">
                              Harga
                          </th>
                          <td style="text-align:left">
                              <?php
                                echo "Rp ".number_format($detail->Harga);
                              ?>
                          </td>
                      </tr>
                      <tr>
                          <th style="text-align:left">
                              Tanggal 
                          </th>
                          <td style="text-align:left">
                              <?php
                                echo date('d-M-Y', strtotime($detail->Tanggal));;
                              ?>
                          </td>
                      </tr>
                      <tr>
                           <th style="text-align:left">
                               Tenor
                           </th style="text-align:left">
                           <td style="text-align:left">
                               <input type="number" value="15" id="tenor"/>
                               <label id="tenorB">Tahun</label>
                           </td>
                      </tr>
                      <tr>
                           <th style="text-align:left">
                               Bunga Pinjaman
                           </th style="text-align:left">
                           <td style="text-align:left">
                               <input type="number" value="10" id="bunga"/>
                               <label>% per tahun</label>
                           </td>
                      </tr>
                      <tr>
                           <th style="text-align:left">
                               Uang Muka
                           </th style="text-align:left">
                           <td style="text-align:left">
                               <input type="number" value="15" id="uangmuka"/>
                               <label>%</label>
                           </td>
                      </tr>
                      <tr>
                           <th colspan="2">
                              <br/><br/>
                           </th>
                      </tr>
                      <tr>
                          <th style="text-align:left">
                              Total Harga
                          </th>
                          <td style="text-align:right">
                              <?php
                                echo "Rp ".number_format($detail->Harga);
                              ?>
                          </td>
                      </tr>
                      <tr>
                           <th style="text-align:left">
                               Uang DP
                           </th>
                           <td style="text-align:right" id="dp">
                               
                           </td>
                      </tr>
                      <tr>
                           <th style="text-align:left">
                               Pinjaman
                           </th>
                           <td style="text-align:right" id="pinjaman">
                               
                           </td>
                      </tr>
                      <tr>
                           <th style="text-align:left">
                               Angsuran
                           </th>
                           <td style="text-align:right" id="angsuran">
                               
                           </td>
                      </tr>
                      <tr>
                           <th colspan="2">
                              <br/>
                              <br/>
                           </th>
                      </tr>
                      <tr>
                           <table class="table table-bordered">
                               <thead>
                                  <tr>
                                      <th>Bulan</th>
                                      <th>Angsuran Bunga</th>
                                      <th>Angsuran Pokok</th>
                                      <th>Total Angsuran</th>
                                      <th>Sisa Pinjaman</th>
                                  </tr>
                               </thead>
                               <tbody id="tcicilan">
                               </tbody>
                           </table>
                      </tr>
                </table>
              <!-- </form> -->
          </div>
      </div>
    </div>
  </section>
@stop


@section('js')
  <script>
      var harga=<?php echo $detail->Harga;?>;
      function calculateall()
      {
          var dp=Math.round(($("#uangmuka").val()*1)/100*harga);
          var bungaPerbulan=(($("#bunga").val())/12)/100;

          
          var pinjaman=harga-dp;
          $("#dp").html(formatRP(dp));
          $("#pinjaman").html(formatRP(pinjaman));
          var lama=$("#tenor").val()*12;

          //var sukuBungaEfektif=$bungaAngka/12;
         var pw=Math.pow((1+bungaPerbulan),(lama*-1));
         var pvFactor=(1-pw)/bungaPerbulan;
         var angsuran=pinjaman/pvFactor;

          //var angsuran=pinjaman/lama;
          $("#angsuran").html(formatRP(angsuran));
          console.log(angsuran);
          $("#tcicilan").html("<tr><td>0</td><td style='text-align:right'></td><td style='text-align:right'></td><td style='text-align:right'></td><td style='text-align:right'>"+formatRP(pinjaman)+"</td></tr>");
          var tpj=pinjaman;
          var cicil=tpj/lama;
          var tbunga=0;
          var tcicil=0;
          var tangsuran=0;
          for (var i=1;i<=lama;i++)
          {

            var bg=bungaPerbulan*tpj;
            
            var sisa=angsuran-bg;

            tpj-=sisa;
            $("#tcicilan").append("<tr><td>"+i+"</td><td style='text-align:right'>"+formatRP(bg)+"</td><td style='text-align:right'>"+formatRP(sisa)+"</td><td style='text-align:right'>"+formatRP(angsuran)+"</td><td style='text-align:right'>"+formatRP(tpj)+"</td></tr>");
            
          }
          /*
          $("#tcicilan").append("<tr><td>Total</td><td style='text-align:right'>"+formatRP(tbunga)+"</td><td style='text-align:right'>"+formatRP(tcicil)+"</td><td style='text-align:right'>"+formatRP(tangsuran)+"</td><td style='text-align:right'>"+formatRP(tpj)+"</td></tr>");*/
      }
      $(document).ready(function()
      {
        //$("#head").hide();
        //$("#footer").hide();
        $("#tenor").keyup(function() {
          
          var tenor=$("#tenor").val();
          $("#tenorB").html((tenor*12)+" bulan");
          calculateall();
        });
        $("#bunga").keyup(function() {
          calculateall();
        });
        $("#uangmuka").keyup(function() {
          calculateall();
        });
        calculateall();
      });
  </script>
@stop