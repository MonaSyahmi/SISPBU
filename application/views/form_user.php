 <?php

$username = '' ;
$nama = '' ;
$peran = '' ;
$password = '' ;
$url_foto='';
$urlAction = 'user/tambah' ;

if ( $status == 'edit' )
{
    foreach ( $isi->result() as $row )
    {
        $username = $row->username ;
        $nama = $row->nama ;
        $peran = $row->role ;
		$url_foto = $row->url_foto ;
        $urlAction = 'user/update/' . $row->id_user ;
    }
}

?>
 
 
 <div class="col-md-6">
<div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Form Tambah Admin </h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form enctype="multipart/form-data" method="post" action ="<?php

echo base_url() . $urlAction ;

?> " >
                                    <div class="box-body">
									
									 <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Admin </label>
                                            <input type="text" name="user" class="form-control" value="<?php

echo $nama ;

?>"id="namaPengguna" placeholder="masukan nama admin">
                                        </div>
										
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Username</label>
                                            <input type="username" class="form-control" name="username" value="<?php

echo $username ;

?>" id="username" placeholder="masukkan username">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="masukkan password">
                                        </div>
										<!--
										<div class="form-group">
                                            <label for="exampleInputPassword1">Confirm Password</label>
                                            <input type="password" name="confirmPassword" class="form-control" id="exampleInputPassword1" placeholder="confirm password">
                                        </div>
										-->
										
								  <div class="form-group">
                                      <label ></label>
								  </div>
								  <div class="form-group">
                                           
                                                <!--<label>
                                                    <input type="radio" name="role" id="role" <?php

if ( $peran == 1 )
{
    echo 'checked' ;
}

?>  value="1" >
                                                    Admin
                                                </label>
                                           
                                           
                                                <label>
                                                    <input type="radio" name="role" <?php

if ( $peran == 2 )
{
    echo 'checked' ;
}

?>  id="role" value="2">
                                                    Umum
                                                </label>
                                        </div>
										
										

                                       -->
                                                <label for="exampleInputFile">File Foto</label>
                                            <input type="file" name="fotouser" >
								  </div>
										<!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" value ="upload" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->
 </div>