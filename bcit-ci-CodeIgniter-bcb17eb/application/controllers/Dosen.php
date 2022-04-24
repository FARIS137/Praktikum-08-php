<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dosen extends CI_controller
 {
    
  public function index()
    {
      $this->load->model("dosen_model","dsn1");
      $this->dsn1->nama='Budi Setiawan';
      $this->dsn1->gender='L';
      $this->dsn1->nidn='012345';
      $this->dsn1->pendidikan='S1';  
      $this->dsn1->namam='Pemrograman Web';
      $this->dsn1->sks='3';
      $this->dsn1->kode='Pweb';
    
      $this->load->model("dosen_model","dsn2");
      $this->dsn2->nama='Bunay alkahfi';
      $this->dsn2->gender='L';
      $this->dsn2->nidn='1230987';
      $this->dsn2->pendidikan='S2';
      $this->dsn2->namam='Basis Data';
      $this->dsn2->sks='4';
      $this->dsn2->kode='Bdata';  
    
      $this->load->model("dosen_model","dsn3");
      $this->dsn3->nama='khonsa aulia';
      $this->dsn3->gender='P';
      $this->dsn3->nidn='0210201';
      $this->dsn3->pendidikan='D3';  
      $this->dsn3->namam='UI?UX';
      $this->dsn3->sks='3';
      $this->dsn3->kode='UIUX';
      
      $list_dsn = [$this->dsn1, $this->dsn2,$this->dsn3];
      $data['list_dsn']=$list_dsn;
     
      $this->load->view('dosen/index',$data);
      
     
    }

}


?>