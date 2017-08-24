<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    protected $table = 'produtos';
    public $timestamps = false;
    protected $fillable =
        array('nome', 'valor', 'descricao', 'tamanho', 'quantidade', 'categoria_id', 'foto');

    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }
}
