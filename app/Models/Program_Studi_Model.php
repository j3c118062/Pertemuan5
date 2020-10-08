<?php namespace App\Models;

use CodeIgniter\Model;

class Program_Studi_Model extends Model {

    public function get() {
        $db = \Config\Database
        $db->table('prodi')->getResult();
    }
}