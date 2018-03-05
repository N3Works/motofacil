<?php
namespace App\Models;

use App\Models\ModelControl;

/**
 * Class Motos
 * @package App\Models
 * @author Thiago Farias <thiago.amarante.farias@gmail.com>
 * @version 03/03/2018
 */
class Motos extends ModelControl {
    
    
    protected $primaryKey = 'id';
    
    public $table = 'motos';
    public $timestamps = false;

    
    /**
     * Variaveis seguras para uso e guardar dados 
     * @var array 
     */
    public $fillable = [
        'id',
        'modelo',
        'marca',
        'ano',
        'estilo',
        'cilindrada',
        'potencia',
        'tanque',
        'peso_seco',
        'trasmissao',
        'tipo_motor',
        'refrigeracao',
        'categoria',
        'anexo_id',
        'data_ini',
        'data_fim'
    ];
    
    /**
     * Tipos nativos dos atributos
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'modelo' => 'string',
        'marca' => 'string',
        'ano' => 'integer',
        'estilo' => 'string',
        'cilindrada' => 'integer',
        'potencia' => 'integer',
        'tanque' => 'integer',
        'peso_seco' => 'integer',
        'trasmissao' => 'string',
        'tipo_motor' => 'string',
        'refrigeracao' => 'string',
        'categoria' => 'string',
        'anexo_id' => 'integer',
    ];    
    
    /**
     * Label dos atributos
     * @var array 
     */
    public $labels = [
        'id' => 'ID',
        'modelo' => 'Modelo',
        'marca' => 'Marca',
        'ano' => 'Ano',
        'estilo' => 'Estilo',
        'cilindrada' => 'Cilindrada',
        'potencia' => 'Potência',
        'tanque' => 'Tanque',
        'peso_seco' => 'Peso Seco',
        'trasmissao' => 'Transmissão',
        'tipo_motor' => 'Tipo Motor',
        'refrigeracao' => 'Refrigeração',
        'categoria' => 'Categoria',
        'anexo_id' => 'Anexo',
    ];
    
    /**
     * Busca o modelo de anexos
     * @return anexos
     */
    public function Anexos() {
        return $this->belongsTo('App\Models\Anexos', 'anexo_id', 'id');
    }

    /**
     * Realiza a consulta da tabela
     *
     * @param array $filter
     * @return \Illuminate\Support\Collection
     */
    public function consultar(array $filter = [], $expression = '*') {
        
        if(empty($filter)) {
            $filter = $this->toArray();
        }
        
        $builder = self::selectRaw($expression);       
          
        if($this->modelo) {
            $builder->where('modelo', 'LIKE', '%'.$this->modelo.'%');
        }
              
        if($this->marca) {
            $builder->where('marca', 'LIKE', '%'.$this->marca.'%');
        }
                
        if($this->ano) {
            $builder->where('ano', $this->ano);
        }
        
        if ($this->data_ini) {
            $builder->where('ano', '>=', $this->data_ini);
        }
        
        if ($this->data_fim) {
            $builder->where('ano', '<=', $this->data_fim);
        }
         

        $builder->orderBy('id', 'DESC');

        return $builder->get();
    }
}