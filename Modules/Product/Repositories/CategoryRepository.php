<?php


namespace Modules\Product\Repositories;


use Modules\Product\Entities\Category;

class CategoryRepository
{
    protected $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    public function all()
    {
        return $this->category->all();
    }
    public function create($data)
    {
        return $this->category->create($data);
    }
    public function find($id)
    {
        return $this->category->findOrFail($id);
    }
    public function update($id, array  $data)
    {
        return $this->category->find($id)->update($data);
    }
    public function delete($id){
        return $this->category->findOrFail($id)->delete();
    }

}
