@extends('welcome')

@section('content')
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        
        <?php
         // print_r($rumah);

        ?>  
        
          
            <?php
                for ($i=0;$i<count($rumah);$i++)
                {
                  $detail=$rumah[$i];
                  ?>
                    <div class="col-lg-4">
                      <a href="<?php echo url("");?>/detail/<?php echo $detail->RumahID;?>">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                         <img style="width:100%;height:200px" class="img-responsive" src="img/<?php echo $detail->Gambar; ?>"/>
                          <h3><?php echo $detail->Judul;?></h3>
                          <p class="lead mb-0"><?php echo number_format($detail->Harga);?></p>
                        </div>
                       </a>
                    </div>
                  <?php
                }
            ?>
            
      

      </div>
    </div>
  </section>
@stop