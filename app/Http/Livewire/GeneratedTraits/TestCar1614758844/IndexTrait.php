<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1614758844;

use App\Models\TestCar1614758844;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1614758844 $testCar1614758844;

    public function render()
    {
        $items = TestCar1614758844::paginate($this->perPage);

        return view('livewire.test-car1614758844.index', compact('items'));
    }

            public function delete(TestCar1614758844 $testCar1614758844): void
        {
                                                if ($testCar1614758844->testCar2651239154s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1614758844->delete();
        }
    }
