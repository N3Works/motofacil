<?php
/* @var Controller $this */
namespace App\Http\Controllers;

//Base do controlador
use App\Http\Controllers\Controller;
use App\Http\Requests\MotosFormRequest;
use App\DataTables\MotosDataTable as DataTable;
use Illuminate\Http\Request;
use Response;

//Modelo da controller
use App\Models\Motos; 

/**
 * Controlador Moto
 *
 * @author Thiago Farias <thiago.amarante.farias@gmail.com>
 */
class MotosController extends Controller {

    /**
     * @var Model Motos
     */
    protected $model;
    
    /**
     * @var DataTable
     */
    protected $dataTable;
    
    /**
     * MotosController constructor.
     * @param Motos $motos
     */
    public function __construct(Motos $motos, DataTable $dataTable) {
        $this->model = $motos;
        $this->dataTable = $dataTable;
    }
    
    /**
     * Monta a listagem dos Moto
     * @param Request $request dados do formulário
     * @return Response
     */
    public function index(Request $request) {
        $this->authorize('MOTOS_LISTAR', 'PermissaoPolicy');
        $this->model->fill($request->all());
        $this->dataTable->model = $this->model;
        
        if (app('request')->isXmlHttpRequest()) {
            return $this->dataTable->ajax();
        }
        
        return view('motos.index', array(
            'model' => $this->model,
            'dataTable' => $this->dataTable->html(),
        ));
    }
        
    /**
     * Consultar dados dos Motos para construir o datatables
     * @param Request $request
     * @return json
     */
    public function consultar(Request $request) {
        $this->model->fill($request->all());
        return $this->model->consultarDataTables();
    }
        
    /**
     * Mostra o formulário para criar/editar um Moto
     * @return Response
     */    
    public function form(Request $request) {
        $id = $request->route('id');
        $this->model->setAttributes($request->all()); 
        $model = $this->model;
        
        if ($id) {
            $this->authorize('MOTOS_EDITAR', 'PermissaoPolicy');
            $model = $this->model->find($id);
            $model->formatAttributes('get');
        
            if (!$model) {
                $this->setMessage('O Moto não foi encontrado', 'danger');
                return redirect(url('Motos/index'));
            }
        } else {
            $this->authorize('MOTOS_CADASTRAR', 'PermissaoPolicy');
        }
        
        return view('motos.form', array(
            'model' => $model,
        ));
    }
    
    /**
     * Salva o Moto     * @param $request ajusta os dados que vem do formulário
     * @return Response
     */
    public function save(MotosFormRequest $request) {
        $this->model->fill($request->all());
        
        if (!empty($this->model->id)) {
            $alterar = $this->model->find($this->model->id);
    
            if (empty($alterar) || is_null($alterar)) {
                $this->setMessage('O Moto a ser alterado não existe no banco de dados!', 'danger');    
            } else {
                $this->setMessage('O Moto foi alterado com sucesso!', 'success');    
                $alterar->update($this->model->toArray());
            }
        } else {
            $this->model->create($this->model->toArray());
            $this->setMessage('O Moto foi salvo com sucesso!', 'success');
        }
        
        return redirect(url('Motos/index'));
    }
    
    /**
     * Mostra o detalhe do Moto     * @param  int $id Identificador
     * @return Response
     */
    public function show($id) {
        $this->authorize('MOTOS_DETALHAR', 'PermissaoPolicy');
        $model = $this->model->find($id);
        
        if (!$model) {
            $this->setMessage('O Moto não foi encontrado', 'danger');
            return redirect(url('Motos/index'));
        }
        
        return view('motos.show', [
            'model' => $model,
        ]);
    }

    /**
     * Ação de destruir/excluir um Moto
     *
     * @param integer $id
     * @return Response::json
     */
    public function destroy($id) {
        $model = $this->model->find($id);

        $model->findOrFail($id)->delete();
        
        return Response::json(array(
            'success' => true,
            'msg' => 'O Moto foi excluido com sucesso!',
        ));
    }
}
