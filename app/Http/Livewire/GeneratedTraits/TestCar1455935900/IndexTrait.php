<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1455935900;

use App\Models\TestCar1455935900;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1455935900 $testcar1455935900;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1455935900.index', compact('items'));
    }
}
