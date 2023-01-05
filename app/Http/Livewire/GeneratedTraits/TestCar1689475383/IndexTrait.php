<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1689475383;

use App\Models\TestCar1689475383;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1689475383 $testcar1689475383;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1689475383.index', compact('items'));
    }
}
