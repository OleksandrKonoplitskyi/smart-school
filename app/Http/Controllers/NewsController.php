<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class NewsController extends Controller
{

   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index()
    {
        $news = DB::table('news')->get();
        return view('news.index', ['news' => $news]);

    }
    public function show($id)
    {
        $news = DB::table('news')->find($id);
        return view('news.show', ['post' => $news]);

    }
}
