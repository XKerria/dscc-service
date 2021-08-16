<?php

namespace App\Http\Controllers\Server;

use App\Http\Controllers\Controller;
use App\Http\Requests\Server\CategoryRequest;
use App\Libs\Query\FindAllQueryChain;
use App\Libs\Query\FindOneQueryChain;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index(Request $request) {
        $query = Category::resolve($request->query());
        if (!$request->has('page')) return $query->get();
        return $query->paginate($request->query('size', 20), ['*'], 'page', $request->query('page', 1));
    }

    function show(Category $category) {
        return $category;
    }

    function store(CategoryRequest $request) {
        return Category::create($request->validated());
    }

    function update(CategoryRequest $request, Category $category) {
        $category->fill($request->validated())->save();
        return $category->refresh();
    }

    function destroy(Category $category) {
        return $category->delete();
    }
}
