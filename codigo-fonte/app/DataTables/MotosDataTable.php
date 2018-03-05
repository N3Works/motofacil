<?php
namespace App\DataTables;

use App\Models\Motos;
use App\Http\Helper\Formatar;
//use App\Http\Helper\Util;
use Yajra\Datatables\Services\DataTable;
/**
 * DataTable para o modelo de Motos * @author Thiago Farias <thiago.amarante.farias@gmail.com>
 */
class MotosDataTable extends DataTable {
    
    public $model;

    /**
     * Mostra a resposta em ajax
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax() {

        return $this->datatables->of($this->model->consultar())
            ->addColumn('acoes', function ($query) {
                $botoes = [];
                
                if (\Auth::user()->verificarPermissao('MOTOS_DETALHAR')) {
                    $botoes[] = '<a  href="' . url('motos/show', ['id' => $query->id]) . '"><button class="btn btn-default"><i class="fa fa-search"></i></button></a>';
                }
                
                if (\Auth::user()->verificarPermissao('MOTOS_EDITAR')) {
                    $botoes[] = '<a  href="' . url('motos/form', ['id' => $query->id]) . '"><button class="btn btn-primary"><i class="fa fa-pencil"></i></button></a>';
                }
                    
                if (\Auth::user()->verificarPermissao('MOTOS_EXCLUIR')) {
                    $botoes[] = '<a  href="#devNull" class="destroyTr" data-rel="' . $query->id . '" ><button class="btn btn-danger"><i class="fa fa-times"></i></button></a>';
                }
                
                return implode('', $botoes);
            })
                ->editColumn('anexo_id', function ($query) {
                return !empty($query->Anexos) ? $query->Anexos->nome_fantasia : '';
            })
            ->make(true);
    }

    /**
     * Pega a consulta em objeto para ser processada pelo DataTables
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query() {} //Não está sendo utilizado pela necessidade dos filtros

    /**
     * Método opcional se você quiser usar o construtor de HTML
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html() {
    return $this->builder()
                ->columns($this->getColumns())
                ->ajax([])
                ->parameters($this->getBuilderParameters());
    }

    /**
     * Pega as colunas
     * @return array
     */
    protected function getColumns() {
        return [
            [
                'name' => 'modelo',
                'title' => $this->model->labels['modelo'],
                'style' => 'width:25%',
            ],
            [
                'name' => 'marca',
                'title' => $this->model->labels['marca'],
                'style' => 'width:25%',
            ],
            [
                'name' => 'ano',
                'title' => $this->model->labels['ano'],
                'style' => 'width:25%',
            ],
            [
                'name' => 'acoes',
                'title' => 'Ações',
                'style' => 'width:25%',
            ]
        ];
    }

    /**
     * Pega o nome do arquivo para exportanção
     * @return string
     */
    protected function filename() {
        return 'motos_' . time();
    }
}
