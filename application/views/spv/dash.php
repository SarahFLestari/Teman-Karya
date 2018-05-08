<div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
    <?php $this->load->view('comp/spv/profile_spv');?>
       <?php $this->load->view('comp/spv/menu');?>
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
            <h3 class="h5 text-muted mb-0"><?php echo $this->session->userdata("nama")?> | <?php echo $this->session->userdata("status")?></h3>
        </div>

        <!-- Coins -->
       <div class="content block block-fx-shadow poin">
          <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
          <table class="table table-bordered table-striped table-vcenter js-dataTable-full mb-10">
              <thead>
                  <tr>
                      <th class="text-center" style="width: 5%;">No</th>
                      <th class="text-center" style="width: 3%;">NIP</th>
                      <th style="width: 10%;">Nama Pegawai</th>
                      <th style="width: 10%;">Divisi</th>
                      <th class="d-none d-sm-table-cell" style="width: 5%;">Progress</th>
                      <th class="d-none d-sm-table-cell" style="width: 10%;">Aksi</th>
                  </tr>
              </thead>
              <tbody>
                <!-- Start Foreach -->
                <?php $index = 1;foreach ($daftarRekap as $item):?>
                  <tr>
                      <td class="text-center"><?php echo $index;?></td>
                      <td class="d-none d-sm-table-cell"><?php echo $item['NIP'];?></td>
                      <td class="d-none d-sm-table-cell"><?php echo $item['nama_pg'];?></td>
                      <td class="d-none d-sm-table-cell"><?php echo $item['divisi'];?></td>
                      <td class="d-none d-sm-table-cell"><?php echo $item['progress']?>   </td>
                      <td class="d-none d-sm-table-cell">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#poinDetail<?php echo $index;?>">Poin</button>
                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#tskDetail<?php echo $index;?>">Progress</button>
                      </td>
                  </tr>
                  <div class="modal fade" id="poinDetail<?php echo $index;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Pemberian Poin</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <div class="modal-body">
                          <?php
                          $data['daftarKategori'] = $daftarKategori;
                          $data['NIP'] = $item["NIP"];
                          $this->load->view('form/spv/form_poin',$data);
                          ?>
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <?php echo form_close();?>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="tskDetail<?php echo $index;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Progress <?php echo $item['nama_pg'];?></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                           <?php
                           $data['item'] = $item;
                           $this->load->view('spv/v_progress',$data);
                           ?>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php $index++;endforeach;?>
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

