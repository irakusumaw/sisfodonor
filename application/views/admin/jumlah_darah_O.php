<div class="container-fluid">
	<h4><center><strong>JUMLAH DARAH MASUK</strong></center></h4>
	<button onclick="window.print();">Cetak</button>
	<table class="table table-bordered">
		<tr>
<!-- 			<th>ID</th> -->
			<th>NO</th>
			<th>TANGGAL</th>
			<th>NAMA KEGIATAN</th>
			<th>JUMLAH DARAH O</th>
			
		</tr>
		<?php
		$no=1;
		foreach($s as $s) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $s->tanggal ?></td>
			<td><?php echo $s->nama_kgt ?></td>
			<td><?php echo $s->O ?></td>
<!-- 			<td><?php echo $o->B ?></td>
			<td><?php echo $o->O ?></td>
			<td><?php echo $o->AB ?></td> -->
		<?php endforeach; ?>
<!-- 		<?php
		foreach($k as $k) : ?>
			<td><?php echo $k->golongan_darah ?></td>
		<?php endforeach; ?>
		<?php
		foreach($l as $l) : ?>
			<td><?php echo $l->golongan_darah ?></td>
		<?php endforeach; ?>
		<?php
		foreach($s as $s) : ?>
			<td><?php echo $s->golongan_darah ?></td>
		<?php endforeach; ?>
		<?php
		foreach($n as $n) : ?>
			<td><?php echo $n->golongan_darah ?></td>
		<?php endforeach; ?> -->
		</tr>
	</table>


</div>