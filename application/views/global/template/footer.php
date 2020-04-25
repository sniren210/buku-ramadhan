    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="<?=  base_url() ?>assets/global/img/logoo.png" width="50" height="50" alt=""> </a>
                        <p>Shaum adalah sebuah aplikasi buku ramadhan khusus dari RPL A, oleh RPL A, dan untuk RPL A</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Kontak Kami</h4>
                        <div class="contact_info">
                            <p><span> Phone :</span> 085881747953</p>
                            <p><span> Email : </span>miraimadev21@gmail.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Mirai Developer</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->
    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="<?=  base_url() ?>assets/global/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?=  base_url() ?>assets/global/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?=  base_url() ?>assets/global/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="<?=  base_url() ?>assets/global/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="<?=  base_url() ?>assets/global/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="<?=  base_url() ?>assets/global/js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="<?=  base_url() ?>assets/global/js/owl.carousel.min.js"></script>
    <script src="<?=  base_url() ?>assets/global/js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="<?=  base_url() ?>assets/global/js/slick.min.js"></script>
    <script src="<?=  base_url() ?>assets/global/js/jquery.counterup.min.js"></script>
    <script src="<?=  base_url() ?>assets/global/js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="<?=  base_url() ?>assets/global/js/custom.js"></script>

            <!--Datatables plugin files-->
    <script src='<?=  base_url() ?>assets/global/plugins/datatables/datatables.min.js'></script>
    <script>
        $(document).ready(function () {
            var wajib = $('#wajib').DataTable({
                buttons: [{
                    extend: 'print',
                    title: 'Test Data export',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'pdf',
                    title: 'Test Data export',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'excel',
                    title: 'Test Data export',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'csv',
                    title: 'Test Data export',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'copy',
                    title: 'Test Data export',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }]
            });
            wajib.buttons().container().appendTo('#button_wajib');
            $("#button_wajib .btn").removeClass('btn-secondary').addClass('btn-light');

            var sunah = $('#sunah').DataTable({
                buttons: [{
                    extend: 'print',
                    title: 'Test Data export',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'pdf',
                    title: 'Test Data export',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'excel',
                    title: 'Test Data export',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'csv',
                    title: 'Test Data export',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }, {
                    extend: 'copy',
                    title: 'Test Data export',
                    exportOptions: {
                        columns: "thead th:not(.noExport)"
                    }
                }]
            });
            sunah.buttons().container().appendTo('#button_sunah');
            $("#button_sunah .btn").removeClass('btn-secondary').addClass('btn-light');
        });
    </script>
</body>

</html>