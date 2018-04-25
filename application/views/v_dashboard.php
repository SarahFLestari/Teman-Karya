<div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
    <?php $this->load->view('comp/profile');?>
       <?php $this->load->view('comp/menu');?>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
<!-- END Sidebar -->

<!-- Main Container -->
<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <div class="my-50">
            <h2 class="font-w700 text-black mb-10">Selamat Datang,</h2>
            <h3 class="h5 text-muted mb-0">Rama Aditya Maulana | 1301150034</h3>
        </div>

        <!-- Coins -->
        <div class="row gutters-tiny justify-content-center mb-10">
            <div class="col-6 col-md-4 col-xl-4 mr-10">
               <a class="block block-transparent text-center bg-gd-lake" href="javascript:void(0)">
                   <div class="block-content bg-black-op-5">
                       <p class="font-w600 font-size-h5 text-white">Poin Anda</p>
                   </div>
                   <div class="block-content">
                       <p>
                           <strong class="font-size-h1 text-white">1.258 Pts</strong>
                       </p>
                   </div>
               </a>
           </div>
            <div class="col-6 col-md-4 col-xl-4">
               <a class="block block-transparent text-center bg-gd-dusk" href="javascript:void(0)">
                   <div class="block-content bg-black-op-5">
                       <p class="font-w600 font-size-h5 text-white">Tugas Anda</p>
                   </div>
                   <div class="block-content">
                       <p>
                           <strong class="font-size-h1 text-white">1.258 Tugas</strong>
                       </p>
                   </div>
               </a>
           </div>
        </div>
        <!-- END Coins -->

        <!-- Portfolio and Activity -->
       <!--  <div class="row">
            <div class="col-lg-6">
                <div class="block block-fx-shadow">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Portfolio</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <table class="table table-borderless table-striped table-vcenter">
                            <tbody>
                                <tr>
                                    <td style="width: 32px;">
                                        <i class="fa fa-circle text-warning"></i>
                                    </td>
                                    <td style="width: 140px;">
                                        <strong>Bitcoin</strong>
                                    </td>
                                    <td class="d-none d-sm-table-cell" style="width: 160px;">
                                        <div class="progress mb-0" style="height: 10px;">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 47%"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        0.50 BTC
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right text-muted">
                                        ~ $7.000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-info"></i>
                                    </td>
                                    <td>
                                        <strong>Ethereum</strong>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <div class="progress mb-0" style="height: 10px;">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        3.00 ETH
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right text-muted">
                                        ~ $3.300
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-muted"></i>
                                    </td>
                                    <td>
                                        <strong>Litecoin</strong>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <div class="progress mb-0" style="height: 10px;">
                                            <div class="progress-bar bg-muted" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 16%"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        10.00 LTC
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right text-muted">
                                        ~ $2.500
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-danger"></i>
                                    </td>
                                    <td>
                                        <strong>US Dollars</strong>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <div class="progress mb-0" style="height: 10px;">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 13%"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        2.000 USD
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right text-muted">
                                        $2.000
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-success"></i>
                                    </td>
                                    <td>
                                        <strong>Euros</strong>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <div class="progress mb-0" style="height: 10px;">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        0 EUR
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right text-muted">
                                        0€
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-circle text-elegance"></i>
                                    </td>
                                    <td>
                                        <strong>British Pounds</strong>
                                    </td>
                                    <td class="d-none d-sm-table-cell">
                                        <div class="progress mb-0" style="height: 10px;">
                                            <div class="progress-bar bg-elegance" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0"></div>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        0 GBP
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right text-muted">
                                        £0
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-muted text-center font-w600">
                        Total Balance ~ $14.800,00
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
            
                <div class="block block-fx-shadow">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Recent Activity</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <table class="table table-borderless table-striped table-vcenter">
                            <tbody>
                                <tr>
                                    <td class="text-center" style="width: 50px;">
                                        JAN<br>10
                                    </td>
                                    <td>
                                        <strong>Bought Bitcoin</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-success font-w600">
                                        + 0.50 BTC
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                        - $6.500
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 50px;">
                                        JAN<br>05
                                    </td>
                                    <td>
                                        <strong>Bought Ethereum</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-success font-w600">
                                        + 3.00 ETH
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                        - $2.900
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 50px;">
                                        JAN<br>02
                                    </td>
                                    <td>
                                        <strong>Bought Litecoin</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-success font-w600">
                                        + 8.00 LTC
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                        - $1.800
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width: 50px;">
                                        JAN<br>01
                                    </td>
                                    <td>
                                        <strong>Bought Litecoin</strong><br>
                                        <span class="text-muted">Using USD wallet</span>
                                    </td>
                                    <td class="text-right text-success font-w600">
                                        + 2.00 LTC
                                    </td>
                                    <td class="d-none d-sm-table-cell text-right text-danger font-w600">
                                        - $370
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="block-content block-content-full bg-body-light text-center font-w600">
                        <a class="link-effect" href="be_pages_crypto_wallets.html">
                            View Your Wallets <i class="fa fa-angle-right ml-5"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- END Portfolio and Activity -->
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

