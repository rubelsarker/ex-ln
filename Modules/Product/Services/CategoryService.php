<?php


namespace Modules\Product\Services;



use Illuminate\Http\Request;
use Modules\Product\Repositories\CategoryRepository;
use function Symfony\Component\Translation\t;

class CategoryService
{
    protected $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    public function index()
    {
        return $this->categoryRepository->all();
    }
    public function save(Request $request)
    {
        $data = $request->all();
        return $this->categoryRepository->create($data);

    }
    public function findById($id)
    {
       return $this->categoryRepository->find($id);
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        return $this->categoryRepository->update($id,$data);
    }
    public function delete($id)
    {
        return $this->categoryRepository->delete($id);
    }

}
