<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1140341884;

use App\Models\TestCar1140341884;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1140341884 $testCar1140341884;

    public function render()
    {
        $items = TestCar1140341884::paginate($this->perPage);

        return view('livewire.testcar1140341884.index', compact('items'));
    }

        public function delete(TestCar1140341884 $testCar1140341884): void
    {
                                    abort_if(
                    $testCar1140341884->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar1140341884->delete();
    }
    }
