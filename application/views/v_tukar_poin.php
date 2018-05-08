<div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
    <?php $this->load->view('comp/profile');?>
    <?php $this->load->view('comp/menu');?>
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
            <h2 class="font-w700 text-black mb-10">Penukaran poin</h2>
            <h3 class="h5 text-muted mb-0"></h3>
        </div>

        <!-- Coins -->
        <div class="row">
            <div class="col-xl-9 col-lg-12 col-md-12 col-xs-12">
                <div class="block block-themed" style="width: 63rem;">
                    <div class="block-header bg-info">
                        <h3 class="block-title">Cara Penukaran</h3>
                    </div><div class="block-content">
                        <ol>
                            <li>Pilih Penawaran yang Anda inginkan dengan menekan tombol Tukar.</li>
                            <li>Pada akhir bulan, silahkan melakukan konfirmasi kepada HRD.</li>
                        </ol>
                    </div>
                    <div class="block-header bg-success">
                        <br>
                        <h3 class="block-title">Poin Anda : <?php echo $poin;?></h3>
                    </div>
                </div>
            </div>
        </div>

        <?php $index = 0; foreach ($daftarPenawaran as $item) :?>

        <?php if ($index % 3 == 0):?>
        <div class="row gutters-tiny  mb-10">
        <?php endif;?>
            <div class="col-3 col-md-3 col-xl-3 mr-10">
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title"><?php echo $item->getNamaPenawaran();?></h3>
                    </div>
                    <div class="block-content">
                        <p><?php echo $item->getDeskripsi();?></p>
                        <a href="<?php echo base_url();?>Poin/tukarPoin/<?php echo $item->getId()?>"  class="btn btn-outline-info min-width-125 mb-10">Tukar poin mu Sekarang</a>
                    </div>
                    <div class="block-content block-content-full block-content-sm bg-pulse font-size-sm text-white text-center">
                        <?php echo $item->getJumlahPoin()?> Pts
                    </div>
                </div>
            </div>
        <?php if ($index % 3 == 0 and $index > 2):?>
        </div>
        <?php endif;?>
        <?php $index++;endforeach;?>
        <?php if ($index % 3 != 0 and $index > 2):?>
        </div>
        <?php endif;?>


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

