<?php echo form_open('Poin/addPoin/'.$NIP); ?>
<div id="accordion">
    <?php $index = 1;$index2 = 1;
    foreach ($daftarKategori as $kategori):
        ?>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <a class="btn btn-link collapsed" data-toggle="collapse"
                       data-target="#collapseTwo<?php echo $index ?>" aria-expanded="false" aria-controls="collapseTwo">
                        <?php echo $kategori->getNamaKategori(); ?>
                    </a>
                </h5>
            </div>

            <div id="collapseTwo<?php echo $index; ?>" class="collapse" aria-labelledby="headingTwo"
                 data-parent="#accordion">

                <div class="card-body ml-3">
                    <?php  foreach ($kategori->getDaftarDetilPoin() as $poin): ?>
                        <div class="form-check">
                            <input name = "poin[]"class="form-check-input" type="checkbox" value="<?php echo $poin->getId();?>"  id="defaultCheck<?php echo $index2;?>">
                            <label class="form-check-label" for="defaultCheck<?php echo $index2;?>">
                                <?php echo $poin->getKeterangan() . " (" . $poin->getJumlahPoin() . " poin)";$index2++;?>
                            </label>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php $index++;endforeach; ?>
</div>
