<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Searchable\Search;
use App\Customer;
use App\status;
use App\Good;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function search(Request $request)
    {
        $searchResults = (new Search())
            ->registerModel(Good::class, 'code')
            ->perform($request->input('query'));

        return view('search', compact('searchResults'));
    }
}
