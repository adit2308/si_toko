<head>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" media="print">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace.min.css" class="ace-main-stylesheet" media="print">
	<script type="text/javascript" media="print">
		window.print();
	</script>
	<style>

	@page {
	  size: auto;
	  margin : 5px;
	}

	table {
		font-size: 12px;
		font-family: 'Times New Roman';
	}

	th,td {
		font-size: 12px;
		font-family: 'Times New Roman';
	}

.detail {
	padding-top: 5px;
   -webkit-column-count: 2; /* Chrome, Safari, Opera */
   -moz-column-count: 2; /* Firefox */
   column-count: 2;
}

li {
padding: 4px;
font-size: 14px;
font-family: 'Times New Roman';
list-style: none;
}

.kepala {
	padding-left: 200px;
}
</style>
</head>

<div class="col-md-3">
	<ul>
		<li><strong><span style="font-size: 32px;">UD. ALAM RAYA</strong><br> ALAMAT: JLN. RABERAS KELURAHAN SEKETENG</li>
	</ul>


</div>
<div class="col-md-3">
	<ul>
		<li><strong>Tanggal</strong>  <?=date('d M Y');?></li>
		<li><strong>Tuan 	 :</strong> <?php echo $pelanggan->nama;?></li>
		<li><strong>Alamat :</strong> <?php echo $pelanggan->alamat;?></li>
		<li><strong>NO. HP   :</strong> <?php echo $pelanggan->no_hp;?></li>
	</ul>
	<ul>
		<li><strong>Nonota : </strong> <?=$nonota;?></li>
	</ul>
</div>
<body>
	<div class="row">
	<!-- ============================================================================================================================================================================================== <br>
	<span style="padding-left: 50px;">#</span> 
	<span class="kepala">Nm Barang</span> 
	<span style="padding-left:10cm;">Banyaknya</span> 
	<span style="padding-left:2cm;">Harga/pcs</span>
	<span class="kepala">Subtotal</span> <br>
	============================================================================================================================================================================================== -->
			<table class="table table-striped table-bordered">
			<thead>
					<tr>
						<th class="center">#</th>
						<th>Nama Barang</th>
						<th>Banyaknya</th>
						<th>Harga / Satuan</th>
						<th>Subtotal</th>
					</tr>
				</thead>
				<tbody>
					<tr>
				<?php 
				$no = 1 ;
				foreach ($nota as $n) {
				?>
						<td class="center"><?php echo $no++ ;?></td>

						<td>
							<?php echo $n->nama_brg . '('. $n->sub_1 . ')' ;?>
						</td>
						<td>
							<?php echo $n->jml_brg;?>
						</td>
						<td>
							Rp <?php echo number_format($n->harga_brg,0,".",".") ;?>
						</td>
						<td>
							Rp <?php echo number_format($n->harga_brg*$n->jml_brg,0,".",".") ;?>
						</td>
					</tr>
				<?php } ?>

				<tr>
					<td></td>
					<td>Garansi <?=$n->garansi;?></td>
					<td></td>
					<td></td>
				</tr>
				</tbody>
			</table>
			<div align="right" style="margin-right: 3cm;">
					Total Bayar <br>
					Rp <?php echo number_format($this->cart->total(),0,".",".");
					 ?>
				</div>
	<div class="col-sm-6">
		
	</div>
	</div>
</body>