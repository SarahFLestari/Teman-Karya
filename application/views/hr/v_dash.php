<div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
    <?php $this->load->view('comp/hr/profile_hr');?>
    <?php $this->load->view('comp/hr/menu');?>
    <!-- Sidebar Content -->
</div>
<!-- END Sidebar Scroll Container -->
</nav>
<!-- END Sidebar -->

<!-- Main Container -->
<?php $this->load->view('comp/header');?>
<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <div class="my-50">
            <h2 class="font-w700 text-black mb-10">Selamat Datang,</h2>
            <h3 class="h5 text-muted mb-0"><?php //echo $pegawai->getNamaPgw()?> | Manajer HR</h3>
        </div>

        <!-- Coins -->
        <div class="content block block-fx-shadow poin">
            <h1> <i class="si si-trophy"></i> Leaderboard</h1>
            <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-vcenter hrpts mb-10" style="border-collapse: collapse !important;">
                <thead>
                <tr style="background: transparent;">
                    <th class="text-center" style="width: 1%;">RANK</th>
                    <th style="width: 10%;">Nama Pegawai</th>
                    <th style="width: 10%;">Departemen</th>
                    <th class="d-none d-sm-table-cell" style="width: 5%;">Jumlah Poin</th>
                </tr>
                </thead>
                <tbody>
                <!-- Start Foreach -->
                <tr class="listpts">
                    <td class="text-center">1</td>
                    <td class="font-w600"><?php echo date("d-m-Y");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?> </td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td class="font-w600"><?php echo date("d-m-Y");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?> </td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td class="font-w600"><?php echo date("d-m-Y");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?> </td>
                </tr>
                <tr>
                    <td class="text-center">4</td>
                    <td class="font-w600"><?php echo date("d-m-Y");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?> </td>
                </tr>
                <tr>
                    <td class="text-center">5</td>
                    <td class="font-w600"><?php echo date("d-m-Y");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?> </td>
                </tr>
                <tr>
                    <td class="text-center">6</td>
                    <td class="font-w600"><?php echo date("d-m-Y");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?> </td>
                </tr>
                <tr>
                    <td class="text-center">7</td>
                    <td class="font-w600"><?php echo date("d-m-Y");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?> </td>
                </tr>
                <tr>
                    <td class="text-center">8</td>
                    <td class="font-w600"><?php echo date("d-m-Y");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?> </td>
                </tr>
                <tr>
                    <td class="text-center">9</td>
                    <td class="font-w600"><?php echo date("d-m-Y");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?> </td>
                </tr>
                <tr>
                    <td class="text-center">10</td>
                    <td class="font-w600"><?php echo date("d-m-Y");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?></td>
                    <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?> </td>
                </tr>

                <!-- End Foreach -->
                </tbody>
            </table>

        </div>
        <!-- END Coins -->


    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->

<!-- Footer -->
<footer id="page-footer" class="opacity-0">
    <!--     <div class="content py-20 font-size-xs clearfix">
            <div class="float-right">
                Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
            </div>
            <div class="float-left">
                <a class="font-w600" href="https://goo.gl/po9Usv" target="_blank">Codebase 2.0</a> &copy; <span class="js-year-copy">2017</span>
            </div>
        </div> -->
</footer>
<!-- END Footer -->
</div>
<!-- END Page Container -->

