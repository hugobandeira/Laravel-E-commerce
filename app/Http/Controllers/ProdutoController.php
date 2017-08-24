<?php

namespace App\Http\Controllers;

use App\Categoria;
use Faker\Provider\File;
use Illuminate\Http\Request;
use DB;
use App\Produto;

class ProdutoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index')->with('produtos', $produtos);
    }

    public function create()
    {
        return view('produtos.formulario')->with('categorias', Categoria::all());
    }

    public function store(Request $request)
    {
        $strImg = "";
        if ($request->file('foto')) {
            $imagem = $request->file('foto');
            $formato = $imagem->getClientOriginalExtension();
            if ($formato != 'jpg' && $formato != 'jpeg' && $formato != 'png') {
                return back()->with('error', 'Erro: Este Arquivo não é uma imagem válida');
            } else {
                $img = md5(microtime(true));
                $strImg = '/imagens/produtos/' . $img . '.' . $formato;
                $request->file('foto')->move(base_path() . '/public/imagens/produtos', $img . '.' . $formato);
            }
        }

        $prodotos = new Produto();
        $prodotos::create([
            'nome' => $request['nome'],
            'valor' => $request['valor'],
            'descricao' => $request['descricao'],
            'tamanho' => $request['tamanho'],
            'quantidade' => $request['quantidade'],
            'categoria_id' => $request['categoria_id'],
            'foto' => $strImg,
        ]);

        return redirect('/produtos')->withInput();
    }

    public function show($id)
    {
        $produtos = Produto::find($id);
        return view('produtos.detalhes', ['p' => $produtos]);
    }

    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('produtos.edite')->with('p', $produto)->with('categorias', Categoria::all());
    }

    public function update(Request $request ,$id)
    {
        $produto = Produto::find($id);
        $strImg = $produto->foto;

        if ($request->file('foto')) {
          //  File::delete(base_path() . '/public' . $strImg);
            $imagem = $request->file('foto');
            $formato = $imagem->getClientOriginalExtension();
            if ($formato != 'jpg' && $formato != 'png') {
                return back()->with('erro', 'Erro: Este Arquivo não é uma imagem válida');
            } else {
                $img = md5(microtime(true));
                $strImg = '/imagens/produtos/' . $img . '.' . $formato;
                $request->file('foto')->move(base_path() . '/public/imagens/produtos', $img . '.' . $formato);
            }
        }

        $produto->nome = $request->input('nome');
        $produto->valor = $request->input('valor');
        $produto->descricao = $request->input('descricao');
        $produto->tamanho = $request->input('tamanho');
        $produto->quantidade = $request->input('quantidade');
        $produto->categoria_id = $request->input('categoria_id');
        $produto->foto = $strImg;
        $produto->save();
//        'nome', 'valor', 'descricao', 'tamanho', 'quantidade', 'categoria_id', 'foto'
        return redirect()->route('produtos.index');
    }

    public function destroy($id)
    {

        $produto = Produto::find($id);
        $produto->delete();
        return redirect()->action('ProdutoController@index');
    }
}
