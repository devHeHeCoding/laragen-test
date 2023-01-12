<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1508391256;

use App\Models\TestCar1508391256;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1508391256 $testcar1508391256;

    public function render()
    {
        $items = TestCar1508391256::paginate($this->perPage);

        return view('livewire.testcar1508391256.index', compact('items'));
    }
}
