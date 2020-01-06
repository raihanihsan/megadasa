@extends('welcome')

@section('content')
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        
        <?php
         // print_r($rumah);

        ?>  
        <div id="carouselExampleIndicators" class="carousel slide" style="width:100%" data-ride="carousel">
          <ol class="carousel-indicators">
            <?php
                
                for ($i=0;$i<count($rumah);$i++)
                {
                  $detail=$rumah[$i];
                  $active="";
                  if ($i==0)
                  {
                      $active="active";
                  }
                  ?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i;?>" class="<?php echo $active;?>"></li>
                  <?php
                }
            ?>
            
          </ol>
          <div class="carousel-inner">
            <?php
                for ($i=0;$i<count($rumah);$i++)
                {
                  $detail=$rumah[$i];
                  $active="";
                  if ($i==0)
                  {
                    $active="active";
                  }
                  ?>
                     <div style="width:100%;background-color:#DDDDDD" class="carousel-item <?php echo $active;?>">
                              <a href="<?php echo url("");?>/detail/<?php echo $detail->RumahID;?>">
                               <img style="margin:auto;margin-top:30px;margin-bottom:30px" class="d-block"   src="img/<?php echo $detail->Gambar; ?>"/>
                               <div class="carousel-caption d-none d-md-block">
                                 <h3><?php echo $detail->Judul;?></h3>
                                 <p class="lead mb-0"><?php echo number_format($detail->Harga);?></p>
                               </div>
                             </a>
                      </div>
                       
                  <?php
                }
            ?>
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
          
            <?php
                
            ?>
            
      

      </div>
    </div>
  </section>
@stop