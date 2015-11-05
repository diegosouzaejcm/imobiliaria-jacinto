<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imovel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;

class ImoveisController extends Controller
{
    public function index()
    {
        $imoveis = \App\Imovel::paginate(16);
        $imoveis->setPath('');

        return view('imoveis')->with('imoveis', $imoveis);
    }

    public function indexadmin()
    {
        $imoveis = \App\Imovel::paginate(16);
        $imoveis->setPath('');

        return view('Admin.imoveis.index')->with('imoveis',$imoveis);
    }

    public function create()
    {
        return view('Admin.imoveis.create');
    }

    public function store(Requests\CreateImoveisRequest $request)
    {
        Imovel::create($request->all());
        return redirect('admin/imoveis');
    }

    public function show($id)
    {
        //
    }

    public function edit($id){

        $imovel = \DB::table('imoveis')->where('id',$id)->first();


        return view('admin.imoveis.edit')->with('imovel', $imovel);

    }

    public function reserva(Request $request){

//        $post = $request->all();
//
//        $data = (['estado'=>1]);
//
//        \DB::table('imoveis')->where('id', $post['id'])->update($data);
//
//        $imovel =\App\Imovel::find($request->id);
//        $imovel->update(['estado'=>1]);
//        return response()->json(['message'=>'reservado']);
    }

    public function update(Request $request)
    {
        $post = $request->all();

        $data = array(
            'nome' => $post['nome'],
            'img' => $post['img'],
            'descricao' => $post['descricao'],
            'localizacao' => $post['localizacao'],
            'tipo' => $post['tipo'],
            'quartos' => $post['quartos'],
            'vagas' => $post['vagas'],
            'area' => $post['area'],
        );

        \DB::table('imoveis')->where('id', $post['id'])->update($data);

            return redirect('admin/imoveis');

    }

    public function destroy($id)
    {
        \App\Imovel::destroy($id);

        return redirect()->back();
    }
}
