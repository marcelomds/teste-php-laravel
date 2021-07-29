<?php
namespace App\Services\Category;


use App\Models\Category\Category;

class CategoryService
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getAll()
    {
        return $this->category->paginate(7);
    }

    public function store(array $request)
    {
        $category = $this->category->create([
            'name' => $request['name']
        ]);

        return $category;
    }

    public function update(int $id, array $request)
    {
        $category = $this->find($id);

        $category->name = $request['name'];
        $category->save();

        return $category;
    }

    public function delete(int $id)
    {
        $category = $this->find($id);
        $category->delete();

        return $category;
    }

    public function find(int $id)
    {
        $category = $this->category->findOrFail($id);

        return $category;
    }
}
