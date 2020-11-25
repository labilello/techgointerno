<?php

namespace App\Http\Livewire\Warranties;

use App\Models\Warranty;
use Livewire\Component;

class Index extends Component
{
    public $search_query = '';
    public $results = [];
    public $is_search = false;

    public function mount() {
        $this->results = $this->formatSearch();
    }

    public function updatedSearchQuery() {
        $this->results = $this->formatSearch($this->search_query);
    }

    public function render()
    {
        return view('livewire.warranties.index');
    }

    private function formatSearch($query = '') {
        ($query != '') ? $this->is_search = true : $this->is_search = false;

        $warranties = Warranty::where('name', 'LIKE', "%{$query}%")->orderBy('name', 'asc')->get();
        $results = [];

        foreach ($warranties as $warranty){
            $results[$warranty->warrantyGroup->name][] = $warranty;
        }

        return $results;
    }
}
