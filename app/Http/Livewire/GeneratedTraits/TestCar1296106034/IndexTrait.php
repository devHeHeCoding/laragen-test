<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1296106034;

use App\Models\TestCar1296106034;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1296106034 $testCar1296106034;

    public function render()
    {
        $items = TestCar1296106034::paginate($this->perPage);

        return view('livewire.generated.test-car1296106034.index', compact('items'));
    }

            public function delete(TestCar1296106034 $testCar1296106034): void
        {
                                                if ($testCar1296106034->testCar2969810645s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1296106034->delete();
        }
    }
