<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar106143352;

use App\Models\TestCar106143352;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar106143352 $testCar106143352;

    public function render()
    {
        $items = TestCar106143352::paginate($this->perPage);

        return view('livewire.testcar106143352.index', compact('items'));
    }

        public function delete(TestCar106143352 $testCar106143352): void
    {
                                    abort_if(
                    $testCar106143352->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar106143352->delete();
    }
    }
