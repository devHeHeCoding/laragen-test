<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1439794052;

use App\Models\TestCar1439794052;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1439794052 $testCar1439794052;

    public function render()
    {
        $items = TestCar1439794052::paginate($this->perPage);

        return view('livewire.testcar1439794052.index', compact('items'));
    }

        public function delete(TestCar1439794052 $testCar1439794052): void
    {
                                    abort_if(
                    $testCar1439794052->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar1439794052->delete();
    }
    }
