<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar639799408;

use App\Models\TestCar639799408;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar639799408 $testcar639799408;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar639799408.index', compact('items'));
    }
}
