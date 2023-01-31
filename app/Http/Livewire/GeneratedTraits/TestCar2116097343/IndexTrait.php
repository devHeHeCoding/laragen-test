<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2116097343;

use App\Models\TestCar2116097343;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2116097343 $testCar2116097343;

    public function render()
    {
        $items = TestCar2116097343::paginate($this->perPage);

        return view('livewire.test-car2116097343.index', compact('items'));
    }

            public function delete(TestCar2116097343 $testCar2116097343): void
        {
                                                if ($testCar2116097343->testCar22034912657s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2116097343->delete();
        }
    }
