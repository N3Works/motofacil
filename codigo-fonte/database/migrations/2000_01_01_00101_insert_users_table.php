<?php
use Illuminate\Database\Migrations\Migration;

class InsertUsersTable extends Migration {

    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up() {
        $datetime = date('Y-m-d H:i:s');
        DB::table('users')->insert([
            [
                'id' => 1,
                'cpf' => '00925779032',
                'nome' => 'Administrador',
                'email' => 'flavio@fgprestadora',
                'perfil_id' => 1,
                'password' => '202cb962ac59075b964b07152d234b70',
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],
            [
                'id' => 2,
                'cpf' => '12345678901',
                'nome' => 'Juca',
                'email' => 'juca@juca.com',
                'perfil_id' => 2,
                'password' => '202cb962ac59075b964b07152d234b70',
                'created_at' => $datetime,
                'updated_at' => $datetime,
            ],
        ]);
    }

}
