<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1553373779;

use App\Models\TestCar1553373779;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1553373779 $testcar1553373779;

    public function render()
    {
        $items = TestCar1553373779::paginate($this->perPage);

        return view('livewire.test-car1553373779.index', compact('items'));
    }
}
