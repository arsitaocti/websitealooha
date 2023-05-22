<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStatusTable extends Migration
{
    public function up()
    {
        $fields = [
            "Id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "Sender_id" => [
                "type"=> "INT",
                
            ],
            "receiver" => [
                "type"=> "INT",
                
            ],
            "Message" => [
                "type"=> "TEXT",
                
            ],
            
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('message', true); //If NOT EXISTS create table products        
    }

    public function down()
    {
        $this->forge->dropTable('message', true); //If Exists drop table products
 
    }
}


