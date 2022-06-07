<?php 
namespace App\Database\Seeds;

class Users extends \CodeIgniter\Database\Seeder{
    public function run(){
        $data = [
            "name"=>"Admin",
            "email"=>"jmunoz@gpscontrol.cl",
            "password"=> hash('1234')

        ];

        $this->db->table('users')->insert($data);
    }
}