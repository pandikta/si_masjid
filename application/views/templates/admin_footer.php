</div>
<!-- end content -->

<footer class="footer">
    <div class="container-fluid">
        <nav class="pull-left">
            <ul class="nav">

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Help
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Licenses
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright ml-auto">
            2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
        </div>
    </div>
</footer>
</div>


<!-- script datatabel -->
<script>
    $(document).ready(function() {
        $('#basic-datatables').DataTable({});
    });
</script>

<!-- script show password -->
<script script type="text/javascript">
    function change() {
        var x = document.getElementById('password').type;

        if (x == 'password') {
            document.getElementById('password').type = 'text';
            document.getElementById('mybutton').innerHTML;
        } else {
            document.getElementById('password').type = 'password';
            document.getElementById('mybutton').innerHTML;
        }
    }
</script>


</div>
<!--   Core JS Files   -->


<script src="<?= base_url('assets/vendor_template_admin') ?>/js/core/popper.min.js"></script>
<script src="<?= base_url('assets/vendor_template_admin') ?>/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="<?= base_url('assets/vendor_template_admin') ?>/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?= base_url('assets/vendor_template_admin') ?>/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?= base_url('assets/vendor_template_admin') ?>/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>




<!-- jQuery Sparkline -->
<script src="<?= base_url('assets/vendor_template_admin') ?>/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?= base_url('assets/vendor_template_admin') ?>/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<!-- <script src="<?= base_url('assets/vendor_template_admin') ?>/js/core/jquery.3.2.1.min.js"></script> -->

<script src="<?= base_url('assets/vendor_template_admin') ?>/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<!-- <script src="<?= base_url('assets/vendor_template_admin') ?>/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->

<!-- jQuery Vector Maps -->
<script src="<?= base_url('assets/vendor_template_admin') ?>/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/vendor_template_admin') ?>/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Sweet Alert -->
<script src="<?= base_url('assets/vendor_template_admin') ?>/js/plugin/sweetalert/sweetalert2.all.min.js"></script>
<!-- my script -->
<script src="<?= base_url('assets/vendor_template_admin') ?>/js/myscript.js"></script>

<!-- Atlantis JS -->
<script src="<?= base_url('assets/vendor_template_admin') ?>/js/atlantis.min.js"></script>

</body>

</html>