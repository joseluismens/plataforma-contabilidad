<?php
namespace App\Entities;
use CodeIgniter\Entity;


class TiposAfp extends Entity{
    protected $attributes = [
      "id"=>null,
      "name"=>null

    ];
    protected $dates=['created_at'];
}