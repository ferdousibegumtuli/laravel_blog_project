<?php

namespace App\Http\Controllers;

use App\Http\Repository\CategoryRepository;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    private $categoryRepository = null;
    function __construct()
    {
        $this->categoryRepository = new CategoryRepository;
    }

    public function index(): View
    {
        $categories = $this->categoryRepository->index();
        return view('admin.categories.index')->with('categories', $categories);   
    }

    public function create()
    {
        //
    }

    public function store(CategoryRequest $request): RedirectResponse
    {

        $categoryInfo = $request->all();
        $categoryIsSave = $this->categoryRepository->insert($categoryInfo);
        if($categoryIsSave){
            return redirect('categories')->with('success', 'Category added successfully!');
        }
    }

  
    public function show(Category $category)
    {
        //
    }

    public function edit(int $id): object 
    {
        $category = $this->categoryRepository->edit($id);
        return response()->json($category);
        
    }

  
    public function update(CategoryRequest $request, int $id): RedirectResponse
    {
        $updateData = $request->all();
        $this->categoryRepository->update($updateData, $id);
        return redirect('categories')->with('success', 'Category update successfully!');
    }

   
    public function destroy(int $id): object
    {
        $this->categoryRepository->delete($id);
        return redirect('categories')->with('delete', 'Category deleted successfully!');
    }
}
