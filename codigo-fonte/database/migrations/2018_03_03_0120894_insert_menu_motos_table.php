<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertMenuMotosTable extends Migration {

    public function up() {
        $datetime = date('Y-m-d H:i:s');
        $id = DB::table('permissoes')->where('permissao', 'MOTOS_LISTAR')->first()->id;
        
        DB::table('menus')->insert([
            [
                'header' => 'Moto', 
                'controller' => 'Motos',
                'action' => 'index',
                'icon' => 'tags',
                'parent' => '0',
                'order' => 2,
                'permissao_id' => $id,
                'created_at' => $datetime,
                'updated_at' => $datetime, 
            ],
        ]);
    }
}