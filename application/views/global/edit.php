    <!-- learning part start-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="<?=  base_url() ?>assets/global/img/undraw_walking_outside_5ueb.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5>Kegiatan <br>Selama Ramadhan</h5>
                        <h5>Tanggal <?=  date('Y-m-d') ?></h5>

                        <!-- kegiatan -->
                        <?php if ($penanda == date('Y-m-d')): ?>
                            <h1>Anda Sudah Mengisi Yg hari ini <br>Tunggu besok lagi</h1>
                            <a href="<?=  base_url('home') ?>">< Kembali</a>
                        <form <?=  'style="display:none;' ?> method="post" action="<?=  base_url('home/tambah') ?>">
                        <?php endif ?>
                        <form method="post" action="<?=  base_url('home/tambah') ?>">
                        <input type="hidden" name="tanggal" value=" <?= date('Y-m-d')?>">
                        <table>
                            <tr>
                                <td>
                                    Berpuasa
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="radio"  name="puasa" value="Ya" <?php if ($jadwal->puasa == 'Ya') {echo "checked";} ?>> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="puasa" value="Tidak" <?php if ($jadwal->puasa == 'Tidak') {echo "checked";} ?>> &nbsp &nbsp saya tidak melakukannya
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Shalat Subuh
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="radio" name="subuh" value="Ya" <?php if ($jadwal->subuh == 'Ya') {echo "checked";} ?>> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="subuh" value="Tidak" <?php if ($jadwal->subuh == 'Tidak') {echo "checked";} ?>> &nbsp &nbsp saya tidak melakukannya
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Shalat Zuhur
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="radio" name="zuhur" value="Ya" <?php if ($jadwal->zuhur == 'Ya') {echo "checked";} ?>> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="zuhur" value="Tidak" <?php if ($jadwal->zuhur == 'Tidak') {echo "checked";} ?>> &nbsp &nbsp saya tidak melakukannya
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Shalat Ashar
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="radio" name="ashar" value="ya" <?php if ($jadwal->ashar == 'Ya') {echo "checked";} ?>> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="ashar" value="Tidak" <?php if ($jadwal->ashar == 'Tidak') {echo "checked";} ?>> &nbsp &nbsp saya tidak melakukannya
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Shalat Maghrib
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="radio" name="magrib" value="Ya" <?php if ($jadwal->magrib == 'Ya') {echo "checked";} ?>> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="magrib" value="Tidak"<?php if ($jadwal->magrib == 'Tidak') {echo "checked";} ?>> &nbsp &nbsp saya tidak melakukannya
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Shalat Isya
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="radio" name="isya" value="Ya" <?php if ($jadwal->isya == 'Ya') {echo "checked";} ?>> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="isya" value="Tidak" <?php if ($jadwal->isya == 'Tidak') {echo "checked";} ?>> &nbsp &nbsp saya tidak melakukannya
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Shalat Tarawih
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="radio" name="tarawih" value="Ya" <?php if ($jadwal->tarawih == 'Ya') {echo "checked";} ?>> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="tarawih" value="Tidak" <?php if ($jadwal->tarawih == 'Tidak') {echo "checked";} ?>> &nbsp &nbsp saya tidak melakukannya
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Shalat Duha
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="radio" name="duha" value="Ya" <?php if ($jadwal->duha == 'Ya') {echo "checked";} ?>> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="duha" value="Tidak" <?php if ($jadwal->duha == 'Tidak') {echo "checked";} ?>> &nbsp &nbsp saya tidak melakukannya
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Shalat Tahajud
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="radio" name="tahajud" value="Ya" <?php if ($jadwal->tahajud == 'Ya') {echo "checked";} ?>> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="tahajud" value="Tidak" <?php if ($jadwal->tahajud == 'Tidak') {echo "checked";} ?>> &nbsp &nbsp saya tidak melakukannya
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Membaca Buku
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <?php if ($jadwal->buku != 'Tidak'): ?>
                                    <input type="text" placeholder="   Judul buku" name="buku" autocomplete="off" style="width: 100px" value="<?=  $jadwal->buku ?>">
                                    <?php endif ?>
                                </td>
                                <td>
                                    <input type="radio" name="buku" value="Tidak" <?php if ($jadwal->buku == 'Tidak') {echo "checked";} ?>> &nbsp &nbsp saya tidak melakukannya
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Berinfaq
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="radio" name="infaq" value="Ya" <?php if ($jadwal->infaq == 'Ya') {echo "checked";} ?>> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="infaq" value="Tidak" <?php if ($jadwal->infaq == 'Tidak') {echo "checked";} ?>> &nbsp &nbsp saya tidak melakukannya
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    I'tikaf
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <input type="radio" name="itikaf" value="Ya" <?php if ($jadwal->itikaf == 'Ya') {echo "checked";} ?>> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="itikaf" value="Tidak" <?php if ($jadwal->itikaf == 'Tidak') {echo "checked";} ?>> &nbsp &nbsp saya tidak melakukannya
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    &nbsp
                                </td>
                            </tr>
                        </table>
                        <button class="btn_1 btn btn-warning">Tambahkan Kegiatan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->
    