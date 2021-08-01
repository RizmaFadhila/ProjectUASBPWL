<div class="container">
	<div align="center">
		<form action="" method="POST">
			<table class="table table-hover" border="1">
				<thead class="thead-dark">
					<tr>
						<th>ID Order</th>
						<th>Nama Pelanggan</th>
						<th>Tanggal</th>
						<th>Nama User</th>
						<th>Meja</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
					require_once "function/class.transaksi.php";
					$trans = new Transaksi();
					$no   = 1;
					$select = $trans->tampil();
					foreach ($select as $data) {
					?>
						<tr>
							<td><?php echo $data['id_pesanan'] ?></td>
							<td><?php echo $data['nama'] ?></td>
							<td><?php echo $data['tanggal'] ?></td>
							<td><?php echo $data['user'] ?></td>
							<td><?php echo $data['meja'] ?></td>
							<td>
								<a href="transaksi.php?id_pesanan=<?php echo $data['id_pesanan']; ?>">Lihat Detail</a></a>
							</td>
						</tr>
					<?php } ?>
				</tbody>

			</table>
		</form>
	</div>
</div>