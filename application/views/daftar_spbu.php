 <div class="row">
                        <div class="col-xs-12">
                            
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Daftar SPBU </h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
								<?php

if ( isset( $delete ) )
{
    echo '<div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                        <b>Alert!</b> ' . $delete . '
                                    </div> ' ;
}

?>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No </th>
                                               
                                                <th>Kode SPBU </th>
												<th>Lokasi</th>
												<th>Fasilitas</th>
												<th>Produk</th>
												<th>Jam Operasional </th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php

$no = 1 ;
foreach ( $spbu->result() as $row )
{

?>
                                            <tr>
<td><?php echo $no++ ;?></td> 
<td><?php echo $row->kode_SPBU ;?></td>
<td><?php echo $row->lokasi_SPBU ; ?></td>
<td><?php echo $row->fasilitas_SPBU ; ?></td>
<td><?php echo $row->produk_SPBU ; ?></td>
<td><?php echo $row->jam_operasional ; ?></td>
<td><?php echo $row->url_gambar_SPBU ; ?></td>

 <td><a href="<?php echo base_url() ?>spbu/edit_spbu/<?php

    echo $row->id_SPBU ;

?>"><i class="btn-info btn-sm" title='Delete' alt='Delete'   >Edit</i></a>|
												<a href="<?php

    echo base_url()

?>hpik/delete/<?php

    echo $row->id_SPBU ;

?>"><i class="btn-danger btn-sm" title='Delete' alt='Delete' onclick="return confirm('Anda Yakin untuk Menghapus?')"  >Delete</i></a>												</td>
                                            </tr>
											<?php

}

?>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            
							
							</div><!-- /.box -->
                        
						
						</div>
                    </div>
