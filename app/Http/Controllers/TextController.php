<?php

namespace App\Http\Controllers;

use App\Text;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\LengthAwarePaginator;


class TextController extends Controller
{

    public function indexadmin()
    {
        $texts = \App\Text::all();
        return view('Admin.textos.index')->with('texts',$texts);
    }

    public function create()
    {

        return view('Admin.textos.create');
    }

    public function store(Requests\CreateTextosRequest $request)
    {
        Text::create($request->all());
        return redirect('admin/textos');
    }

    public function show($id)
    {
        $texts = \App\Text::findOrFail($id);
        return view('admin.viewtext')->with('texts',$texts);
    }

    public function edit($id){

        $text = \DB::table('texts')->where('id',$id)->first();


        return view('admin.textos.edit')->with('text', $text);

        }

    public function update(Request $request)
    {

        $post = $request->all();

        $data = array(
            'titulo' => $post['titulo'],
            'conteudo' => $post['conteudo'],
        );

        \DB::table('texts')-> where ('id', $post['id'])->update($data);

            return redirect('admin/textos');
    }

    public function destroy($id)
    {
        //
    }
}
