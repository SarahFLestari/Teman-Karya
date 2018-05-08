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
       <div class="form-check">
         <input class="form-check-input" type="checkbox" value="10" name="ontime" id="defaultCheck1">
         <label class="form-check-label" for="defaultCheck1">
           Bekerja sesuai dengan deadline yang ditentukan
         </label>
       </div>
       <div class="form-check">
         <input class="form-check-input" type="checkbox" value="10" name="lapor" id="defaultCheck1">
         <label class="form-check-label" for="defaultCheck1">
           Memberikan laporan progress sesuai dengan waktu yang ditentukan
         </label>
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
        <div class="form-check">
         <input class="form-check-input" type="checkbox" value="10" name="aktif" id="defaultCheck1">
         <label class="form-check-label" for="defaultCheck1">
           Memberi saran,  pendapat, dan menjalankan tugas masing-masing ketika bekerja dalam tim
         </label>
       </div>
      </div>
    </div>
  </div>
</div>
