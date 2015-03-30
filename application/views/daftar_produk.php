 <div class="row">
                        <div class="col-xs-12">
                            
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Daftar Produk </h3>                                    
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
                                               
                                                <th>Nama Produk </th>
												<th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php

$no = 1 ;
{

?>
                                            <tr>
                                                <td><?php
    echo $no++ ;
?></td> <td><?php
    echo $row->nama_produk ;
?></td>
<td><a href="<?php echo base_url() ?>produk/edit_produk/<?php

    echo $row->id_produk ;

?>"><i class="btn-info btn-sm" title='Delete' alt='Delete'   >Edit</i></a>|
												<a href="<?php

    echo base_url()

?>hpik/delete/<?php

    echo $row->id_produk ;

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
