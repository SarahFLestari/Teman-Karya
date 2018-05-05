<div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
    <?php $this->load->view('comp/profile');?>
       <?php $this->load->view('comp/menu');?>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <div class="my-50">
            <h2 class="font-w700 text-black mb-10">Detail Presensi</h2>
            <h3 class="h5 text-muted mb-0"></h3>
        </div>

        <!-- Coins -->
        <div class="content block block-fx-shadow poin">
          <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
          <table class="table table-bordered table-striped table-vcenter js-dataTable-full mb-10">
              <thead>
                  <tr>
                      <th class="text-center" style="width: 5%;">No</th>
                      <th style="width: 13%;">Tanggal</th>
                      <th class="d-none d-sm-table-cell" style="width: 15%;">Waktu Masuk</th>
                      <th class="d-none d-sm-table-cell" style="width: 45%;">Waktu Keluar</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td class="text-center">1</td>
                      <td class="font-w600"><?php echo date("d-m-Y");?></td>
                      <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?></td>
                      <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?>   </td>
                  </tr>
                  <tr>
                      <td class="text-center">2</td>
                      <td class="font-w600"><?php echo date("d-m-Y");?></td>
                      <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?></td>
                      <td class="d-none d-sm-table-cell"><?php echo date("h:i:s");?></td>
                  </tr>
                  
              </tbody>
          </table>
        </div>
        <!-- END Coins -->

    </div>
    <!-- END Page Content -->
</main>