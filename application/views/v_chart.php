<!doctype html>
<html class="no-js" lang="">
<head>
    <meta http-equiv="refresh" content="99000" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>M-At`taqwa</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo base_url() ?>template/apple-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url() ?>template/favicon.ico">

    <link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>template/assets/scss/style.css">
    <link href="<?php echo base_url() ?>template/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   <script src="http://code.jquery.com/jquery.js"></script>
   <style type="text/css">
    th{
        padding-top: unset;
        font-size: 13px;
        text-align: center;
    }
    td {
        font-size: 15px;
        vertical-align: top;
        font-weight:bold;
    }
       
</style>
</head>
<body>
   
<div id="right-panel" class="right-panel">
    <!-- Content -->
    <div class="content mt-3">
<div class="animated fadeIn">
        
<div class="col-lg-12" style="margin-bottom: 20px">
<div class="animated fadeIn">

    <div id="container">
        <?php foreach ($suara as $mh) ; ?>
        <?php foreach ($suara1 as $mh1) ; ?>
        <?php foreach ($suara2 as $mh2) ; ?>
        <?php foreach ($suara3 as $mh3) ; ?>
        <?php foreach ($suara4 as $mh4) ; ?>
        <?php foreach ($suara5 as $mh5) ; ?>
        <?php foreach ($suara6 as $mh6) ; ?>
        <?php foreach ($suara7 as $mh7) ; ?>
        <?php foreach ($suara8 as $mh8) ; ?>
        <?php foreach ($suara9 as $mh9) ; ?>
        <?php foreach ($suara10 as $mh10) ; ?>
        <?php foreach ($suara11 as $mh11) ; ?>
       <script type="text/javascript">
            $(function () {
                var chart;
                $(document).ready(function () {
                    var colors = Highcharts.getOptions().colors,
                            categories = [
                                'Januari',
                                'Februari ' ,
                                'Maret', 
                                'April', 
                                'Mei',
                                'Juni',
                                'Juli',
                                'Agustus',
                                'September',
                                'Oktober',
                                'November',
                                'Desember',
                            ],
                            name = 'Perolehan Dana Sementara',
                            data = [
                                {
                                   y:<?php echo $mh->suara;?>,
                                    color:colors[0],
                                    drilldown:{
                                        name:'Januari',
                                        categories:['Januari'],
                                        data:[<?php echo $mh->suara;?>],
                                        color:colors[0]
                                    }
                                },
                                {
                                    y:<?php echo $mh1->suara;?>,
                                    color:colors[1],
                                    drilldown:{
                                        name:'Februari',
                                        categories:['Februari'],
                                        data:[<?php echo $mh1->suara;?>],
                                        color:colors[1]
                                    }
                                },
                                {
                                    y:<?php echo $mh2->suara;?>,
                                    color:colors[2],
                                    drilldown:{
                                        name:'Maret',
                                        categories:['Maret'],
                                        data:[<?php echo $mh2->suara;?>],
                                        color:colors[2]
                                    }
                                },
                                {
                                    y:<?php echo $mh3->suara;?>,
                                    color:colors[3],
                                    drilldown:{
                                        name:'April',
                                        categories:['April'],
                                        data:[<?php echo $mh3->suara;?>],
                                        color:colors[3]
                                    }
                                },
                                {
                                    y:<?php echo $mh4->suara;?>,
                                    color:colors[4],
                                    drilldown:{
                                        name:'Mei',
                                        categories:['Mei'],
                                        data:[<?php echo $mh4->suara;?>],
                                        color:colors[4]
                                    }
                                },
                                {
                                    y:<?php echo $mh5->suara;?>,
                                    color:colors[5],
                                    drilldown:{
                                        name:'Juni',
                                        categories:['Juni'],
                                        data:[<?php echo $mh5->suara;?>],
                                        color:colors[5]
                                    }
                                },
                                {
                                    y:<?php echo $mh6->suara;?>,
                                    color:colors[6],
                                    drilldown:{
                                        name:'Juli',
                                        categories:['Juli'],
                                        data:[<?php echo $mh6->suara;?>],
                                        color:colors[6]
                                    }
                                },
                                {
                                    y:<?php echo $mh7->suara;?>,
                                    color:colors[7],
                                    drilldown:{
                                        name:'Agustus',
                                        categories:['Agustus'],
                                        data:[<?php echo $mh7->suara;?>],
                                        color:colors[7]
                                    }
                                },
                                {
                                    y:<?php echo $mh8->suara;?>,
                                    color:colors[8],
                                    drilldown:{
                                        name:'September',
                                        categories:['September'],
                                        data:[<?php echo $mh8->suara;?>],
                                        color:colors[8]
                                    }
                                },

                                {
                                    y:<?php echo $mh9->suara;?>,
                                    color:colors[9],
                                    drilldown:{
                                        name:'Oktober',
                                        categories:['Oktober'],
                                        data:[<?php echo $mh9->suara;?>],
                                        color:colors[9]
                                    }
                                },
                                {
                                    y:<?php echo $mh10->suara;?>,
                                    color:colors[10],
                                    drilldown:{
                                        name:'September',
                                        categories:['September'],
                                        data:[<?php echo $mh10->suara;?>],
                                        color:colors[10]
                                    }
                                },

                                {
                                    y:<?php echo $mh11->suara;?>,
                                    color:colors[11],
                                    drilldown:{
                                        name:'Desember',
                                        categories:['Desember'],
                                        data:[<?php echo $mh11->suara;?>],
                                        color:colors[11]
                                    }
                                },
                            ];
                    function setChart(name, categories, data, color) {
                        chart.xAxis[0].setCategories(categories, false);
                        chart.series[0].remove(false);
                        chart.addSeries({
                            name:name,
                            data:data,
                            color:color || 'white'
                        }, false);
                        chart.redraw();
                    }
                    chart = new Highcharts.Chart({
                        chart:{
                            renderTo:'container',
                            type:'column'
                        },
                        title:{
                            text:'PEROLEHAN SEMENTARA DANA PEMBANGUNAN MASJID AT-TAQWA PURI KEDUMULYO'
                        },
                        subtitle:{
                            text:'Periode Tahun  Pembangunan 2018-2019'
                        },
                        xAxis:{
                            categories:categories
                        },
                        yAxis:{
                            title:{
                                text:'Perolehan Dana Infak Shodakoh Sementara'
                            }
                        },
                        plotOptions:{
                            column:{
                                cursor:'pointer',
                                point:{
                                    events:{
                                        click:function () {
                                            var drilldown = this.drilldown;
                                            if (drilldown) { // drill down
                                                setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
                                            } else { // restore
                                                setChart(name, categories, data);
                                            }
                                        }
                                    }
                                },
                                dataLabels:{
                                    enabled:true,
                                    color:colors[0],
                                    style:{
                                        fontWeight:'bold'
                                    },
                                    formatter:function () {
                                        return this.y + '';
                                    }
                                }
                            }
                        },
                        tooltip:{
                            formatter:function () {
                                var point = this.point,
                                        s = this.x + ':<b>' + this.y + ' Infak Shodakoh</b><br/>';
                                if (point.drilldown) {
                                    s += 'Click to Detail ' + point.category + ' detail ';
                                } else {
                                    s += 'Click Again to back';
                                }
                                return s;
                            }
                        },
                        series:[
                            {
                                name:name,
                                data:data,
                                color:'red'
                            }
                        ],
                        exporting:{
                            enabled:false
                        }
                    });
                });
            });
        </script>
    </div>
  </div>
</div>
</div>
 
    <div class="col-lg-12">
    <div class="animated fadeIn">
    <div class="card">
        <div class="card-header">
            <center><strong class="card-title" style="text-transform: uppercase;">
            Tabel Pendapatan Dana Infak Shodakoh Pembangunan Masjid AT-TAQWA Per RT</strong></center>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th rowspan="2">#</th>
                  <th rowspan="2" colspan="1">Nama Bulan</th>
                  <th colspan="7">Rt</th>
                  <!-- <th rowspan="2">Tidak Sah</th> -->
                </tr>
               <?php 
                  echo '<tr>';
                    foreach ($rt as $row) {
                      echo '<td style="text-transform: capitalize; font-size: 8pt; font-weight:bold; color:#e74c3c">';
                        echo $row['nama_rt'];
                      echo '</td>';
                  } 
                  echo "<th style='text-align:left'>Jumlah</th>";
                  echo '</tr>';
                ?>

              </thead>

            <?php $no=0; $h=1; $col=array(0,0,0,0,0,0,0); 
              foreach ($query as $row):?>
              <tbody>
                <tr>
                  <td><?php echo ++$no; ?></td>
                  <td><?php echo $row['nama_bulan'] ?></td>

                    <?php $tot=$i=0;
                    
                      foreach ($totrt as $r) {
                        echo '<td>';
                        echo rupiah($r['h_'.$h]);

                        $tot+=$r['h_'.$h];
                        $col[$i]+=$r['h_'.$h];
                        
                        echo '</td>';
                    $i++; } ?>
                  <td style="color: blue"><b><?php echo rprupiah($tot); $col[$i]+=$tot;?></b></td>
                </tr>

            <?php $h++; endforeach; ?>
            <tr >
              <th colspan="2" style="text-align: left; background-color: #fff555">Total</th>

              <?php foreach ($col as $key => $val) { ?>
                <th style="text-align: left;background-color: #fff555; font-size: 15px">
                  <?php echo rprupiah($val) ?></th>
              <?php } ?>

            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
  

    <!-- Right Panel -->
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/plugins.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/main.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/bootstrap.min.js"></script>


    <script src="<?php echo base_url() ?>template/assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/dashboard.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/widgets.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/lib/vector-map/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/lib/vector-map/jquery.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>


    <script src="<?php echo base_url() ?>template/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/lib/data-table/datatables-init.js"></script>
    
    <script src="<?php echo base_url()?>template/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>template/assets/chart/jqxcore.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>template/assets/chart/jqxdraw.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>template/assets/chart/jqxchart.core.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>template/assets/chart/jqxdata.js" type="text/javascript"></script>     
    
</body>
</html>



