<?php echo form_open('');?>
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Profesional
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body ml-3">

        <!-- Sub kategori 1 Professional -->
        <div id="accordion_subsatu">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#subsatu" aria-expanded="false" aria-controls="collapseOne">
                  Quality Orientation
                </a>
              </h5>
            </div>

            <div id="subsatu" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_subsatu">
              <div class="card-body ml-3">
                <!-- Form Check -->
               <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="10" name="ontime" id="defaultCheck1">
                 <label class="form-check-label" for="defaultCheck1">
                   Bekerja sesuai dengan deadline yang ditentukan
                 </label>
               </div>
               <!-- ./End of Form check -->
                <!-- Form Check -->
               <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="10" name="progres" id="defaultCheck1">
                 <label class="form-check-label" for="defaultCheck1">
                   Memberikan laporan perkembangan (progres) sesuai dengan waktu yang ditentukan
                 </label>
               </div>
               <!-- ./End of Form check -->
               <!-- Form Check -->
               <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="5" name="progres" id="defaultCheck1">
                 <label class="form-check-label" for="defaultCheck1">
                   Menerima tugas tambahan
                 </label>
               </div>
               <!-- ./End of Form check -->
              <!-- Form Check -->
               <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="-5" name="progres" id="defaultCheck1">
                 <label class="form-check-label" for="defaultCheck1">
                   Menolak tugas tambahan
                 </label>
               </div>
               <!-- ./End of Form check -->
               
              </div>
            </div>
          </div>
        </div>

        <!-- Subkategori 2 Professional -->
        <div id="accordion_subdua">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#subdua" aria-expanded="false" aria-controls="collapseOne">
                  Problem Solving Skills
                </a>
              </h5>
            </div>

            <div id="subdua" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_subdua">
              <div class="card-body ml-3">
                <!-- Form Check -->
               <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="30" name="analisa" id="defaultCheck1">
                 <label class="form-check-label" for="defaultCheck1">
                  Kecakapan menganalisis masalah, mengidentifikasi sumber penyebab masalah dan hubungan antar berbagai faktor masalah, dan kemudian merumuskan alternatif solusi yang relevan dan aplicable.
                 </label>
               </div>
               <!-- ./End of Form check -->
                
              </div>
            </div>
          </div>
        </div>

        <!-- Subkategori 3 Professional -->
        <div id="accordion_subtiga">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#subtiga" aria-expanded="false" aria-controls="collapseOne">
                  Planning Skills
                </a>
              </h5>
            </div>

            <div id="subtiga" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_subtiga">
              <div class="card-body ml-3">
                <!-- Form Check -->
               <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="20" name="plan" id="defaultCheck1">
                 <label class="form-check-label" for="defaultCheck1">
                 Kecakapan untuk menyusun perencanaan kerja secara sistematis dan terjadwal dengan baik; melakukan alokasi sumber daya berdasarkan hasil perencanaan; serta melakukan monitoring untuk memastikan rencana kerja dapat berjalan dengan efektif
                 </label>
               </div>
               <!-- ./End of Form check -->
               <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="10" name="capaitarget" id="defaultCheck1">
                 <label class="form-check-label" for="defaultCheck1">
                  Target pekerjaan tercapai
                 </label>
               </div>
               <!-- ./End of Form check -->
                
              </div>
            </div>
          </div>
        </div>

          <!-- Subkategori 4 Professional -->
          <div id="accordion_subemp">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#subemp" aria-expanded="false" aria-controls="collapseOne">
                   Self Learning Capacity
                  </a>
                </h5>
              </div>

              <div id="subemp" class="collapse" aria-labelledby="headingOne" data-parent="#accordion_emp">
                <div class="card-body ml-3">
                  <!-- Form Check -->
                 <div class="form-check">
                   <input class="form-check-input" type="checkbox" value="10" name="learn" id="defaultCheck1">
                   <label class="form-check-label" for="defaultCheck1">
                   Kecakapan untuk melakukan proses pembelajaran aktif baik secara mandiri ataupun kelompok; menunjukan minat yang memadai untuk terus mengembangkan keterampilan diri; dan proaktif dalam melakukan sharing knowledge diantara sesama karyawan
                   </label>
                 </div>
                 <!-- ./End of Form check -->
                
                  
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Teamwork
        </a>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body ml-3">
        <!-- Sub kategori 1 teamwork -->
        <div id="acc_teamsubsatu">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#teamsubsatu" aria-expanded="false" aria-controls="collapseOne">
                  Keaktifan
                </a>
              </h5>
            </div>
            <div id="teamsubsatu" class="collapse" aria-labelledby="headingOne" data-parent="#acc_teamsubsatu">
              <div class="card-body ml-3">
                <!-- Form Check -->
               <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="10" name="aktif" id="defaultCheck1">
                 <label class="form-check-label" for="defaultCheck1">
                 Memberi saran,  pendapat, dan menjalankan tugas masing-masing ketika bekerja dalam tim
                 </label>
               </div>
               <!-- ./End of Form check -->
              </div>
            </div>
          </div>
        </div>
      
        <!-- Sub kategori 2 teamwork -->
        <div id="acc_teamsubdua">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#teamsubdua" aria-expanded="false" aria-controls="collapseOne">
                  Koordinasi
                </a>
              </h5>
            </div>
            <div id="teamsubdua" class="collapse" aria-labelledby="headingOne" data-parent="#acc_teamsubdua">
              <div class="card-body ml-3">
                <!-- Form Check -->
               <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="5" name="koordinasi" id="defaultCheck1">
                 <label class="form-check-label" for="defaultCheck1">
                    Berkoordinasi kepada anggota tim dengan baik
                 </label>
               </div>
               <!-- ./End of Form check -->
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
