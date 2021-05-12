<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manage\CategoryRequest;
use App\Libs\Query\FindAllQueryChain;
use App\Libs\Query\FindOneQueryChain;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(Request $request) {
        $chain = new FindAllQueryChain(Category::query(), $request->query());
        if (!$request->has('page')) return $chain->handle()->get();
        return $chain->handle()->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Request $request, Category $category) {
        $chain = new FindOneQueryChain($category, $request->query());
        return $chain->handle();
    }

    function store(CategoryRequest $request) {
        return Category::create($request->validated());
    }

    function update(CategoryRequest $request, Category $category) {
        $category->fill($request->validated());
        $category->save();
        return $category->refresh();
    }

    function destroy(Category $category) {
        $category->delete();
        return $category;
    }
}
