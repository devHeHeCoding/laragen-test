<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1798475003;

use App\Models\TestCar1798475003;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1798475003 $testCar1798475003;

    public function render()
    {
        $items = TestCar1798475003::paginate($this->perPage);

        return view('livewire.test-car1798475003.index', compact('items'));
    }

            public function delete(TestCar1798475003 $testCar1798475003): void
        {
                                                if ($testCar1798475003->testCar2105167273s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1798475003->delete();
        }
    }
