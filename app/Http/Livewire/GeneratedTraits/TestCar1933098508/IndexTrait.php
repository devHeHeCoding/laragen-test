<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1933098508;

use App\Models\TestCar1933098508;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1933098508 $testcar1933098508;

    public function render()
    {
        $items = TestCar1933098508::paginate($this->perPage);

        return view('livewire.testcar1933098508.index', compact('items'));
    }
}
