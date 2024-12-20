<?php

namespace App\Http\Controllers;
use App\Models\Frontend;
use App\Http\Repository\FrontendRepository;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public $frontendRepository = null;

    public function __construct()
    {
        $this->frontendRepository = new FrontendRepository;
    }
  
    public function index()
    {

        $articles = $this->frontendRepository->index();
        return view('welcome')->with('articles', $articles);
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
    }
    
    
    public function show($id)
    {
        return view('admin.categories.index');
        // return view('frontend.categoryPage');
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
