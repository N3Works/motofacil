<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertPermissoesMotosTable extends Migration {

    public function up() {
        DB::table('permissoes')->insert([
            [
                'permanente' => 1,
                'permissao' => 'MOTOS_LISTAR',
                'descricao' => 'Acessar a lista de Motos',
            ],
            [
                'permanente' => 1,
                'permissao' => 'MOTOS_DETALHAR',
                'descricao' => 'Acessar o detalhe do Moto',
            ],
            [
                'permanente' => 1,
                'permissao' => 'MOTOS_CADASTRAR',
                'descricao' => 'Acessar a tela de cadastro do Moto',
            ],
            [
                'permanente' => 1,
                'permissao' => 'MOTOS_EDITAR',
                'descricao' => 'Acessar a tela de edição do Moto',
            ],
            [
                'permanente' => 1,
                'permissao' => 'MOTOS_EXCLUIR',
                'descricao' => 'Você não pode excluir este Moto',
            ],
        ]);
    }
}