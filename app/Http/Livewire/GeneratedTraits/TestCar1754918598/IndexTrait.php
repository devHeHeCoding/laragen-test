<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1754918598;

use App\Models\TestCar1754918598;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1754918598 $testcar1754918598;

    public function render()
    {
        $items = User::paginate($this->perPage);

        return view('livewire.testcar1754918598.index', compact('items'));
    }

        public function delete(TestCar1754918598 $testcar1754918598): void
    {
        $user->delete();
    }
    }
