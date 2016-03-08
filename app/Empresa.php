<?php

namespace fretamento;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresa';
    protected $fillable = array('razao_social_emp', 'nome_fantasia_emp', 'endereco_emp', 'complemento_emp', 'cep_emp', 'bairro_emp', 'cidade_emp', 'uf_emp', 'cnpj_emp', 'insc_municipal_emp', 'insc_estadual_emp', 'logo_emp');
}
