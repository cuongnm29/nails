<?php

namespace App\Http\Controllers\Admin;
use App\Abum;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAbumRequest;
use App\Http\Requests\StoreAbumRequest;
use App\Http\Requests\UpdateAbumRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class AbumController extends Controller
{
    public function index()
    {
         $abum = Abum::get();  
        return view('admin.abum.index', compact('abum'));
    }

    public function create()
    {
        abort_if(Gate::denies('abum_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.abum.create');
    }

    public function store(StoreAbumRequest $request)
    {
         Abum::create($request->all());
        return redirect()->route('admin.abum.index');
    }

    public function edit(Abum $abum)
    {
        abort_if(Gate::denies('abum_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.abum.edit', compact( 'abum'));
    }

    public function update(UpdateAbumRequest $request, Abum $abum)
    {
        $abum->update($request->all());

        return redirect()->route('admin.abum.index');
    }
    public function destroy(Abum $abum)
    {
        abort_if(Gate::denies('abum_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $abum->delete();

        return back();
    }

    public function massDestroy(MassDestroyAbumRequest $request)
    {
        Abum::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
