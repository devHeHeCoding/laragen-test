<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar281965965;

use App\Models\TestCar281965965;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar281965965 $testCar281965965;

    public function render()
    {
        $items = TestCar281965965::paginate($this->perPage);

        return view('livewire.test-car281965965.index', compact('items'));
    }

            public function delete(TestCar281965965 $testCar281965965): void
        {
                                                if ($testCar281965965->testCar2820316148s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar281965965->delete();
        }
    }
