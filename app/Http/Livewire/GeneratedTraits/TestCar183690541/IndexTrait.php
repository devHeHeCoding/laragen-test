<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar183690541;

use App\Models\TestCar183690541;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar183690541 $testCar183690541;

    public function render()
    {
        $items = TestCar183690541::paginate($this->perPage);

        return view('livewire.testcar183690541.index', compact('items'));
    }

        public function delete(TestCar183690541 $testCar183690541): void
    {
                                    abort_if(
                    $testCar183690541->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar183690541->delete();
    }
    }
