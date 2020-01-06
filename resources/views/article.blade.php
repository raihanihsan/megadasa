@extends('welcome')

@section('content')
  <section  class="features-icons bg-light text-center">
    <div class="container">
        <?php
           for ($i=0;$i<count($article);$i++)
           {
            $detail=$article[$i];
            ?>
              <div class="alert alert-secondary" role="alert">
                 <h3>
                    <?php
                      echo $detail->judul;
                    ?>
                 </h3>
                 <p style="text-align:justify">
                   <?php
                    echo $detail->content;
                   ?>
                 </p>
                 <a href="<?php echo $detail->url;?>">
                    See more
                 </a>
                 <div style="text-align:right;font-weight:bold;font-size:14px">
                    <?php
                      echo date("d-M-Y",strtotime($detail->tanggal));
                    ?>
                 </div>
              </div>
            <?php
           }
        ?>
    </div>
  </section>

@stop
