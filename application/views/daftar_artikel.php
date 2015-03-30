 <div class="row">
                        <div class="col-xs-12">
                            
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Daftar Artikel </h3>                                    
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
                                                <th width="24">No </th>
                                               
                                                <th width="123">Kategori SPBU </th>
												<th width="68">Kode SPBU </th>
												<th width="211">Gambar SPBU </th>
												<th width="424">Isi  </th>
												<th width="90">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php

$no = 1 ;
foreach ( $isi->result() as $row )
{

?>
                                            <tr>
                                                <td><?php

    echo $no++ ;

?></td>
                                                
												<td><?php

    echo $row->nama_organisme ;

?></td>
												<td><?php

    echo $row->nama ;

?></td>
												<td><?php

    echo $row->gol_hpik ;

?></td>
												<td>&nbsp;</td>
												<td><a href="<?php

    echo base_url()

?>organisme/edit_organisme/<?php

    echo $row->id_organisme ;

?>"><i class="btn-info btn-sm" title='Delete' alt='Delete'   >Edit</i></a>|
												<a href="<?php

    echo base_url()

?>organisme/delete/<?php

    echo $row->id_organisme ;

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
