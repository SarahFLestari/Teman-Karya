<?php echo form_open('url');?>

<div class="form-group">
    <label for="exampleInputEmail1">Nama Pekerjaan: </label>
    <label for="exampleInputEmail1">Laporan Keuangan</label> <!--Diambil dari DB ntar-->
 </div>
 <div class="form-group">
 	<label for="exampleInputEmail1">Deskripsi Pekerjaan: </label>
     <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" readonly>Bagian ini diambil dari DB
     </textarea> <!--Diambil dari DB ntar-->
 </div>
 <div class="form-group">
 	<div class="slidecontainer">
 	  <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
 	  <p id="demo" class="mt-10"></p>
 	</div>
 </div>

<script type="text/javascript">
  var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = "Progres Anda: "+ slider.value + "%"; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
    output.innerHTML = "Progres Anda: "+ this.value + "%";
}
</script>