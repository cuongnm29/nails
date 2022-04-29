<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vourcher;
use App\Http\Requests\StoreVoucherRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\MassDestroyVoucherRequest;

use Gate;

class VourcherController extends Controller
{
    public function index()
    {
        $vourcher= Vourcher::orderBy('id', 'DESC')->get();  
        return view('admin.vourcher.index', compact('vourcher'));
    }
    public function create()
    {
         
        return view('admin.vourcher.create');
    }
    public function store(StoreVoucherRequest $request)
    {
        Vourcher::create($request->all());
        return redirect()->route('admin.vourcher.index');
    }
    public function destroy(Vourcher $vourcher)
    {
        abort_if(Gate::denies('vourcher_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $vourcher->delete();

        return back();
    }

    public function massDestroy(MassDestroyVoucherRequest $request)
    {
        Vourcher::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
