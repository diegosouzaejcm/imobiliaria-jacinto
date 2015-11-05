<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\LengthAwarePaginator;

class SlidesController extends Controller
{
    public function index()
    {


    }

    public function indexadmin()
    {
        $slides = \App\Slide::paginate(16);
        $slides->setPath('');

        return view('Admin.slides.index')->with('slides',$slides);
    }

    public function create()
    {
        return view('Admin.slides.create');

    }

    public function store(Requests\CreateSlidesRequest $request)
    {
        Slide::create($request->all());

        return redirect('admin/slides');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        \App\Slide::destroy($id);

        return redirect()->back();
    }
}
