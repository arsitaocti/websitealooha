<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStatusTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "status" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "link" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            "photo" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
            ],
            
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('story', true); //If NOT EXISTS create table products
    }

    public function down()
    {
        $this->forge->dropTable('story', true); //If Exists drop table products
    }
}
