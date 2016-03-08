<?php

namespace fretamento;

use Illuminate\Database\Eloquent\Model;

class TipoVeiculo extends Model
{
    protected $table = 'tipos_veiculo';
    protected $primaryKey = 'ID_TIPO_VEIC';
    protected $fillable = array('DESC_TIPO_VEIC');
    public $timestamps = false;
}
