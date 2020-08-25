<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="<?php echo base_url() ?>template/apple-icon.png">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/kds.png">
    <link rel="stylesheet" href="<?php echo base_url() ?>template/assets/css/normalize.css">
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

	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap-clockpicker.min.css">
	
</head>
<style type="text/css" rel="stylesheet">
body{
    font-size:10pt;
    /* font-family:Cursive; */
}
    tr, th, td {
    text-transform: capitalize;
}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 12px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 120px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 5px 9px;
    margin-left:-5px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
#notifications {
    cursor: pointer;
    position: fixed;
    right: 0px;
    z-index: 9999;
    top: 2px;
    /* margin-bottom: 22px; */
    margin-right: 2px;
    min-width: 400px; 
    max-width: 800px;  
}
</style>
<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
                
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"> 
						<a href="<?php echo base_url('admin/c_dashboard')?>">
						<img  src="<?php echo base_url() ;?>template/images/logo.png" alt="" width="50px"></a>
                    </li>
					<h3 class="menu-title"><span class="text-danger"><?=$this->session->userdata('ssk')?></span></h3><!-- /.menu-title -->
					
					<!-- <li class="<?php echo activate_menu('home'); ?>">
                        <a href="<?php echo base_url('admin/c_dashboard') ;?>" class="dropdown-toggle"><i class="menu-icon fa fa-home fa-lg"></i>DASHBOARD</a>
                    </li> -->
                    
                    <li class="<?php echo activate_menu('home'); ?>">
                        <a href="<?php echo base_url('admin/C_pasien')?>" class="dropdown-toggle"><i class="menu-icon fa fa-home fa-lg"></i>Data Karantina</a>
                    </li>

                    <li class="<?php echo activate_menu('home'); ?>">
                        <a href="<?php echo base_url('admin/C_karantina')?>" class="dropdown-toggle"><i class="menu-icon fa fa-file fa-lg"></i>Jumlah Pasien Karantina</a>
                    </li>
				
					<!-- menu untuk superadmin -->
					<?php if($this->session->userdata('level') == 'superadmin' )  {
                        $db = $this->db->query("SELECT * FROM data_mudik 
                        left join districts on districts.id = data_mudik.kecamatan_tujuan 
                        where regency_id='3319' group by districts.name order by name asc");
                          foreach ($db->result_array() as $k){
                                if($this->uri->segment(2) == "admin/C_pemudik/detail/") {
                                        $a = "show";
                                    } else {
                                        $a = null;
                                }
                          }
                    ?> 
                     <li class="<?php echo activate_menu('home'); ?>">
                        <a href="<?php echo base_url('admin/C_pemudik')?>" class="dropdown-toggle"><i class="menu-icon fa fa-cog fa-lg"></i>Data Pemudik</a>
                    </li>
					<li class="menu-item-has-children dropdown show">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i>Pemudik Per Kecamatan</i></a>
                        <ul class="sub-menu children dropdown-menu show ">
                            <?php $db = $this->db->query("SELECT * FROM data_mudik 
                                left join districts on districts.id = data_mudik.kecamatan_tujuan 
                                where regency_id='3319' group by districts.name order by name asc"); 

                                foreach ($db->result_array() as $k){ ?>
                                <li><i class="fa fa-user-o"></i><a href="<?php echo base_url().'admin/C_pemudik/detail/'.$k['kecamatan_tujuan']; ?>"><?php echo $k['name'];?></a></li>
                            <?php } ?>
                            <!-- <li><i class="fa fa-users"></i><a href="<?php echo base_url('admin/C_pasien')?>">Pasien</a></li>
                            <li><i class="fa fa-calendar-o"></i><a href="<?php echo base_url('admin/C_penyemprotan')?>">Penyemprotan</a></li>
							<li><i class="fa fa-home"></i><a href="<?php echo base_url('admin/C_warga')?>">Penyelenggara</a></li>
							<li><i class="fa fa-tag"></i><a href="<?php echo base_url('admin/C_maps')?>">Peta</a></li>
							<li><i class="fa fa-user-o"></i><a href="<?php echo base_url('admin/C_user')?>">User</a></li>
							<li><i class="fa fa-sign-out"></i><a href="<?php echo base_url('admin/C_corona/logout')?>" onclick="return confirm('Anda yakin logout?');">Log out</a></li> -->
                        </ul>
					</li>
                    <?php } ?>

                    
                    










					
					<!-- menu untuk admin  -->
                    <?php if($this->session->userdata('level') == 'admin' )  {
                        if($this->uri->segment(2) == "C_penyemprotan" || $this->uri->segment(2) == "C_user" ) {
                                $a = "show";
                            } else {
                                $a = null;
                        }
					?> 
					<li class="menu-item-has-children dropdown <?=$a?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-folder"></i>Master</i></a>
                        <ul class="sub-menu children dropdown-menu <?=$a?>">
							<li><i class="fa fa-calendar-o"></i><a href="<?php echo base_url('admin/C_penyemprotan')?>">Penyemprotan</a></li>
							<li><i class="fa fa-user-o"></i><a href="<?php echo base_url('admin/C_user')?>">User</a></li>
							<li><i class="fa fa-sign-out"></i><a href="<?php echo base_url('admin/C_corona/logout')?>" onclick="return confirm('Anda yakin logout?');">Log out</a></li>
                        </ul>
					</li>
                    <?php } ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
    <!-- Left Panel -->

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">
				
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left"></div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?php echo base_url() ?>template/images/avatar/1.jpg" alt="User Avatar">
                        </a>
						
                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="<?php echo base_url('admin/C_user');?>"><i class="fa fa- user">My Profile</i></a>
                                <!-- <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a> -->
                                <a class="nav-link" href="<?php echo base_url('admin/C_corona/logout'); ?>" onclick="return confirm('Anda yakin logout?');"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
                </div>
			</div>

        </header>
        <!-- Header-->

       
        <!-- Content -->
        <div class="content mt-3">

            <?php include "main_content.php"; ?>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    <script src="<?php echo base_url() ?>template/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/plugins.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/main.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url() ?>template/assets/js/lib/data-table/datatables.min.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>template/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>template/assets/js/lib/data-table/datatables-init.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-clockpicker.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
           $('#datatable').DataTable();
           $('#analisis').DataTable();

        } );
    </script>

    

    <script>
        ( function ( $ ) {
            "use strict";
            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

    <script type="text/javascript">
        $('.clockpicker').clockpicker({
            placement: 'bottom',
            align: 'left',
            donetext: 'Done'
        });
	</script>

</body>
</html>

