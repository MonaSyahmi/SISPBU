<?php
   $nama = '' ;
   $id_jenis_organisme = '' ;
   $gol_hpik = '' ;
   $urlAction = 'organisme/tambah' ;
   
   if ( $status == 'edit' )
   {
       foreach ( $organisme->result() as $row )
       {
   
           $nama = $row->nama_organisme ;
           $id_jenis_organisme = $row->jenis_organisme ;
           $gol_hpik = $row->gol_hpik ;
   
           $urlAction = 'organisme/update/' . $row->id_organisme ;
       }
   }
   
   ?>
<div class="col-md-6">
   <div class="box box-primary">
      <div class="box-header">
         <h3 class="box-title">Form Organisme Penyakit</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form role="form" method="post" action="<?php
         echo base_url() . $urlAction ;
         
         ?>">
         <div class="box-body">
            <div class="form-group">
               <label >Jenis Organisme</label>
               <select  id="myselect" name ="id_jenis" >
                  <?php
                     foreach ( $jenis->result() as $row )
                     {
                     
                     ?>
                  <option value="<?php
                     echo $row->id_jenis ;
                     
                     ?>" <?php
                     if ( $row->id_jenis == $id_jenis_organisme )
                     {
                         echo 'selected' ;
                     }
                     
                     ?>><?php
                     echo $row->nama ;
                     
                     ?></option>
                  <?php
                     }
                     
                     ?>
               </select>
            </div>
            <div class="form-group">
               <label >Nama Organisme</label>
               <input type="text" class="form-control" value="<?php
                  echo $nama ;
                  
                  ?>" name="nama_organisme" id="nama_organisme" placeholder="masukan nama Organisme">
            </div>
            <div class="form-group">
               <label >Golongan HPIK</label>
               <input type="text" class="form-control" value="<?php
                  echo $gol_hpik ;
                  
                  ?>" name="gol_hpik" id="gol_hpik" placeholder="masukan Golongan HPIK dalam bentuk Romawi">
            </div>
         </div>
         <!-- /.box-body -->
         <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="<?php echo base_url()?>organisme"><i name="iconposition" class="btn btn-success" title='Kembali' alt='Kembali'   > Kembali</i></a>
         </div>
      </form>
   </div>
   <!-- /.box -->
</div>