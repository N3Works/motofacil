<?php
/* @var Controller $this */

namespace App\Http\Controllers;

//Base do controlador
use App\Http\Controllers\Controller; //Base do controlador
use Illuminate\Http\Request; //Controle de dados por request
use App\Models\Motos;
use App\Http\Requests\SolicitacaoPropostaFormRequest;
use Mail;
use Response;

/**
 * Controlador da WebPage
 * @author Thiago Farias <thiago.amarante.farias@gmail.com>
 */
class WebPageController extends Controller {
    
    /**
     * Página inicial da WebPage
     * @param Request $request dados do formulário
     * @return Response
     */
    public function index(Request $request) {
        return view('webPage.index');
    }
    
    /**
     * Página De busca das motos da WebPage
     * @param Request $request dados do formulário
     * @return Response
     */
    public function buscarMotos(Request $request) {
        $model = new Motos();
        $model->fill($request->all());
        $anos = [];
        $modelos = [];
        
        if ($model->marca) {
            $marcaFiltro = Motos::where('marca', $model->marca);
            $modelos = $marcaFiltro->pluck('modelo', 'modelo');
            $anos = $marcaFiltro->pluck('ano', 'ano');
        }
        
        return view('webPage.buscarMotos', [
            'model' => $model,
            'motos' => $model->consultar(),
            'marcas' => $model->pluck('marca', 'marca'),
            'anos' => $anos,
            'modelos' => $modelos,
        ]);
    }
    
    /**
     * Página De busca das motos da WebPage
     * @param Request $request dados do formulário
     * @return Response
     */
    public function quemSomos() {
        return view('webPage.quemSomos');
    }
    
    /**
     * Tela de detalhe da moto
     * @param integer $id Indentificador da moto
     * @return Response
     */
    public function show($id) {
        
        if (isset($id) && $id) {
            $model = new Motos();
            $moto = $model->find($id);
           
            return view('webPage.show', [
                'moto' => $moto,
            ]);
        } else {
            redirect(url('/index'));
        }
    }
    
    /**
     * Página De busca das motos da WebPage
     * @param Request $request dados do formulário
     * @return Response
     */
    public function solicitarProposta(Request $request) {
        
        $dados = $request->all();
        $proposta = null;
        
        
        if (isset($dados['proposta'])) {
            $proposta = $dados['proposta'];
            
            if ($proposta == 'aposentados') {
                $proposta = array();
                $proposta['titulo'] = 'Empréstimo para aposentados em 72x';
                $proposta['valor'] = 'aposentados';
            } else {
                $moto = Motos::find($dados['proposta']);
                if (empty($moto)) {
                    $proposta = null;
                } else {
                    $proposta = array();
                    $proposta['titulo'] = $moto->modelo;
                    $proposta['valor'] = $moto->id; 
                }
            }
        }
        
        return view('webPage.solicitarProposta', [
            'proposta' => $proposta,
        ]);
    }
    
    /**
     * Página De busca das motos da WebPage
     * @param Request $request dados do formulário
     * @return Response
     */
    public function enviarProposta(SolicitacaoPropostaFormRequest $request) {
        
        $dados = $request->all();
        $proposta = null;
        
        
        if (isset($dados['proposta'])) {
            $proposta = $dados['proposta'];
            
            if ($proposta == 'aposentados') {
                $proposta = array();
                $proposta['titulo'] = 'Empréstimo para aposentados em 72x';
                $proposta['valor'] = 'aposentados';
            } else {
                $moto = Motos::find($dados['proposta']);
                if (empty($moto)) {
                    $proposta = null;
                } else {
                    $proposta = array();
                    $proposta['titulo'] = $moto->modelo;
                    $proposta['valor'] = $moto->id;
                    $motoDetalhe = $moto->toArray();
                }
            }
        }
        
        if ($request->isMethod('post')) {
            $dados = $request->all();
            $subject = 'Solicitação de Proposta';
            $dados['tipo_proposta'] = $proposta['titulo'];
            if (!isset($dados['email'])) {
                $dados['email'] = '';
            }
            if ($motoDetalhe) {
                $dados['motoDetalhe'] = $motoDetalhe;
            }
            Mail::send('webPage.mail.proposta' , $dados, function ($message) use ($subject) {
                $config = config('mail'); // get config de email
                $message->from($config['from']['address'], $config['from']['name']);
                $message->to($config['from']['address'], $config['from']['name']);
                $message->subject($subject);
            });
            
            $this->setMessage('Enviado com sucesso!', 'success');
        }
        
        return redirect(url('solicitar'));
    }
    
    /**
     * Busca os dados restantes para o filtro da moto
     * @param string $marca
     */
    public function buscarModeloEAno($marca) {
        $marcaFiltro = Motos::where('marca', $marca);
        $modelos = $marcaFiltro->pluck('modelo', 'modelo');
        $anos = $marcaFiltro->pluck('ano', 'ano');
        
        return Response::json(array(
            'anos' => $anos,
            'modelos' => $modelos,
        ));
    }
}
