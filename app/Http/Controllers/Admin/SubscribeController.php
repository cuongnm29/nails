<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySubscribeRequest;
use App\Http\Requests\StoreSenMailSubcribeRequest;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Subscribe;
use Gate;
use Mail;
use App\Mail\SubscribeMail;
class SubscribeController extends Controller
{
    public function index()
    {
        $subscribe = Subscribe::get();  
        return view('admin.subscribe.index', compact('subscribe'));
    }
    public function destroy(Subscribe $subscribe)
    {
        abort_if(Gate::denies('subscribe_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subscribe->delete();

        return back();
    }

    public function massDestroy(MassDestroySubscribeRequest $request)
    {
        Subscribe::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
    public function sendmail()
    {
        $subscribes = Subscribe::get(); 
        $email_from ='';
        foreach($subscribes as $subscribe)
        {
            $email_from .= $subscribe->email.',';
        } 
        return view('admin.subscribe.sendmail',compact('email_from'));
    }
    public function send(StoreSenMailSubcribeRequest $request)
    {
        $mail_from =$request->email;
        $mailarr= explode(',', $mail_from);
        foreach($mailarr as $mail)
        {
            if($mail!=""){
                Mail::to($mail)->send(new SubscribeMail($request->summary));
            }
        }
        return redirect()->intended(route('admin.subscribe.index'))->with('success','Sendmail success');
    }
}
