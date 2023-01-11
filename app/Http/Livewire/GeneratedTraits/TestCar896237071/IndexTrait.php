<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar896237071;

use App\Models\TestCar896237071;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar896237071 $testcar896237071;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar896237071.index', compact('items'));
    }
}
