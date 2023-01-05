<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar231017210;

use App\Models\TestCar231017210;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar231017210 $testcar231017210;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar231017210.index', compact('items'));
    }
}
