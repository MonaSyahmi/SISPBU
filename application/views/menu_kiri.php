<li class=" <?php
  if ( $menu == '' )
  {
      echo 'active' ;
  }
  
  ?>">
  <!--
  <a href="<?php
    echo base_url()
    
    ?>dashboard">
  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
  </a>
</li>
-->
<li  class="treeview <?php
  if ( $menu == 'user' )
  {
      echo 'active' ;
  }
  
  ?> ">
  <a href="#">
  <span> Pengguna</span>
  <i class="fa fa-angle-left pull-right"></i>  </a>
  <ul class="treeview-menu">
    <li class="<?php
      if ( $sub_menu == 'tambah_user' )
      {
          echo 'active' ;
      }
      
      ?>"><a href="<?php
      echo base_url()
      
      ?>user/tambah_user"><i class="fa fa-plus"></i>Tambah Pengguna</a></li>
    <li class="<?php
      if ( $sub_menu == 'daftar_user' )
      {
          echo 'active' ;
      }
      
      ?>" ><a href="<?php
      echo base_url()
      
      ?>user/daftar_user"><i class="fa fa-list"></i> Daftar Pengguna</a></li>
  </ul>
</li>
<li class="treeview <?php
  if ( $menu == 'produk' ) { echo 'active' ; } ?> "> <a href="#"> <span>Produk</span> <i class="fa fa-angle-left pull-right"></i> </a>
  <ul class="treeview-menu">
    <li class="<?php
      if ( $sub_menu == 'tambah_produk' )
      {
          echo 'active' ;
      }
      
      ?> " ><a href="<?php
      echo base_url()
      
      ?>produk/tambah_produk"><i class="fa fa-plus"></i>Tambah Produk </a></li>
    <li class="<?php
      if ( $sub_menu == 'daftar_produk' )
      {
          echo 'active' ;
      }
      
      ?> " ><a href="<?php
      echo base_url()
      
      ?>produk/daftar_produk"><i class="fa fa-list"></i> Daftar Produk</a></li>
  </ul>
</li>

<li class="treeview <?php
  if ( $menu == 'fasilitas' ) { echo 'active' ; } ?> "> <a href="#"> <span>Fasilitas</span> <i class="fa fa-angle-left pull-right"></i> </a>
  <ul class="treeview-menu">
    <li class="<?php
      if ( $sub_menu == 'tambah_fasilitas' )
      {
          echo 'active' ;
      }
      
      ?> " ><a href="<?php
      echo base_url()
      
      ?>fasilitas/tambah_fasilitas"><i class="fa fa-plus"></i>Tambah Fasilitas </a></li>
    <li class="<?php
      if ( $sub_menu == 'daftar_fasilitas' )
      {
          echo 'active' ;
      }
      
      ?> " ><a href="<?php
      echo base_url()
      
      ?>fasilitas/daftar_fasilitas"><i class="fa fa-list"></i> Daftar Fasilitas </a></li>
  </ul>
</li>
<li class="treeview <?php
  if ( $menu == 'pengujian' ) { echo 'active' ; } ?> ">
  <a href="#">
  <span>SPBU</span> <i class="fa fa-angle-left pull-right"></i> </a>
  <ul class="treeview-menu">
    <li class="<?php
      if ( $sub_menu == 'tambah_pengujian' )
      {
          echo 'active' ;
      }
      
      ?> " ><a href="<?php
      echo base_url()
      
      ?>spbu/tambah_spbu"><i class="fa fa-plus"></i>Tambah SPBU </a></li>
    <li class="<?php
      if ( $sub_menu == 'daftar_spbu' )
      {
          echo 'active' ;
      }
      
      ?> " ><a href="<?php
      echo base_url()
      
      ?>spbu/daftar_spbu"><i class="fa fa-list"></i> Daftar SPBU </a></li>
  </ul>
</li>
<li class="treeview <?php
  if ( $menu == 'komentar' ) { echo 'active' ; } ?> "> <a href="#"> </i> <span>Komentar</span><i class="fa fa-angle-left pull-right"></i></a>
  <ul class="treeview-menu">
    <li class="<?php
      if ( $sub_menu == 'daftar_komentar' )
      {
          echo 'active' ;
      }
      
      ?> " ><a href="<?php
      echo base_url()
      
      ?>komentar/daftar_komentar"><i class="fa fa-list"></i> Daftar Komentar </a></li>
  </ul>
</li>
