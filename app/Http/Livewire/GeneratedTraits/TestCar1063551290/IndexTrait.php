<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1063551290;

use App\Models\TestCar1063551290;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1063551290 $testcar1063551290;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1063551290.index', compact('items'));
    }

        public function delete(TestCar1063551290 $testcar1063551290): void
    {
        $user->delete();
    }
    }
