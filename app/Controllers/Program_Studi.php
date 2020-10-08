<?php
namespace App\Controllers;

use App\Models\Program_Studi_Model;

class Program_Studi extends BaseController {



        public function index() {
        $db = \Config\Database::connect();

        $data['dataProdi'] = $db->table('prodi')->getResult();



        //var_dump($data);die;

        echo view('header_v');
        echo view('program_studi_v', $data);
        echo view('footer_v');
        }

        

    public function add() {

    }
}