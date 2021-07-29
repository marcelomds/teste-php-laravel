<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;
use App\Services\Category\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    private $service;

    public function __construct(CategoryService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $categories = $this->service->getAll();

        return view('category.index', compact('categories'));
    }


    public function create()
    {
        return view('category.create');
    }


    public function store(StoreCategoryRequest $request)
    {
        try {
            $this->service->store($request->all());
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($e->getMessage());
        }

        toast('Cadastro Realizado com Sucesso', 'success');

        return redirect()
            ->route('categories.index');
    }



    public function edit($id)
    {
        $category = $this->service->find($id);

        return view('category.edit', compact('category'));
    }


    public function update(UpdateCategoryRequest $request, $id)
    {
        try {
            $this->service->update($id, $request->all());
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($e->getMessage());
        }

        toast('Categoria Atualizada com Sucesso', 'success');

        return redirect()
            ->route('categories.index');
    }


    public function destroy($id)
    {
        $this->service->delete($id);

        toast('Categoria Removida com Sucesso', 'success');

        return redirect()
            ->route('categories.index');
    }
}
