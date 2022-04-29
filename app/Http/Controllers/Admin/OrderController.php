<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyOrderRequest;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Order;
use App\Category;
use App\Vourcher;
use Gate;
class OrderController extends Controller
{
    public function index()
    {
        $order= Order::orderBy('id', 'DESC')->get();  
        return view('admin.order.index', compact('order'));
    }
    public function create()
    {
        $vourchers= Vourcher::orderBy('id', 'DESC')->where('status',1)->get();  
        $services= Category::where('parent_id', 0)->where("istype",3)->orderBy('isorder')->get();  
        return view('admin.order.create', compact('services','vourchers'));
    }
    public function store(StoreOrderRequest $request)
    {
        Order::create($request->all());
        return redirect()->route('admin.systemCalendar');
    }
    public function edit(Order $order)
    {
        $vourchers= Vourcher::orderBy('id', 'DESC')->where('status',1)->get();  
        $services= Category::where('parent_id', 0)->where("istype",3)->orderBy('isorder')->get();  
        abort_if(Gate::denies('order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.order.edit', compact('order','services','vourchers'));
    }

    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->update($request->all());

        return redirect()->route('admin.order.index');
    }
    public function destroy(Order $order)
    {
        abort_if(Gate::denies('order_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $order->delete();

        return back();
    }

    public function massDestroy(MassDestroyOrderRequest $request)
    {
        Order::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
