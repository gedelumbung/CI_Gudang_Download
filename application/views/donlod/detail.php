<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Gudang Download - Gede Lumbung [dot] com</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta content='Ini dia Gudang Download dari blog GedeLumbung.com, tempatnya source code dari berbagai file tutorial yang di blog GedeLumbung.com...!!!' name='description'/>
        <meta content='php, codeigniter, php framework, android, flash, animasi, animasi flash, design pattern, curhat, pemrograman, c#, algoritma, linux, desain web, open source' name='keywords'/>
        <link href="http://gedelumbung.com/wp-content/themes/lumbung/images/logo-icon.png" rel="shortcut icon" type="image/x-icon" />
        <link href="<?php echo base_url(); ?>asset/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div id="navigasi">Gudang Download File Tutorial [www.gedelumbung.com] - <?php echo date('Y'); ?> || <a href="http://gedelumbung.com" target="_blank">Copyleft Ng'Blog Biar Gak GobloG - Blog'Nya Gede Lumbung</a></div>
	<div id="head-panel">
		<div id="inner-head-panel">
			<div id="inner-head-panel-left">
				<a href="http://gedelumbung.com" target="_blank"><img src="<?php echo base_url(); ?>asset/images/logo.png" height="70" border="0"></a>
			</div>
			<div id="inner-head-panel-right">
				Selamat datang agan, <strong><?php echo $em; ?></strong> | <strong><a href="<?php echo base_url(); ?>donlod/logout">Log Out</a></strong>
				<div class="fb-like" data-href="http://gedelumbung.com" data-send="true" data-width="500" data-show-faces="false" data-font="tahoma"></div>
			</div>
		</div>
	</div>
<div class="container">
<div id="content-detail-left">
	<?php
		foreach($detail->result_array() as $d)
		{
			echo "<h5>Diposting tanggal ".$d['tgl_posting']." | Oleh Gede Lumbung</h5>";
			echo "<h1>".$d['judul_artikel']."</h1>";
			echo "<h5>".$d['hitung']." kali download</h5>";
			?>
				<div style="clear:both; width:100%; height:15px;"></div>
				<a href="<?php echo $d['link_artikel']; ?>" title="Baca : <?php echo $d['judul_artikel']; ?>" target="_blank"><img src="<?php echo base_url(); ?>
				asset/images/baca.png" border="0" /></a>
				<div style="clear:both; width:100%; height:10px;"></div>
					<form method="post" action="<?php echo base_url(); ?>donlod/ambil/" target="_blank">
						<input type="image" src="<?php echo base_url(); ?>asset/images/btn_download.png">
						<input type="hidden" name="id" value="<?php echo $d['id_download']; ?>" />
					</form>
				<div style="clear:both; width:100%; height:10px;"></div>
				<a href="<?php echo base_url(); ?>" title="Kembali ke Dashboard"><img src="<?php echo base_url(); ?>asset/images/dashboard.png" border="0" /></a>
			<?php
		}
	?>
</div>
<div id="content-detail-right">
	<iframe src="http://gedelumbung.com/wp-content/themes/lumbung/news-ticker/index.php" frameborder="0" autoscrolling="no" width="430" height="400"></iframe>
</div>
</div>
</body>
</html>
