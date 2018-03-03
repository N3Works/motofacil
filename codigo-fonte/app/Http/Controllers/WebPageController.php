<?php
/* @var Controller $this */

namespace App\Http\Controllers;

//Base do controlador
use App\Http\Controllers\Controller; //Base do controlador
use Illuminate\Http\Request; //Controle de dados por request

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
}
