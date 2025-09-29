
                <div class="container-fluid">
                    <h1 class="h3 mb-2 text-gray-800"><?= $judul;?></h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Kode Transaksi</th>
                                            <th>Konsumen</th>
                                            <th>Paket</th>
                                            <th>Berat (Kg)</th>
                                            <th>Grand Total</th>
                                            <th>Tanggal Ambil</th>
                                            <th>Status Bayar</th>
                                            <th>Status</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
							
									<tbody>
                                        
                                    <?php 
                                        $no = 1;
                                        foreach ($data as $row) { ?>
                                            <tr>
                                                <td><?= $no++;?></td>
                                                <td><?= $row->tgl_masuk;?></td>
                                                <td><?= $row->kode_transaksi;?></td>
                                                <td><?= $row->nama_konsumen;?></td>
                                                <td><?= $row->nama_paket;?></td>
                                                <td><?= $row->berat;?></td>
                                                <td><?= "Rp. ".number_format($row->grand_total,0,'.','.');?></td>
                                                <td><?= $row->tgl_ambil;?></td>
                                                <td><?= $row->bayar;?></td>
                                                <td><?= $row->status;?></td>
                                                <td>
                                                    <a href="" class="btn btn-warning btn-sm">Detail</a>
                                                    <a href="" class="btn btn-success btn-sm">Edit</a>
                                                </td>
                                            </tr>
                                       <?php }
                                    ?>
										
									</tbody>
									</table>
							</div>
						</div>
					</div>

				
