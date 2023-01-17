<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar261697120;

use App\Models\TestCar261697120;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar261697120 $testCar261697120;

    public function render()
    {
        $items = TestCar261697120::paginate($this->perPage);

        return view('livewire.testcar261697120.index', compact('items'));
    }

        public function delete(TestCar261697120 $testCar261697120): void
    {
                                    abort_if(
                    $testCar261697120->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar261697120->delete();
    }
    }
