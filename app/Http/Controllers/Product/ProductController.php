<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Services\Category\CategoryService;
use App\Services\Product\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $service;
    private $categoryService;

    public function __construct(ProductService $service, CategoryService $categoryService)
    {
        $this->service = $service;
        $this->categoryService = $categoryService;
    }


    public function index()
    {
        $products = $this->service->getAll();

        return view('product.index', compact('products'));
    }


    public function create()
    {
        $categories = $this->categoryService->getAll();

        return view('product.create', compact('categories'));
    }


    public function store(StoreProductRequest $request)
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
            ->route('products.index');
    }


    public function edit($id)
    {
        $product = $this->service->find($id);
        $categories = $this->categoryService->getAll();

        return view('product.edit', compact('product', 'categories'));
    }


    public function update(UpdateProductRequest $request, $id)
    {
        try {
            $this->service->update($id, $request->all());
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($e->getMessage());
        }

        toast('Produto Atualizado com Sucesso', 'success');

        return redirect()
            ->route('products.index');
    }


    public function destroy($id)
    {
        $this->service->delete($id);

        toast('Produto Removido com Sucesso', 'success');

        return redirect()
            ->route('products.index');
    }
}
