<!DOCTYPE html>
<?php

if ( ! defined( 'BASEPATH' ) )
    exit( 'No direct script access allowed' ) ;

$this->load->helper( 'html' ) ;

?>
 
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
       <?php

$this->load->view( "header" ) ;

?>
		
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                    
					<?php

$this->load->view( "menu_kiri" ) ;

?> 
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
              

                <!-- Main content -->

                   <?php

echo $isi ;

?> 
                               
               
            
			
			</aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


      
       <?php

if ( isset( $disable ) )
{

}
else
{

?>
	     <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
	    <!-- Bootstrap -->
        <script src="<?php

    echo base_url()

?>js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="<?php

    echo base_url()

?>js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php

    echo base_url()

?>js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php

    echo base_url()

?>js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php

    echo base_url()

?>js/AdminLTE/demo.js" type="text/javascript"></script>
        <!-- page script -->
	   <?php

}

?>
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
		
		
		

    </body>
</html>