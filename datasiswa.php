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
						<h4 class="page-title">Data Siswa</h4>
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
							<!-- <li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li> -->
							<!-- <li class="nav-item">
								<a href="#">Kelas 7</a>
							</li> -->
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
                                <!-- <div class="card-header">
									<h4 class="card-title">List Data</h4>
								</div> -->
								
								<div class="card-body">
									<div class="row">
										<div class="col-4 col-md-3">
											<div class="nav flex-column nav-pills nav-secondary" id="v-pills-tab" role="tablist" aria-orientation="vertical">
												<a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Data Pribadi</a>
												<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Orang Tua</a>
                                                <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Data Wali</a>
												<a class="nav-link" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">Hasil Non Tes</a>
												<a class="nav-link" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">Kesehatan & Ekonomi</a>
												<a class="nav-link" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">Hubungan engan Teman</a>
												<a class="nav-link" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="false">Sikap & Tata Krama</a>
												<a class="nav-link" id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-8" aria-selected="false">Data Belajar</a>
												<a class="nav-link" id="v-pills-9-tab" data-toggle="pill" href="#v-pills-9" role="tab" aria-controls="v-pills-9" aria-selected="false">Nilai Raport</a>
												<a class="nav-link" id="v-pills-10-tab" data-toggle="pill" href="#v-pills-10" role="tab" aria-controls="v-pills-10" aria-selected="false">DPD</a>
												<a class="nav-link" id="v-pills-11-tab" data-toggle="pill" href="#v-pills-11" role="tab" aria-controls="v-pills-11" aria-selected="false">Rekomendasi Peminatan</a>
												<a class="nav-link" id="v-pills-12-tab" data-toggle="pill" href="#v-pills-12" role="tab" aria-controls="v-pills-12" aria-selected="false">Riwayat Mutasi</a>
                                                
											</div>
										</div>
										<div class="col-8 col-md-9">
											<div class="tab-content" id="v-pills-tabContent">
                                                <!-- data siswa  -->
												<div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-2-tab">
													<div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="smallInput">Nomor</label>
                                                                <input type="number" class="form-control form-control-sm" id="smallInput" placeholder="Masukkan nomor">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="smallInput">Bahasa Sehari-hari</label>
                                                                <input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small Input">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="smallInput">NISN</label>
                                                                <input type="number" class="form-control form-control-sm" id="smallInput" placeholder="Small Input">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="smallInput">Kewarganegaraan</label>
                                                                <input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small Input">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="smallInput">NIS</label>
                                                                <input type="number" class="form-control form-control-sm" id="smallInput" placeholder="Small Input">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="smallInput">Alamat</label>
                                                                <input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small Input">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="smallInput">Nama Lengkap</label>
                                                                <input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small Input">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="smallSelect">Tinggal dengan</label>
                                                                <select class="form-control form-control-sm" id="smallSelect">
                                                                    <option>Ayah Kandung</option>
                                                                    <option>Ibu Kandung</option>
                                                                    <option>Ayah Tiri</option>
                                                                    <option>Ibu Tiri</option>
                                                                    <option>Wali</option>
                                                                    <option>Numpang keluarga lain</option>
                                                                    <option>Kos</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="smallInput">Nama Panggilan</label>
                                                                <input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small Input">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="smallInput">Alasan tidak dg orang tua</label>
                                                                <input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small Input">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="smallInput">Tempat Lahir</label>
                                                                <input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small Input">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="smallInput">Tanggal Lahir</label>
                                                                <input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small Input">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="smallSelect">Lingkungan dekat dengan</label>
                                                                <select class="form-control form-control-sm" id="smallSelect">
                                                                    <option>Madrasah</option>
                                                                    <option>Asrama Militer</option>
                                                                    <option>Komplek perumahan biasa</option>
                                                                    <option>Rumah MAsyarakat</option>
                                                                    <option>PAsar/Pertokoan</option>
                                                                    <option>Tempat Hiburan</option>
                                                                    <option>Pabrik</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="smallInput">Anak Ke</label>
                                                                <div class="row">
                                                                <div  class="col-md-4">
                                                                    <input type="number" style="width:100px"  class="form-control form-control-sm" id="smallInput">     
                                                                </div>
                                                                <div  class="col-4">
                                                                    Dari    
                                                                </div>
                                                                <div  class="col-4">
                                                                    <input type="number" style="width:100px"  class="form-control form-control-sm pull-right" id="smallInput">    
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="smallSelect">Jenis Kelamin</label>
                                                                <select class="form-control form-control-sm" id="smallSelect">
                                                                    <option>Laki - Laki</option>
                                                                    <option>Perempuan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="smallSelect">Agama</label>
                                                                <select class="form-control form-control-sm" id="smallSelect">
                                                                    <option>Islam</option>
                                                                    <option>Hindu</option>
                                                                    <option>Budha</option>
                                                                    <option>Katolik</option>
                                                                    <option>Kristen</option>
                                                                    <option>Lainnya</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="smallInput">Golongan Darah</label>
                                                                <input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small Input">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <b>Riwayat Kelas :</b>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="smallInput">Kelas 7</label>
                                                                            <input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small Input">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="smallInput">Kelas 8</label>
                                                                            <input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small Input">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="form-group">
                                                                            <label for="smallInput">Kelas 9</label>
                                                                            <input type="text" class="form-control form-control-sm" id="smallInput" placeholder="Small Input">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
												</div>
												<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
													<!--data orag tua -->
													<div class="row">
													    <div class="col-md-5 border" style="padding:10px">
													        <h3 class="text-center">Ibu Kandung</h3>
													        <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Nama</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="nama">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Alamat</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="alamat">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Pekerjaan</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="pekerjaan">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Pendidikan</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="pendidikan">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Agama</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="agama">
                                                                </div>
                                                            </div>
													    </div>
													    <div class="col-md-5 border ml-3" style="padding:10px">
													        <h3 class="text-center">Ayah Kandung</h3>
													        <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Nama</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="nama">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Alamat</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="alamat">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Pekerjaan</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="pekerjaan">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Pendidikan</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="pendidikan">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Agama</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="agama">
                                                                </div>
                                                            </div>
													    </div>
													    <div class="col-md-5 border mt-3" style="padding:10px">
													        <h3 class="text-center">Ibu Tiri</h3>
													        <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Nama</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="nama">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Alamat</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="alamat">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Pekerjaan</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="pekerjaan">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Pendidikan</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="pendidikan">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Agama</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="agama">
                                                                </div>
                                                            </div>
													    </div>
													    <div class="col-md-5 border ml-3 mt-3" style="padding:10px">
													        <h3 class="text-center">Ayah Tiri</h3>
													        <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Nama</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="nama">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Alamat</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="alamat">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Pekerjaan</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="pekerjaan">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Pendidikan</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="pendidikan">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Agama</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="agama">
                                                                </div>
                                                            </div>
													    </div>
													</div>
												</div>
												<div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
												    <!--Data Wali-->
												    <div class="col-md-12 border" style="padding:10px">
													        <h3 class="text-center">Data Wali</h3>
													        <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Nama</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="nama">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Alamat</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="alamat">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Pekerjaan</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="pekerjaan">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Pendidikan</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="pendidikan">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="smallInput">Agama</label>
                                                                    <input type="text" class="form-control form-control-sm" id="smallInput" name="agama">
                                                                </div>
                                                            </div>
													</div>
													
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                                                    <!-- hasil non tes  -->
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <table class="table table-sm table-hover table-responsive text-center">
                                                                <thead>
                                                                    <tr>
                                                                    <th scope="col" style="height:10px;"></th>
                                                                    <th scope="col"><div style="width:100px">KELAS 7</th>
                                                                    <th scope="col"><div style="width:100px">KELAS 8</th>
                                                                    <th scope="col"><div style="width:100px">KELAS 9</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row" style="height:35px;">KEDISIPLINAN</th>
                                                                        <td style="height:30px;">
                                                                            <select name="kedisiplinan7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="kedisiplinan8" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="kedisiplinan9" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" style="height:35px;">KEJUJURAN</th>
                                                                        <td style="height:30px;">
                                                                            <select name="kejujuran7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="kejujuran8" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="kejujuran9" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" style="height:35px;">KETABAHAN</th>
                                                                        <td style="height:30px;">
                                                                            <select name="ketabahan7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="ketabahan8" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="ketabahan9" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" style="height:35px;">KESABARAN</th>
                                                                        <td style="height:30px;">
                                                                            <select name="kesabaran7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="kesabaran8" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="kesabaran9" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" style="height:35px;">KEMAUAN</th>
                                                                        <td style="height:30px;">
                                                                            <select name="kemauan7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="kemauan8" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="kemauan9" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" style="height:35px;">KEBERSIHAN</th>
                                                                        <td style="height:30px;">
                                                                            <select name="kebersihan7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="kebersihan8" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="kebersihan9" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" style="height:35px;">KERAPIHAN</th>
                                                                        <td style="height:30px;">
                                                                            <select name="kerapihan7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="kerapihan8" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="kerapihan9" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" style="height:35px;">KETIDAKSETIAKAWANAN</th>
                                                                        <td style="height:30px;">
                                                                            <select name="ketidaksetiakawanan7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="ketidaksetiakawanan8" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="ketidaksetiakawanan9" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" style="height:35px;">SOPANSANTUN</th>
                                                                        <td style="height:30px;">
                                                                            <select name="sopansantun7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="sopansantun8" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="sopansantun9" class="form-control form-control-sm" id="smallSelect">
                                                                            <option value="">-- Pilh --</option>
                                                                                <option value="">-- Pilh --</option><option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row" style="height:35px;">TANGGUNGJAWAB</th>
                                                                        <td style="height:30px;">
                                                                            <select name="tanggungjawab7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="tanggungjawab8" class="form-control form-control-sm" id="smallSelect">
                                                                                <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                        <td style="height:30px;">
                                                                            <select name="tanggungjawab9" class="form-control form-control-sm" id="smallSelect">
                                                                                <option value="">-- Pilh --</option>
                                                                                <option value="Rendah">Rendah</option>
                                                                                <option value="Kurang">Kurang</option>
                                                                                <option value="Cukup">Cukup</option>
                                                                                <option value="Baik">Baik</option>
                                                                                <option value="Tinggi">Tinggi</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- kesehatan dan ekonomi  -->
                                                <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
													<div class="row">
                                                        <div class="col-md-4">
                                                            <br><br>
                                                            <div class="form-group">
                                                                <label for="smallInput">1. Penyakit yang pernah diderita</label>
                                                                <input type="text" class="form-control form-control-sm " id="smallInput" name="penyakit1">
                                                                <input type="text" class="form-control form-control-sm mt-1" id="smallInput" name="penyakit2">
                                                                <input type="text" class="form-control form-control-sm mt-1" id="smallInput" name="penyakit3">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="smallInput">2. Penyakit berat</label>
                                                                <input type="text" class="form-control form-control-sm " id="smallInput" name="penyakitberat1">
                                                                <input type="text" class="form-control form-control-sm mt-1" id="smallInput" name="penyakitberat2">
                                                                <input type="text" class="form-control form-control-sm mt-1" id="smallInput" name="penyakitberat3">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="smallInput">3. Karena Kecelakaan</label>
                                                                <input type="text" class="form-control form-control-sm " id="smallInput" name="penyakitkecelakaan1">
                                                                <input type="text" class="form-control form-control-sm mt-1" id="smallInput" name="penyakitkecelakaan2">
                                                                <input type="text" class="form-control form-control-sm mt-1" id="smallInput" name="penyakitklecelakaan3">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <b>PENGLIHATAN DAN PENDENGARAN</b>
                                                                    <table class="table table-sm table-hover table-responsive text-center">
                                                                        <thead>
                                                                            <tr>
                                                                            <th scope="col" style="height:10px;"></th>
                                                                            <th scope="col"><div style="width:100px">KELAS 7</th>
                                                                            <th scope="col"><div style="width:100px">KELAS 8</th>
                                                                            <th scope="col"><div style="width:100px">KELAS 9</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Penglihatan Normal</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="penglihatannormal7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Ya">Ya</option>
                                                                                        <option value="Tidak">Tidak</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                <select name="penglihatannormal8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Ya">Ya</option>
                                                                                        <option value="Tidak">Tidak</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                <select name="penglihatannormal9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Ya">Ya</option>
                                                                                        <option value="Tidak">Tidak</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Gangguan Penglihatan</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="gangguanpenglihatan7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Ya">Ya</option>
                                                                                        <option value="Tidak">Tidak</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                <select name="gangguanpenglihatan8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Ya">Ya</option>
                                                                                        <option value="Tidak">Tidak</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                <select name="gangguanpenglihatan9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Ya">Ya</option>
                                                                                        <option value="Tidak">Tidak</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Pendengaran Normal</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="pendengarannormal7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Ya">Ya</option>
                                                                                        <option value="Tidak">Tidak</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                <select name="pendengarannormal8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Ya">Ya</option>
                                                                                        <option value="Tidak">Tidak</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                <select name="pendengarannormal9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Ya">Ya</option>
                                                                                        <option value="Tidak">Tidak</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Gangguan Pendengaran</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="gangguanpendengaran7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Ya">Ya</option>
                                                                                        <option value="Tidak">Tidak</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                <select name="gangguanpendengaran8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Ya">Ya</option>
                                                                                        <option value="Tidak">Tidak</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                <select name="gangguanpendengaran9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Ya">Ya</option>
                                                                                        <option value="Tidak">Tidak</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <b>STATUS EKONOMI</b>
                                                                    <table class="table table-sm table-hover table-responsive text-center">
                                                                        <thead>
                                                                            <tr>
                                                                            <th scope="col" style="height:10px;"></th>
                                                                            <th scope="col"><div style="width:100px">KELAS 7</th>
                                                                            <th scope="col"><div style="width:100px">KELAS 8</th>
                                                                            <th scope="col"><div style="width:100px">KELAS 9</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Status Sosial Ekonomi</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="penglihatannormal7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Ya">Ya</option>
                                                                                        <option value="Tidak">Tidak</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                <select name="penglihatannormal8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Ya">Ya</option>
                                                                                        <option value="Tidak">Tidak</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                <select name="penglihatannormal9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Ya">Ya</option>
                                                                                        <option value="Tidak">Tidak</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Jumlah Tanggungan Masih</th>
                                                                                <td style="height:30px;">
                                                                                    <input type="number" class="form-control form-control-sm" id="smallInput" name="tanggunganmasih7" placeholder="Masukkan nomor">
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <input type="number" class="form-control form-control-sm" id="smallInput" name="tanggunganmasih8" placeholder="Masukkan nomor">
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <input type="number" class="form-control form-control-sm" id="smallInput" name="tanggunganmasih9" placeholder="Masukkan nomor">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Jumlah Tanggungan Tidak</th>
                                                                                <td style="height:30px;">
                                                                                    <input type="number" class="form-control form-control-sm" id="smallInput" name="tanggungantidak7" placeholder="Masukkan nomor">
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <input type="number" class="form-control form-control-sm" id="smallInput" name="tanggungantidak8" placeholder="Masukkan nomor">
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <input type="number" class="form-control form-control-sm" id="smallInput" name="tanggungantidak9" placeholder="Masukkan nomor">
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Hubungan Siswa Dengan Teman  -->
                                                <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <b>DILUAR SEKOLAH</b>
                                                                    <table class="table table-sm table-hover table-responsive text-center">
                                                                        <thead>
                                                                            <tr>
                                                                            <th scope="col" style="height:10px;"></th>
                                                                            <th scope="col"><div style="width:100px">KELAS 7</th>
                                                                            <th scope="col"><div style="width:100px">KELAS 8</th>
                                                                            <th scope="col"><div style="width:100px">KELAS 9</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Kegiatan Keagamaan</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="kegiatankeagamaan7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="kegiatankeagamaan8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="kegiatankeagamaan9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Belajar Kelompok</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="belajarkelompok7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="belajarkelompok8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="belajarkelompok9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Olahraga</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="olahraga7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="olahraga8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="olahraga9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Kesenian</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="kesenian7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="kesenian8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="kesenian9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Menjenguk Teman</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="menjengukteman7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="menjengukteman8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="menjengukteman9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <b>DIDALAM SEKOLAH</b>
                                                                    <table class="table table-sm table-hover table-responsive text-center">
                                                                        <thead>
                                                                            <tr>
                                                                            <th scope="col" style="height:10px;"></th>
                                                                            <th scope="col"><div style="width:100px">KELAS 7</th>
                                                                            <th scope="col"><div style="width:100px">KELAS 8</th>
                                                                            <th scope="col"><div style="width:100px">KELAS 9</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Kegiatan Keagamaan</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="kegiatankeagamaan7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="kegiatankeagamaan8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="kegiatankeagamaan9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Belajar Kelompok</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="belajarkelompok7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="belajarkelompok8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="belajarkelompok9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Olahraga</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="olahraga7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="olahraga8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="olahraga9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Kesenian</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="kesenian7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="kesenian8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="kesenian9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Menjenguk Teman</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="menjengukteman7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="menjengukteman8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="menjengukteman9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                        <option value="Sering">Sering</option>
                                                                                        <option value="Kadang - Kadang">Kadang - Kadang</option>
                                                                                        <option value="Tidak Pernah">Tidak Pernah</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- sikap dan tata krama  -->
                                                <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <b>DIDALAM SEKOLAH</b>
                                                                    <table class="table table-sm table-hover table-responsive text-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col" style="height:10px;"></th>
                                                                                <th scope="col"><div style="width:100px">KELAS 7</th>
                                                                                <th scope="col"><div style="width:100px">KELAS 8</th>
                                                                                <th scope="col"><div style="width:100px">KELAS 9</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Sikap Bicara</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="bicaradalam7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="bicaradalam8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="bicaradalam9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Pelajaran di dalam kelas</th>
                                                                                <td style="height:30px;">
                                                                                        <select name="pelajarandalam7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="pelajarandalam78" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="pelajarandalam79" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Bergaul dengan teman sebaya</th>
                                                                                <td style="height:30px;">
                                                                                        <select name="bergauldalam7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="bergauldalam8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="bergauldalam9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Cara Berpakaian</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="berpakaiandalam7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="berpakaiandalam8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="berpakaiandalam9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Mematuhi peraturan sekolah</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="peraturandalam7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                            <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="peraturandalam8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="peraturandalam9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Kepada Personil sekolah</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="personildalam7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="personildalam8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="personildalam9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Sikap Kepada Guru</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="kepadagurudalam7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="kepadagurudalam8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="kepadagurudalam9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Sikap Kepada Orang Tua</th>
                                                                                <td style="height:30px;">
                                                                                        <select name="kepadaortudalam7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="kepadaortudalam8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="kepadaortudalam9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                    <b>DIDALAM SEKOLAH</b>
                                                                    <table class="table table-sm table-hover table-responsive text-center">
                                                                        <thead>
                                                                            <tr>
                                                                                <th scope="col" style="height:10px;"></th>
                                                                                <th scope="col"><div style="width:100px">KELAS 7</th>
                                                                                <th scope="col"><div style="width:100px">KELAS 8</th>
                                                                                <th scope="col"><div style="width:100px">KELAS 9</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Sikap Bicara</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="bicaradalam7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                    <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="bicaradalam8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="bicaradalam9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Pelajaran di dalam kelas</th>
                                                                                <td style="height:30px;">
                                                                                        <select name="pelajarandalam7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="pelajarandalam78" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="pelajarandalam79" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Bergaul dengan teman sebaya</th>
                                                                                <td style="height:30px;">
                                                                                        <select name="bergauldalam7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="bergauldalam8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="bergauldalam9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Cara Berpakaian</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="berpakaiandalam7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="berpakaiandalam8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="berpakaiandalam9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Mematuhi peraturan sekolah</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="peraturandalam7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                            <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="peraturandalam8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="peraturandalam9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Kepada Personil sekolah</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="personildalam7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="personildalam8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="personildalam9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Sikap Kepada Guru</th>
                                                                                <td style="height:30px;">
                                                                                    <select name="kepadagurudalam7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="kepadagurudalam8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                    </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                    <select name="kepadagurudalam9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row" style="height:35px;">Sikap Kepada Orang Tua</th>
                                                                                <td style="height:30px;">
                                                                                        <select name="kepadaortudalam7" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="kepadaortudalam8" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                                <td style="height:30px;">
                                                                                        <select name="kepadaortudalam9" style="height:10px;padding-top:2px;" class="form-control form-control-sm" id="smallSelect">
                                                                                        <option value="">-- Pilh --</option>
                                                                                            <option value="Baik">Baik</option>
                                                                                            <option value="Sedang">Sedang</option>
                                                                                            <option value="Kurang">Kurang</option>
                                                                                        </select>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab">
													
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9-tab">
													
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">
													
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-11" role="tabpanel" aria-labelledby="v-pills-11-tab">
													
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-12" role="tabpanel" aria-labelledby="v-pills-12-tab">
													
												</div>
											</div>
										</div>
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