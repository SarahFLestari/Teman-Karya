<div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
    <?php $this->load->view('comp/profile');?>
       <?php $this->load->view('comp/menu');?>
        <!-- Sidebar Content -->
    </div>
    <!-- END Sidebar Scroll Container -->
</nav>
 <?php $this->load->view('comp/header');?>
<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <div class="my-50">
            <h2 class="font-w700 text-black mb-10">Daftar Tugas</h2>
            <h3 class="h5 text-muted mb-0"></h3>
        </div>

        <!-- Coins -->
        <div class="content block block-fx-shadow poin">
          <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
          <table class="table table-bordered table-striped table-vcenter js-dataTable-full mb-10">
              <thead>
                  <tr>
                      <th class="text-center" style="width: 5%;">No</th>
                      <th style="width: 10%;">Tanggal Mulai</th>
                      <th style="width: 10%;">Tanggal Selesai</th>
                      <th class="d-none d-sm-table-cell" style="width: 25%;">Tugas</th>
                      <th class="d-none d-sm-table-cell" style="width: 10%;">Aksi</th>
                  </tr>
              </thead>
              <tbody>
                <!-- Start Foreach -->
                <?php $index = 1; foreach ($daftarTugas as $item):?>

                  <tr>
                      <td class="text-center"><?php echo $index?></td>
                      <td class="font-w600"><?php echo $item->getTanggalMulai();?></td>
                      <td class="d-none d-sm-table-cell"><?php echo $item->getTanggalSelesai();?></td>
                      <td class="d-none d-sm-table-cell"><?php echo $item->getTugas();?></td>
                      <td class="d-none d-sm-table-cell">
                        <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#tskDetail<?php echo $index;?>">Detail</button>
                      </td>
                  </tr>
                  <div class="modal fade" id="tskDetail<?php echo $index;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Detail Tugas</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <?php
                          $data['tugas'] = $item;
                          $this->load->view('form/pgw/form_tasks',$data);?>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                          <?php echo form_close();?>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php $index++; endforeach;?>
                  <!-- End Foreach -->
              </tbody>
          </table>

        </div>
        <!-- END Coins -->

    </div>
    <!-- END Page Content -->
</main>
