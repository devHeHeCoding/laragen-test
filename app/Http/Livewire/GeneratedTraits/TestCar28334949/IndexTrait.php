<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar28334949;

use App\Models\TestCar28334949;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar28334949 $testCar28334949;

    public function render()
    {
        $items = TestCar28334949::paginate($this->perPage);

        return view('livewire.testcar28334949.index', compact('items'));
    }

        public function delete(TestCar28334949 $testCar28334949): void
    {
                                    abort_if(
                    $testCar28334949->has_many_relation()->count() > 0,
                    Response::HTTP_FORBIDDEN
                );
                    
        $testcar28334949->delete();
    }
    }
