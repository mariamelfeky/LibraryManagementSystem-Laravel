<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function sort($sort_value)
    {
        $books = Book::paginate(3);
        $books->setCollection(
            $books->sortByDesc($sort_value)
        );
        return view('home', ['books' => $books]);
    }
    public function index()
    {
        $books=Book::paginate(3);
        return view('home',['books' => $books]);
        
    }
   public function search()
   {
    $result=Input::get('result');
    $books=Book::where("title","LIKE","%". $result ."%")
        ->orWhere("auther","like","%". $result ."%")
        ->get();
        return view('home',['books' => $books]);
   }
    
}
