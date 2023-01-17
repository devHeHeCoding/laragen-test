<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2141853565;

use App\Models\TestCar2141853565;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2141853565 $testCar2141853565;

    public function render()
    {
        $items = TestCar2141853565::paginate($this->perPage);

        return view('livewire.testcar2141853565.index', compact('items'));
    }

        public function delete(TestCar2141853565 $testCar2141853565): void
    {
                                    abort_if(
                    $testCar2141853565->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar2141853565->delete();
    }
    }
