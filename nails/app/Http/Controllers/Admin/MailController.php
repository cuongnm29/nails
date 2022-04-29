<?php

namespace App\Http\Controllers\Admin;


use App\SettingMail;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMailRequest;
use App\Http\Requests\StoreMailRequest;
use App\Http\Requests\UpdateMailRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
class MailController extends Controller 
{
    public function index()
    {
        $mail = SettingMail::first();  
        return view('admin.mail.index', compact('mail'));
    }
    public static   function store(StoreMailRequest $request)
    {
        abort_if(Gate::denies('mail_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $row = SettingMail::find($request['id']);
        if($row==null)
        {
            SettingMail::create($request->all());
        }
        else{
            $row->update($request->all());
        }
        return redirect()->route('admin.mail.index');
    }
}
