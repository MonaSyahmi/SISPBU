 
 
  <?php

$kode_SPBU = '' ;
$lokasi_SPBU = '' ;
$url_gambar_SPBU = '' ;
$fasilitas_SPBU = '' ;
$produk_SPBU = '' ;
$rekomendasi = '' ;
$jam_operasional = '' ;
$urlAction = 'spbu/tambah' ;

if ( $status == 'edit' )
{
    foreach ( $daftar_spbu->result() as $row )
    {

        
        $id_SPBU = $row->id_SPBU ;

        $urlAction = 'spbu/update/' . $row->id_SPBU ;
    }
}

?>
 
 
 
 <div class="col-md-6">
<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Form Tambah SPBU </h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="<?php

echo base_url() . $urlAction ;

?>">
                                  <div class="box-body">
									
								    <div class="form-group">
                                           <label >Kode SPBU </label>
											<input type="text" name="kode_SPBU" class="form-control" value="<?php

echo $kode_SPBU ;

?>"id="namaPengguna" placeholder="masukan kode SPBU">
								    </div>
										
										 <div class="form-group">
                                            <label >Lokasi SPBU </label>
											<input type="text" name="lokasi_SPBU" class="form-control" value="<?php

echo $lokasi_SPBU ;

?>"id="namaPengguna" placeholder="masukan lokasi SPBU">
								      </div>
										
										 <div class="form-group">
                                            <label >Fasilitas</label>
											<input type="text" name="fasilitas_SPBU " class="form-control" value="<?php

echo $fasilitas_SPBU ;

?>"id="namaPengguna" placeholder="masukan fasilitas yang tersedia">
								      </div>
										
										 <div class="form-group">
                                            <label >Produk</label>
											<input type="text" name="produk_SPBU" class="form-control" value="<?php

echo $produk_SPBU ;

?>"id="namaPengguna" placeholder="masukan produk yang dijual">
								     </div> 
									   
									    <div class="form-group">
                                            <label >Jam Operasional </label>
											<input type="text" name="jam_operasional" class="form-control" value="<?php

echo $jam_operasional ;

?>"id="namaPengguna" placeholder=" masukan jam operasional">
							         </div> 

  <label for="exampleInputFile">File Foto</label>
                                            <input type="file" name="fotouser" >
                                  </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
										 <a href="<?php echo base_url()?>spbu"><i name="iconposition" class="btn btn-success" title='Kembali' alt='Kembali'   > Kembali</i></a>
                                    </div>
									
                                </form>
                            
							
							</div><!-- /.box -->
 </div>