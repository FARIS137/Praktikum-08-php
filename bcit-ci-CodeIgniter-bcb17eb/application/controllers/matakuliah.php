<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah extends CI_controller{
    
    public function index()
{
    $this->load->model('matakuliah_model','dsn1');
    $this->dsn1->namam='Pemrograman Web';
    $this->dsn1->sks='3';
    $this->dsn1->kode='Pweb';

    $this->load->model('matakuliah_model','dsn2');
    $this->dsn2->namam='Basis Data';
    $this->dsn2->sks='4';
    $this->dsn2->kode='Bdata';

    $this->load->model('matakuliah_model','dsn3');
    $this->dsn3->namam='UI?UX';
    $this->dsn3->sks='3';
    $this->dsn3->kode='UIUX';


    $list_matkul = [$this->dsn1, $this->dsn2,$this->dsn3];
    $data['list_matkul']=$list_matkul;

 $this->load->view('matakuliah/index',$data);

}

}