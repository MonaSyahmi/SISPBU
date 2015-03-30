 
 
  <?php

$nama = '' ;
$id_jenis_pemeriksaan = '' ;
$id_object_pemeriksaan = '' ;
$id_jenis_object_pemeriksaan = '' ;
$id_organisme = '' ;
$id_mapping = '' ;
$satuan = '' ;
$tarif= '' ;
$urlAction = 'biaya/tambah' ;

if ( $status == 'edit' )
{
    foreach ( $mapping->result() as $row )
    {

        
        $id_jenis_pemeriksaan = $row->id_jenis_pemeriksaan ;
		
		$id_object_pemeriksaan = $row->id_object_pemeriksaan ;
		$id_jenis_object_pemeriksaan = $row->id_jenis_object_pemeriksaan ;
		$satuan = $row->satuan;
		$tarif=$row->tarif;

        $urlAction = 'biaya/update/' . $row->id_mapping ;
		
    }
}

?>
 
 
 
 <div class="col-md-6">
<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Form Persebaran HPIK</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" method="post" action="<?php

echo base_url() . $urlAction ;

?>">
                                    <div class="box-body">
									
									 <div class="form-group">
                                            <label >Jenis Pemeriksaan</label>
                                            <select  id="myselect" name ="id_jenis_pemeriksaan" style="width:400px" >
											<?php

foreach ( $m_pemeriksaan->result() as $row )
{

?>
											<option value="<?php

    echo $row->id_jenis_pemeriksaan ;

?>" <?php

    if ( $row->id_jenis_pemeriksaan == $id_jenis_pemeriksaan )
    {
        echo 'selected' ;
    }

?>><?php

    echo $row->jenis_pemeriksaan ;

?></option>
											
											<?php

}

?>
			
			
	
		                       </select>
                                        </div>
										
										 <div class="form-group">
                                            <label >Kategori Organisme</label>
                                            <select  id="myselect1" name ="id_object_pemeriksaan" style="width:400px" >
											<?php

foreach ( $m_object_pemeriksaan->result() as $row )
{

?>
											<option value="<?php

    echo $row->id_object_pemeriksaan ;

?>" <?php

    if ( $row->id_object_pemeriksaan == $id_object_pemeriksaan )
    {
        echo 'selected' ;
    }

?>><?php

    echo $row->nama_object_pemeriksaan ;

?></option>
											
											<?php

}

?>
			
			
	
		                       </select>
                                        </div>
										
										 <div class="form-group">
                                            <label >Nama Object Pemeriksaan</label>
                                            <select  id="myselect2" name ="id_jenis_object_pemeriksaan" style="width:400px" >
											<?php

foreach ( $m_jenis_object_pemeriksaan->result() as $row )
{

?>
											<option value="<?php

    echo $row->id_jenis_object_pemeriksaan ;

?>" <?php

    if ( $row->id_jenis_object_pemeriksaan == $id_jenis_object_pemeriksaan )
    {
        echo 'selected' ;
    }

?>><?php

    echo $row->jenis_objek_pemeriksaan ;

?></option>
											
											<?php

}

?>
			
			
	
		                       </select>
                                        </div>
										
										 <div class="form-group">
                                            <label >Satuan</label>
											 <select name="satuan" >
        	<option value="ekor"  <?php if($satuan=='ekor')echo 'selected';?> >ekor</option>
            <option value="pcs" <?php if($satuan=='pcs')echo 'selected';?>  >pcs</option>
            <option value="Kg"  <?php if($satuan=='Kg')echo 'selected';?> >Kg</option>            
            <option value="gr"  <?php if($satuan=='gr')echo 'selected';?>  >gr</option>
            <option value="ml"  <?php if($satuan=='ml')echo 'selected';?>  >ml</option>
            <option value="liter"  <?php if($satuan=='liter')echo 'selected';?>  >liter</option>
            <option value="Ampul"  <?php if($satuan=='Ampul')echo 'selected';?>  >ampul</option>
            <option value="butir"  <?php if($satuan=='butir')echo 'selected';?>  >butir</option>
        </select>
											
                                       </div> 
									    <div class="form-group">
                                            <label >Tarif</label>
											<input class="form-control" type="text" value="<?php echo $tarif;?>" name="tarif" ">
                                       </div> 
									
									
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
										 <a href="<?php echo base_url()?>biaya"><i name="iconposition" class="btn btn-success" title='Kembali' alt='Kembali'   > Kembali</i></a>
                                    </div>
									
                                </form>
                            
							
							</div><!-- /.box -->
 </div>