<?php
namespace App\Services\Product;


use App\Models\Product\Product;

class ProductService
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getAll()
    {
        return $this->product->paginate(2);
    }

    public function store(array $request)
    {
        $product = $this->product->create([
            'name' => $request['name'],
            'description' => $request['description'],
            'quantity' => $request['quantity'],
            'unit_price' => $request['unit_price'],
            'category_id' => $request['category_id'],
        ]);

        return $product;
    }

    public function update(int $id, array $request)
    {
        $product = $this->find($id);

        $product->name = $request['name'];
        $product->description = $request['description'];
        $product->quantity = $request['quantity'];
        $product->unit_price = $request['unit_price'];
        $product->category_id = $request['category_id'];
        $product->save();

        return $product;
    }

    public function delete(int $id)
    {
        $product = $this->find($id);
        $product->delete();

        return $product;
    }

    public function find(int $id)
    {
        $product = $this->product->findOrFail($id);

        return $product;
    }
}
