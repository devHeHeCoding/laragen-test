<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar454794994;

use App\Models\TestCar454794994;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar454794994 $testcar454794994;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar454794994.index', compact('items'));
    }
}
