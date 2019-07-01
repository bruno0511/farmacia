<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Post;

class PostController extends Controller
{

    public function posts()
    {
      // $dados = DB::select('SELECT * FROM posts');
        $dados = Post::all();
        return view('posts')->with('posts',$dados);

    }
    public function formAdicionar()
    {
        return view('form-adicionar');
    }
    public function adicionar(Request $request)
    {
        //$titulo = $request->input('titulo');
        //$texto = $request->input('texto') ;

        // DB::insert('insert into posts (titulo, texto) values (?, ?)', [$titulo, $texto]);
        //$post = new Post();
        //$post->titulo = $titulo;
        // ou então puxa direto do request inves de criarnvariavel
       // $post->texto = $request->input('texto');

        //$post->save();

        Post::create($request->input());

        return redirect()->action('PostController@posts');
    }

    public function excluir($id)
    {
        Post::destroy($id);

        return redirect()->action('PostController@posts');
    }
    public function form_editar($id)
    {
        // buscar o post no bd
        $post = Post::find($id);

        return view('form_editar')->with('post',$post);
    }
    public function editar(Request $request)
    {
        $post = Post::find($request->id);
        $post->titulo = ($request->titulo);
        $post->texto = ($request->texto);
        $post->save();

        return redirect()->action('PostController@posts');
    }



}
