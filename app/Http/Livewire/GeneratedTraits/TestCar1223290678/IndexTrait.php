<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1223290678;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1223290678 $testcar1223290678;

    public function render()
    {
        $items = User::paginate($this-perPage);

        return view('livewire.testcar1223290678.index', compact('items'));
    }
}
