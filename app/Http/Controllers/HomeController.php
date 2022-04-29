<?php

namespace App\Http\Controllers;
use App\Mail;
use App\Http\Controllers\Controller;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use App\Banner;
use App\Setting;
use App\Category;
use App\Blog;
use App\Member;
use App\Review;
use Auth;
class HomeController  extends Controller
{
    
    public function index()
    {
        $memberID =  Auth::guard('member')->id();
        $member = Member::where('id',$memberID)->first();
        $setting = Setting::first();
        $categories = Category::where('parent_id', 0)->where("ismenu",1)->orderBy('isorder')->get();
        $sliders = Banner::where("istype",1)->get();
        $adv = Banner::where("istype",2)->first();
        $about = Blog::join('category', 'category.id', '=', 'blog.catid')->where('category.istype','2')->select('blog.*','category.id as catid','category.slug as catslug')->first();
        $services= Category::where('parent_id', 0)->where("istype",3)->orderBy('isorder')->get();
        $blogfooter = Blog::join('category', 'category.id', '=', 'blog.catid')->where('category.istype','1')->where('blog.ishome',1)->select('blog.*','category.id as catid','category.slug as catslug')->get();
        $review=Review::where('status',1)->get();
        return view('home',compact('categories','setting','sliders','about','services','adv','blogfooter','member','review'));

    }
    public function service()
    {
        $memberID =  Auth::guard('member')->id();
        $member = Member::where('id',$memberID)->first();
        $categories = Category::where('parent_id', 0)->where("ismenu",1)->orderBy('isorder')->get();
        $setting = Setting::first();
        $services= Category::where('parent_id', 0)->where("istype",3)->orderBy('isorder')->get();
       $blogfooter = Blog::join('category', 'category.id', '=', 'blog.catid')->where('category.istype','1')->where('blog.ishome',1)->select('blog.*','category.id as catid','category.slug as catslug')->get();
        return view('listservice',compact('categories','setting','blogfooter','member','services'));
    }
    public function contact()
    {
        $memberID =  Auth::guard('member')->id();
        $member = Member::where('id',$memberID)->first();
        $categories = Category::where('parent_id', 0)->where("ismenu",1)->orderBy('isorder')->get();
        $setting = Setting::first();
        $services= Category::where('parent_id', 0)->where("istype",3)->orderBy('isorder')->get();
         $blogfooter = Blog::join('category', 'category.id', '=', 'blog.catid')->where('category.istype','1')->where('blog.ishome',1)->select('blog.*','category.id as catid','category.slug as catslug')->get();
        return view('contact',compact('categories','setting','blogfooter','member','services'));
    }
    public function signin()
    {
        $memberID =  Auth::guard('member')->id();
        $member = Member::where('id',$memberID)->first();
        $categories = Category::where('parent_id', 0)->where("ismenu",1)->orderBy('isorder')->get();
        $setting = Setting::first();
         $services= Category::where('parent_id', 0)->where("istype",3)->orderBy('isorder')->get();
         $blogfooter = Blog::join('category', 'category.id', '=', 'blog.catid')->where('category.istype','1')->where('blog.ishome',1)->select('blog.*','category.id as catid','category.slug as catslug')->get();
        return view('signin',compact('categories','setting','blogfooter','member','services'));
    }
    public function detailservice(Request $request)
    {
        $serviceId=$request->route('id');
        $memberID =  Auth::guard('member')->id();
        $member = Member::where('id',$memberID)->first();
        $categories = Category::where('parent_id', 0)->where("ismenu",1)->orderBy('isorder')->get();
        $categoriesService = Category::where('parent_id', 0)->where("ismenu",1)->where("istype",3)->orderBy('isorder')->get();
        $setting = Setting::first();
       $cat_services= Category::where('id', $serviceId)->where("istype",3)->orderBy('isorder')->first();
         $services= Category::where('parent_id', 0)->where("istype",3)->orderBy('isorder')->get();
         $blogfooter = Blog::join('category', 'category.id', '=', 'blog.catid')->where('category.istype','1')->where('blog.ishome',1)->select('blog.*','category.id as catid','category.slug as catslug')->get();
        $serviceBlog=Blog::where('catid',$serviceId)->first();
        $recentPost=Blog::join('category', 'category.id', '=', 'blog.catid')->where('category.istype','3')->where('category.ismenu',1)->where('blog.catid','!=',$serviceId)->select('blog.*','category.id as catid','category.slug as catslug')->get();
        return view('detailservice',compact('categories','setting','blogfooter','member','services','serviceBlog','recentPost','categoriesService','cat_services'));
    }
    public function about(Request $request)
    {
        $aboutid=$request->route('id');
        $memberID =  Auth::guard('member')->id();
        $member = Member::where('id',$memberID)->first();
        $categories = Category::where('parent_id', 0)->where("ismenu",1)->orderBy('isorder')->get();
        $categoriesService = Category::where('parent_id', 0)->where("ismenu",1)->where("istype",2)->orderBy('isorder')->get();
        $setting = Setting::first();
          $cat_services= Category::where('id', $aboutid)->where("istype",2)->orderBy('isorder')->first();
         $services= Category::where('parent_id', 0)->where("istype",3)->orderBy('isorder')->get();
         $blogfooter = Blog::join('category', 'category.id', '=', 'blog.catid')->where('category.istype','1')->where('blog.ishome',1)->select('blog.*','category.id as catid','category.slug as catslug')->get();
        $serviceBlog=Blog::where('catid',$aboutid)->first();
        $recentPost=Blog::join('category', 'category.id', '=', 'blog.catid')->where('category.istype','2')->where('category.ismenu',1)->where('blog.catid','!=',$aboutid)->select('blog.*','category.id as catid','category.slug as catslug')->get();
        return view('about',compact('categories','setting','blogfooter','member','services','serviceBlog','recentPost','categoriesService','cat_services'));
    }
    public function blog()
    {
        $memberID =  Auth::guard('member')->id();
        $member = Member::where('id',$memberID)->first();
        $categories = Category::where('parent_id', 0)->where("ismenu",1)->orderBy('isorder')->get();
        $setting = Setting::first();
        $services= Category::where('parent_id', 0)->where("istype",1)->orderBy('isorder')->get();
        $blogs = Blog::join('category', 'category.id', '=', 'blog.catid')->where('category.istype','1')->where('category.ismenu',1)->select('blog.*')->paginate(5);
         $blogfooter = Blog::join('category', 'category.id', '=', 'blog.catid')->where('category.istype','1')->where('blog.ishome',1)->select('blog.*','category.id as catid','category.slug as catslug')->get();
        return view('blog',compact('categories','setting','blogfooter','member','services','blogs'));
    }
    public function blogdetail(Request $request)
    {
        $aboutid=$request->route('id');
        $memberID =  Auth::guard('member')->id();
        $member = Member::where('id',$memberID)->first();
        $categories = Category::where('parent_id', 0)->where("ismenu",1)->orderBy('isorder')->get();
        $categoriesService = Category::where('parent_id', 0)->where("ismenu",1)->where("istype",2)->orderBy('isorder')->get();
        $setting = Setting::first();
         $blogfooter = Blog::join('category', 'category.id', '=', 'blog.catid')->where('category.istype','1')->where('blog.ishome',1)->select('blog.*','category.id as catid','category.slug as catslug')->get();
        $blog=Blog::where('id',$aboutid)->first();
        $recentPost=Blog::join('category', 'category.id', '=', 'blog.catid')->where('category.istype','1')->where('category.ismenu',1)->where('blog.catid','!=',$aboutid)->select('blog.*','category.id as catid','category.slug as catslug')->get();
       $services= Category::where('parent_id', 0)->where("istype",1)->orderBy('isorder')->get();
        return view('blogdetail',compact('categories','setting','blogfooter','services','member','recentPost','categoriesService','blog'));
    }
}
