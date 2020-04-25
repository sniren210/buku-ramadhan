    
    <?php if ($this->session->flashdata('gagal')): ?>
    <section >
        <div class="container">
            <!-- DataTable -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success" role="alert">
                        <?= $this->session->flashdata('gagal'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif ?>
    <!-- Page Content -->
    <section class="blog_area section_padding">
        <div class="container">
            <!-- DataTable -->
            <div class="row mb-3">
                <div class="col-lg-6">
                    <h4>Kegiatan Sunnah</h4>
                    <p>Kamu melakukan kegiatan sunnah apa saja selama bulan suci ramadhan?</p>
                </div>
                <div class="col-lg-6 text-right">
                    <a href="<?=  base_url('home/tambah') ?>" class="btn btn-light"><i class="icon-plus"></i>+ Tambah Kegiatan</a>
                    <div id="button_wajib" class="mt-2"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table id="wajib" class="table table-bordered table-hover col-lg-12" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Tarawih</th>
                                <th>Dhuha</th>
                                <th>Tahajud</th>
                                <th>Membaca Buku</th>
                                <th>Infaq</th>
                                <th>I'tikaf</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $no=1; foreach ($jadwal as $dat): ?>
                            <tr>
                                <td><?=  $no ?></td>
                                <td><?=  $dat['tanggal'] ?></td>
                                <td><?=  $dat['tarawih'] ?></td>
                                <td><?=  $dat['duha'] ?></td>
                                <td><?=  $dat['tahajud'] ?></td>
                                <td><?=  $dat['buku'] ?></td>
                                <td><?=  $dat['infaq'] ?></td>
                                <td><?=  $dat['itikaf'] ?></td>
                            </tr>
                            <?php $no++; endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Tarawih</th>
                                <th>Dhuha</th>
                                <th>Tahajud</th>
                                <th>Membaca Buku</th>
                                <th>Infaq</th>
                                <th>I'tikaf</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- end: DataTable -->
        </div>
    </section>
    <!-- end: Page Content -->


        <!-- Page Content -->
    <section class="blog_area section_padding">
        <div class="container">
            <!-- DataTable -->
            <div class="row mb-3">
                <div class="col-lg-6">
                    <h4>Kegiatan Wajib</h4>
                    <p>Apakah kamu sudah melakukan kegiatan wajib di bulan suci Ramadhan?</p>
                </div>
                <div class="col-lg-6 text-right">
                    <a href="<?=  base_url('home/tambah') ?>" class="btn btn-light"><i class="icon-plus"></i>+ Isi Jadwal</a>
                    <div id="button_sunah" class="mt-2"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table id="sunah" class="table table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Puasa</th>
                                <th>Shubuh</th>
                                <th>Zuhur</th>
                                <th>Ashar</th>
                                <th>Maghrib</th>
                                <th>Isya</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($jadwal as $dat): ?>
                            <tr>
                                <td><?=  $no ?></td>
                                <td><?=  $dat['tanggal'] ?></td>
                                <td><?=  $dat['puasa'] ?></td>
                                <td><?=  $dat['subuh'] ?></td>
                                <td><?=  $dat['zuhur'] ?></td>
                                <td><?=  $dat['ashar'] ?></td>
                                <td><?=  $dat['magrib'] ?></td>
                                <td><?=  $dat['isya'] ?></td>
                            </tr>
                            <?php $no++; endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Puasa</th>
                                <th>Shubuh</th>
                                <th>Zuhur</th>
                                <th>Ashar</th>
                                <th>Maghrib</th>
                                <th>Isya</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- end: DataTable -->
        </div>
    </section>
    <!-- end: Page Content -->

