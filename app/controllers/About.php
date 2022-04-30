<?php

class About {
  
  public function index($nama = 'Sandhika', $pekerjaan = 'Dosen')
  {
    echo "halo nama saya $nama, saya adalah $pekerjaan";
  }
  
  public function page()
  {
    echo 'about/page';
  }
}