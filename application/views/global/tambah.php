
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
                                    <input type="radio" name="puasa" value="Ya"> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="puasa" value="Tidak"> &nbsp &nbsp saya tidak melakukannya
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
                                    <input type="radio" name="subuh" value="Ya"> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="subuh" value="Tidak"> &nbsp &nbsp saya tidak melakukannya
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
                                    <input type="radio" name="zuhur" value="Ya"> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="zuhur" value="Tidak"> &nbsp &nbsp saya tidak melakukannya
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
                                    <input type="radio" name="ashar" value="ya"> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="ashar" value="Tidak"> &nbsp &nbsp saya tidak melakukannya
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
                                    <input type="radio" name="magrib" value="Ya"> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="magrib" value="Tidak"> &nbsp &nbsp saya tidak melakukannya
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
                                    <input type="radio" name="isya" value="Ya"> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="isya" value="Tidak"> &nbsp &nbsp saya tidak melakukannya
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
                                    <input type="radio" name="tarawih" value="Ya"> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="tarawih" value="Tidak"> &nbsp &nbsp saya tidak melakukannya
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
                                    <input type="radio" name="duha" value="Ya"> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="duha" value="Tidak"> &nbsp &nbsp saya tidak melakukannya
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
                                    <input type="radio" name="tahajud" value="Ya"> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="tahajud" value="Tidak"> &nbsp &nbsp saya tidak melakukannya
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
                                    <input type="text" placeholder="   Judul buku" name="buku" autocomplete="off" style="width: 100px">
                                </td>
                                <td>
                                    <input type="radio" name="buku" value="Tidak"> &nbsp &nbsp saya tidak melakukannya
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
                                    <input type="radio" name="infaq" value="Ya"> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="infaq" value="Tidak"> &nbsp &nbsp saya tidak melakukannya
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
                                    <input type="radio" name="itikaf" value="Ya"> &nbsp &nbsp saya melakukannya
                                </td>
                                <td>
                                    <input type="radio" name="itikaf" value="Tidak"> &nbsp &nbsp saya tidak melakukannya
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
    