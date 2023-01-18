<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1217718184;

use App\Models\TestCar1217718184;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1217718184 $testCar1217718184;

    public function render()
    {
        $items = TestCar1217718184::paginate($this->perPage);

        return view('livewire.test-car1217718184.index', compact('items'));
    }

        public function delete(TestCar1217718184 $testCar1217718184): void
    {
                                    abort_if(
                    $testCar1217718184->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar1217718184->delete();
    }
    }
