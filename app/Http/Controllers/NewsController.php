<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    function index()
    {
        
        $cate = DB::table("news")-> select('id','title','summarise','image_url','category','idCT')->get();
        $categ = DB::table("news")->orderBy('idCT','desc')->get();
       
        $data = ['cate' => $cate,'categ' => $categ];
        return view("partials/index", $data);
    }

    function details($id = 0)
    {
        $news = DB::table('news')->where("id", $id)->first();
        $cate = DB::table("news")-> select('id','title','summarise','image_url')->get();
        
        $data = ['id' => $id, 'news' => $news,'cate' => $cate]; 
        return view("partials/details", $data);
    }
    function category($idCT = 0)
    {

        $listcate = DB::table("news")->where('idCT',$idCT)
    
        ->orderBy('idCT','desc')->get();
        $cate = DB::table("news")-> select('id','title','summarise','image_url')->get();
        $data = ['idCT' => $idCT , 'listcate' => $listcate , 'cate' => $cate];
        return view("partials/category", $data);
    }
    function search()
    {
        $search_bar_input = request()->get('query');
        $news = DB::table("news")->orderBy("id","desc")
        
        // ->where('id', '=' , $search_bar_input)
        // ->orWhere('title', 'like', '%' . $search_bar_input . '%')
        // ->orWhere('content','LIKE', '%' . $search_bar_input . '%')
        // ->orWhere('summarise','LIKE', '%' . $search_bar_input . '%')
        // ->orWhere('category','LIKE', '%' . $search_bar_input . '%')
        // ->orWhere('author','LIKE', '%' . $search_bar_input . '%')
        ->whereAny([
            'title',
            'content',
            'summarise',
            'category',
            'author',
        ], 'like' ,'%'. $search_bar_input .'%')
        ->get();



        


        // dd($news);
        
        // dd($search_bar_input);
        $results = $news
        
        ;
      


       
    //    dd($results);
        $data= [ 'news' => $news ,'search_bar_input'=> $search_bar_input ,'results'=> $results];

        // dd($search_bar_input);
        return view('partials/result' , $data);
    }
    
}
