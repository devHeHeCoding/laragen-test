<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1424310117;

use App\Models\TestCar1424310117;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1424310117 $testCar1424310117;

    public function render()
    {
        $items = TestCar1424310117::paginate($this->perPage);

        return view('livewire.testcar1424310117.index', compact('items'));
    }

        public function delete(TestCar1424310117 $testCar1424310117): void
    {
                                    abort_if(
                    $testCar1424310117->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar1424310117->delete();
    }
    }
