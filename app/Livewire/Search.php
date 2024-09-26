<?php

namespace App\Livewire;

use Livewire\Component;

class Search extends Component
{
    public $model;
    public $search = '';
    public $results = [];
    public $field ='name';
    public $route = '';

    public function mount($model, $field, $route = null)
    {
        // Ensure the model class is valid
        if (!class_exists($model)) {
            throw new \Exception("Model class $model does not exist.");
        }
        $this->field = $field;
        $this->route = $route;
        $this->model = $model;
    }

    public function updatedSearch()
    {
        // Dynamically search the model
        if ($this->search)
        {
        $this->results = $this->model::where($this->field, 'like', '%' . $this->search . '%')
            ->get();
        }
    }
    public function render()
    {
        return view('livewire.search');
    }
}
