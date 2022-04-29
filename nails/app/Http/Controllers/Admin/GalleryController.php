<?php

namespace App\Http\Controllers\Admin;
use App\Gallery;
use App\Abum;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyGalleryRequest;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class GalleryController extends Controller
{
    public function index()
    {
         $gallery = Gallery::get();  
        return view('admin.gallery.index', compact('gallery'));
    }

    public function create()
    {
        abort_if(Gate::denies('gallery_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $abums= Abum::orderBy('id', 'DESC')->where('status',1)->get();
        return view('admin.gallery.create',compact('abums'));
    }

    public function store(StoreGalleryRequest $request)
    {
        $gallery= Gallery::create($request->all());

         foreach ($request->input('image', []) as $file) {
            $gallery->addMedia(storage_path('gallery/' . $file))->toMediaCollection('image');
        }
        return redirect()->route('admin.gallery.index');
    }
    public function storeMedia(Request $request)
    {
        $path = storage_path('/gallery');
    
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
    
        $file = $request->file('file');
    
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
    
        $file->move($path, $name);
    
        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }
    public function edit(Gallery $gallery)
    {
        abort_if(Gate::denies('gallery_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.gallery.edit', compact( 'gallery'));
    }

    public function update(UpdateGalleryRequest $request, gallery $gallery)
    {
        $gallery->update($request->all());

        return redirect()->route('admin.gallery.index');
    }
    public function destroy(Gallery $gallery)
    {
        abort_if(Gate::denies('gallery_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $gallery->delete();

        return back();
    }

    public function massDestroy(MassDestroyGalleryRequest $request)
    {
        Gallery::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
