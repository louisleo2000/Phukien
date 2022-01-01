<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductType;
use Livewire\Component;

use function PHPSTORM_META\type;

class MoreProduct extends Component
{
    public $perPage = 6;
    public $type_search = null;
    public $search = null;
    public $category;
    public $product_type;
    public $state = false;
    public $filter = [];
    protected $list = null;
    protected $queryString = ['search' => ['except' => ''], 'filter' => ['except' => 0], 'perPage' => ['except' => 0], 'type_search' => ['except' => '']];


    protected $listeners = ['loadmore' => 'loadMore', 'search' => 'searchName'];

    public function loadMore()
    {
        sleep(1);
        $this->perPage += 6;
    }
    public function render()
    {
        if (($this->type_search == null || $this->type_search == 'name') && $this->search != null) {
            $this->state = false;
            if ($this->search == 'all')
                $this->list = Product::paginate($this->perPage);
            else
                $this->list = Product::search('name', $this->search)->paginate($this->perPage);
        } else if ($this->type_search != null  && $this->search == null)
            $this->list = Product::whereIn('product_type_id', $this->filter)->paginate($this->perPage);
        else if ($this->type_search == null && $this->search == null)
            $this->list = Product::paginate($this->perPage);

        if ($this->list != null) {
            if ($this->perPage > $this->list->total()) {
                $this->perPage = $this->list->total();
            }
        }

        $this->loadData();

        return view(
            'livewire.more-product',
            [
                'listproducts' => $this->list,
                'listtype' => ProductType::all(),
                'categories' => Category::all()
            ]
        );
    }
    public function searchName($string)
    {
        $this->perPage = 6;
        $this->type_search = 'name';
        $this->search = $string;
    }

    public function loadData()
    {
        if ($this->state == false) {
            $this->loadType();
            foreach (Category::all() as $cate) {
                $this->category[$cate->name] = ['state' => false, 'id' => $cate->id];
            }
            $this->state = true;
        }
    }
    public function loadType()
    {
        foreach (ProductType::all() as $type) {
            $this->product_type[$type->name] = ['state' => false, 'id' => $type->id];
        }
    }
    public function onCheck()
    {
        $this->perPage = 6;
        $this->filter = [];
        $this->search = null;
        $check = false;

        foreach ($this->category as $cate) {
            if ($cate['state']) {
                $this->type_search = 'category_id';
                array_push($this->filter, $cate['id']);
                $check = true;
            }
        }

        if ($check) {
            $temp = ProductType::whereIn($this->type_search, $this->filter)->get();
            $this->filter = [];
            $this->type_search = 'product_type_id';
            foreach ($temp as $type) {
                array_push($this->filter, $type->id);
            }
            $this->loadType();
        } else {
            foreach ($this->product_type as $type) {
                if ($type['state']) {
                    $this->type_search = 'product_type_id';
                    array_push($this->filter, $type['id']);
                    $check = true;
                }
            }
            if (!$check) {
                $this->type_search = null;
                $this->search = 'all';
            }
        }
    }
}
