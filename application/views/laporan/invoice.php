<div class="row">
	<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS -->
		<div class="space-6"></div>

		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="widget-box transparent">
					<div class="widget-header widget-header-large">
						<h3 class="widget-title grey lighter">
							<i class="ace-icon fa fa-leaf green"></i>
							<?php echo $status; ?>
						</h3>

						<div class="widget-toolbar no-border invoice-info">
							<span class="invoice-info-label">Invoice:</span>
							<span class="red"><?php echo $this->uri->segment(3); ?></span>

							<br />
							<span class="invoice-info-label">Date:</span>
							<span class="blue"><?php echo $tgl->tanggal; ?></span>
						</div>
					</div>

<div class="widget-body">
	<div class="widget-main padding-24">
		<div class="row">
			<div class="col-sm-6">
				<div class="row">
					<div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right">
						<b>Info toko</b>
					</div>
				</div>
				<div>
					<ul class="list-unstyled spaced">
						<li>
							<i class="ace-icon fa fa-caret-right blue"></i>Nusa tenggara barat
						</li>

						<li>
							<i class="ace-icon fa fa-caret-right blue"></i>Raberas, Kelurahan seketeng
						</li>

						<li>
							<i class="ace-icon fa fa-caret-right blue"></i>
							Phone:
							<b class="red">085338231441</b>
						</li>

						
					</ul>
				</div>
			</div><!-- /.col -->

			<div class="col-sm-6">
				<div class="row">
					<div class="col-xs-11 label label-lg label-success arrowed-in arrowed-right">
						<b>Customer Info</b>
					</div>
				</div>

				<div>
					<ul class="list-unstyled  spaced">
						<li>
							<i class="ace-icon fa fa-caret-right green"></i><?php echo $pelanggan->nama;?>
						</li>

						<li>
							<i class="ace-icon fa fa-caret-right green"></i><?php echo $pelanggan->alamat;?>
						</li>

						<li>
							<i class="ace-icon fa fa-caret-right green"></i><?php echo $pelanggan->no_hp;?>
						</li>

					</ul>

				</div>
			</div><!-- /.col -->
		</div><!-- /.row -->

		<div class="space"></div>

		<div>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th class="center">No.</th>
						<th>Nama Barang</th>
						<th>Jumlah Barang</th>
						<th>Harga</th>
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
							<?php echo $n->nama_brg;?>
						</td>
						<td>
							<?php echo $n->jml_brg;?>
						</td>
						<td>
							Rp <?php echo number_format($n->harga_brg,0,".",".") ;?>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>

		<div class="hr hr8 hr-double hr-dotted"></div>

		<div class="row">
			<div class="col-sm-5 pull-right">
				<h4 class="pull-right">
					 Total Bayar : 
					 <span class="red">Rp 
					<?php
						echo number_format($total->total,0,".",".");
					 ?></span>
				</h4>
			</div>
		</div>

		<div class="space-6"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->