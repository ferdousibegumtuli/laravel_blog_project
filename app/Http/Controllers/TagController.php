a<?php

namespace App\Http\Controllers;

use App\Http\Repository\TagRepository;
use App\Http\Requests\TagRequest;
use App\Models\Tag;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TagController extends Controller
{
    private $tagRepository = null;
    function __construct()
    {
        $this->tagRepository = new TagRepository;
    }

    public function index(): View
    {
        $tags = $this->tagRepository->index();
        return view('admin.tags.index')->with('tags', $tags);   
    }

    public function create()
    {
        //
    }

    public function store(TagRequest $request): RedirectResponse
    {
        $tagInfo = $request->all();
        $tagIsSave = $this->tagRepository->insert($tagInfo);
        if($tagIsSave){
            return redirect('tags')->with('success', 'Tag added successfully!');
        }
    }

  
    public function show(Tag $tag)
    {
        //
    }

    public function edit(int $id): object 
    {
        $tag = $this->tagRepository->edit($id);
        return response()->json($tag);
    }

  
    public function update(TagRequest $request, int $id): RedirectResponse
    {
        $updateData = $request->all();
        $this->tagRepository->update($updateData, $id);
        return redirect('tags')->with('success', 'Tag update successfully!');
    }

   
    public function destroy(int $id): object
    {
        $this->tagRepository->delete($id);
        return redirect('tags')->with('delete', 'Tag deleted successfully!');
    }
}
