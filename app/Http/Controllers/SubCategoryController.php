<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    private $categories;
    private $sub_category;

    public function add()
    {
        $this->categories = Category::orderBy('id', 'desc')->get();
        return view('admin.sub-category.add', ['categories' => $this->categories]);
    }
    public function create(Request $request)
    {
        SubCategory::getNewSubCategory($request);
        return redirect()->back()->with('message', 'Sub Category Created Successfully');
    }

    public function manage()
    {
        $this->sub_category = SubCategory::orderBy('id', 'desc')->get();
        return view('admin.sub-category.manage', ['subCategories' => $this->sub_category]);

    }

    public function edit($id)
    {
        $this->sub_category = SubCategory::find($id);
        $this->categories   = Category:: orderBy('id', 'desc')->get();
        return view('admin.sub-category.edit', [
            'subCategories' => $this->sub_category,
            'categories'  => $this->categories
        ]);
    }

    public function update(Request $request, $id)
    {
        SubCategory:: updateSubCategory($request, $id);
        return redirect('/manage-sub-category')->with('message', 'Sub Category Info Updated Successfully');
    }

    public function delete(Request $request, $id)
    {
        SubCategory::deleteSubCategory($request, $id);
        return redirect('/manage-sub-category')->with('message', 'Sub Category Info Deleted Successfully');
    }

}
