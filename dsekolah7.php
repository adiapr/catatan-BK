<?php
	include('pages/head.php');
?>
<body>
	<div class="wrapper">
		<?php include("pages/header.php"); ?>
		<!-- Sidebar -->
		<?php include("pages/sidebar.php"); ?>
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Data Sekolah</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Data Sekolah</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Kelas 7</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
                                    <h4 class="card-title pull-left">List Data</h4>
                                    <button class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#tambahData"><i class="fa fa-plus"></i> Tambah Data</button>
                                    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><b>Tambah Data</b></h5>
                                            <!-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button> -->
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Nama Kelas</label>
                                                        <input id="Name" type="text" class="form-control" placeholder="Fill Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Nama Wali Kelas</label>
                                                        <input id="Name" type="text" class="form-control" placeholder="Fill Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>NIP Wali Kelas</label>
                                                        <input id="Name" type="text" class="form-control" placeholder="Fill Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Nama Guru BK</label>
                                                        <input id="Name" type="text" class="form-control" placeholder="Fill Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>NIP Guru BK</label>
                                                        <input id="Name" type="text" class="form-control" placeholder="Fill Name">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="basic-datatables" class="display table table-hover" >
											<thead>
												<tr>
													<th>#</th>
													<th>Nama Kelas</th>
													<th>Nama Wali Kelas</th>
													<th>NIP Wali Kelas</th>
													<th>Nama Guru BK</th>
                                                    <th>NIP Guru BK</th>
                                                    <th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
													<td>61</td>
													<td>2011/04/25</td>
                                                    <td>$320,800</td>
                                                    <td>
                                                        <div style="width:170px"></div>
                                                        <a href="#" data-toggle="modal" data-target="#editData" class="btn-primary btn-sm"><i class="fa fa-edit"></i> Edit </a> &nbsp;
                                                        <div class="modal fade" id="editData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel"><b>Tambah Data</b></h5>
                                                                    <!-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">x</button> -->
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group form-group-default">
                                                                                <label>Nama Kelas</label>
                                                                                <input id="Name" type="text" class="form-control" placeholder="Fill Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group form-group-default">
                                                                                <label>Nama Wali Kelas</label>
                                                                                <input id="Name" type="text" class="form-control" placeholder="Fill Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group form-group-default">
                                                                                <label>NIP Wali Kelas</label>
                                                                                <input id="Name" type="text" class="form-control" placeholder="Fill Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group form-group-default">
                                                                                <label>Nama Guru BK</label>
                                                                                <input id="Name" type="text" class="form-control" placeholder="Fill Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group form-group-default">
                                                                                <label>NIP Guru BK</label>
                                                                                <input id="Name" type="text" class="form-control" placeholder="Fill Name">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="btn-danger btn-sm"><i class="fa fa-trash"></i> Edit </a> 
                                                    </td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include("pages/footer.php"); ?>
		</div>
	</div>
	<!--   Core JS Files   -->
	<?php include("pages/foot.php"); ?>
</body>
</html>