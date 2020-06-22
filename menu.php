<?php
if(!defined('OFFDIRECT')) include 'error404.php';
?>
<div class="col-md-3 left_col">
	<div class="left_col scroll-view">
		<div class="navbar nav_title" style="border: 0;">
		  <a href="" class="site_title">
			<img src="<?php echo $baseURL; ?>assets/images/logo.png" alt="Logo" 
			style="margin-top:-50px;width:200px;height:170px;">
		  </a>
		</div>
		<div class="clearfix"></div>
		<br />
		<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
		  <div class="menu_section">
			<h3>General</h3>
			<ul class="nav side-menu">
			  <li><a href='<?php echo $baseURL; ?>main' title='Homepage'><i class="fa fa-home"></i> Home </a>
			  </li>

			  <li><a><i class="glyphicon glyphicon-user"> </i> Karyawan <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<!-- sub menu ini akan dieksekusi file data.php pada folder object -->
				  <li><a href="<?php echo $baseURL; ?>petugas/data">Data Karyawan</a></li>
				</ul>
			</li>
			  <li><a><i class="glyphicon glyphicon-folder-close"></i> Barang <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<!-- sub menu ini akan dieksekusi file data.php pada folder object -->
				  <li><a href="<?php echo $baseURL; ?>object/data">Data Barang</a></li>
				  <li><a href="<?php echo $baseURL; ?>Kategori/Kategori">Model Piano</a></li>
 				</ul>
			  </li>
			   <li><a><i class="glyphicon glyphicon-folder-close"></i> Departement <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<!-- sub menu ini akan dieksekusi file data.php pada folder object -->
				  <li><a href="<?php echo $baseURL; ?>bagian/datasup">Bagian</a></li>
 				</ul>
			  </li>
			  <li><a><i class="glyphicon glyphicon-print"></i> Cetak Laporan <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<!-- sub menu ini akan dieksekusi file add.php pada folder procurement -->
				  <li><a href="<?php echo $baseURL; ?>report/officer">Report</a></li>
				  
				</ul>
			  </li>
			 
			 
			</ul>
		  </div>
		</div>
	</div>
</div>
