<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenuadmin()
	{
		return '<li>
		<a href="'.site_url('pegawaiadmin').'"><i class="lnr lnr-menu"></i> Pegawai</a>
	</li><li>
		<a href="'.site_url('divisiadmin').'"><i class="lnr lnr-menu"></i> Divisi</a>
	</li><li>
		<a href="'.site_url('barangadmin').'"><i class="lnr lnr-menu"></i></i> Barang</a>
	</li><li>
		<a href="'.site_url('AdminLogin/logout').'"><i class="lnr lnr-menu"></i></i> Log Out</a>
	</li><li>';
	}
	function generate_sidemenudirektur()
	{
		return '<li>
		<a href="'.site_url('pegawaidirektur').'"><i class="lnr lnr-menu"></i></i> Pegawai</a>
	</li><li>
		<a href="'.site_url('divisidirektur').'"><i class="lnr lnr-menu"></i></i> Divisi</a>
	</li><li>
		<a href="'.site_url('barangdirektur').'"><i class="lnr lnr-menu"></i></i> Barang</a>
	</li><li>
		<a href="'.site_url('DirekturLogin/logout').'"><i class="lnr lnr-menu"></i></i> Log Out</a>
	</li><li>';
	}
		function generate_sidemenupegawai()
	{
		return '<li>		
		<a href="'.site_url('barangpegawai').'"><i class="lnr lnr-menu"></i></i> Barang</a>
	</li><li>
		<a href="'.site_url('PegawaiLogin/logout').'"><i class="lnr lnr-menu"></i></i> Log Out</a>
	</li><li>';
	}

	function generate_index()
	{
		return 
		'
		<li role="presentation"><a href="'.site_url('depan').'">Home</a></li>
		<li role="presentation"><a href="'.site_url('about').'">About Us</a></li>
		<li role="presentation"><a href="'.site_url('contact').'">Contact</a></li>		
		';
	}