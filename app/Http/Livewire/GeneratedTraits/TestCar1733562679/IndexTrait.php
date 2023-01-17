<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1733562679;

use App\Models\TestCar1733562679;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1733562679 $testCar1733562679;

    public function render()
    {
        $items = TestCar1733562679::paginate($this->perPage);

        return view('livewire.testcar1733562679.index', compact('items'));
    }

        public function delete(TestCar1733562679 $testCar1733562679): void
    {
                                    abort_if(
                    $testCar1733562679->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar1733562679->delete();
    }
    }
