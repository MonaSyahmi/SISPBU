 
 
  <?php

$nama = '' ;
$id_negara = '' ;
$id_wilayah = '' ;
$id_inang = '' ;
$id_organisme = '' ;
$id_uji = '' ;
$urlAction = 'hpik/tambah' ;

if ( $status == 'edit' )
{
    foreach ( $hpik->result() as $row )
    {

        
        $id_negara = $row->id_negara ;

        $urlAction = 'hpik/update/' . $row->id_hpik ;
    }
}

?>
 
 
 
 <div class="col-md-6">
<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Form Tambah Produk </h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="<?php

echo base_url() . $urlAction ;

?>">
                                  <div class="box-body">
									
								    <div class="form-group">
                                           <label >Nama Produk </label>
											<input type="text" name="user" class="form-control" value="<?php

echo $nama ;

?>"id="namaProduk" placeholder="masukan nama produk">
								    </div>
										
								    <div class="form-group">
                                       <label ></label>
									  </div>
										
										 <label for="exampleInputFile"></label>
                                  </div>
                                    <!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
										 <a href="<?php echo base_url()?>hpik"><i name="iconposition" class="btn btn-success" title='Kembali' alt='Kembali'   > Kembali</i></a>
                                    </div>
									
                                </form>
                            
							
							</div><!-- /.box -->
 </div>