<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1777235595;

use App\Models\TestCar1777235595;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1777235595 $testCar1777235595;

    public function render()
    {
        $items = TestCar1777235595::paginate($this->perPage);

        return view('livewire.test-car1777235595.index', compact('items'));
    }

            public function delete(TestCar1777235595 $testCar1777235595): void
        {
                                                if ($testCar1777235595->testCar21012824489s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1777235595->delete();
        }
    }
