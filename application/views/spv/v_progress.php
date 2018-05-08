<p>Nama Tugas / Projek: {Dari DB}</p>
<p>Detail Tugas:</p>
<p>
	{Diambil dari DB}
</p>

<!-- Untuk bar progress, atribut aria-valuenow diambil dari db -->
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 0%"><span id="label-progres"></span></div>
</div>

<!-- Fungsi JQuery untuk update progress -->
<script src="<?php echo base_url();?>assets/js/core/jquery.min.js"></script>
<script type="text/javascript">
    var progres = 85; //ambil dari DB
     $('.progress-bar')
     .css({
     	"width": progres + '%',
     	"color": '#000',
     	"font-weight": "bold"
 		}).text(progres + "%").attr("aria-valuenow",progres);

</script>