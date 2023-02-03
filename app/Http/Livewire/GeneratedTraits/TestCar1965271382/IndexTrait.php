<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1965271382;

use App\Models\TestCar1965271382;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1965271382 $testCar1965271382;

    public function render()
    {
        $items = TestCar1965271382::paginate($this->perPage);

        return view('livewire.test-car1965271382.index', compact('items'));
    }

            public function delete(TestCar1965271382 $testCar1965271382): void
        {
                                                if ($testCar1965271382->testCar2936200579s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1965271382->delete();
        }
    }
