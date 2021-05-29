<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Http\Requests\CategoryRequest;
use Modules\Product\Services\CategoryService;

class CategoryController extends Controller
{
    protected $categoryService;
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    public function index()
    {
        $categories = $this->categoryService->index();
        return view('product::category.index',compact('categories'));
    }
    public function create()
    {
        return view('product::category.create');
    }
    public function store(CategoryRequest $request)
    {
        $this->categoryService->save($request);
        return back()->with(['status'=>'Category created successfully']);
    }

    public function edit($id)
    {
        $category= $this->categoryService->findById($id);
        return view('product::category.edit',compact('category'));
    }

    public function update(CategoryRequest $request, $id)
    {
        $this->categoryService->update($request,$id);
        return back()->with(['status'=>'Category update successfully']);
    }

    public function destroy($id)
    {
        $this->categoryService->delete($id);
        return back()->with(['status'=>'Category deleted successfully']);
    }
}
