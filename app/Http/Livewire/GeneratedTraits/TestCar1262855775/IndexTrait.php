<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1262855775;

use App\Models\TestCar1262855775;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1262855775 $testCar1262855775;

    public function render()
    {
        $items = TestCar1262855775::paginate($this->perPage);

        return view('livewire.testcar1262855775.index', compact('items'));
    }

        public function delete(TestCar1262855775 $testCar1262855775): void
    {
                                    abort_if(
                    $testCar1262855775->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar1262855775->delete();
    }
    }
