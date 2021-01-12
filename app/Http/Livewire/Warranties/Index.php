<?php

namespace App\Http\Livewire\Warranties;

use App\Models\OtherWarranty;
use App\Models\Warranty;
use App\Models\WarrantyGroup;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public $search_query = '';

    public function render()
    {
        $warranties = Warranty::where('name', 'LIKE', "%{$this->search_query}%")
            ->orderBy('warranty_group_id')
            ->orderBy('name', 'asc')
            ->get();

        $otherWarranties = OtherWarranty::where('name', 'LIKE', "%{$this->search_query}%")
            ->orderBy('name', 'asc')
            ->get();

        $formattedWarranties = [];
        $formattedOtherWarranties = [];
        $nameOtherWarranty = WarrantyGroup::where('id', 3)->first()->name;

        foreach ($warranties as $warranty){
            $formattedWarranties[$warranty->warrantyGroup->name][] = $warranty->name;
        }

        foreach ($otherWarranties as $warranty) {
            $formattedOtherWarranties[$nameOtherWarranty][] = $warranty;
        }

        return view('livewire.warranties.index', [
            'warranties' => $formattedWarranties,
            'otherwarranties' => $formattedOtherWarranties
        ]);
    }

}
