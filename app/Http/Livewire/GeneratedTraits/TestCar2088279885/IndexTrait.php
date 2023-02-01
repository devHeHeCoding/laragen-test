<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2088279885;

use App\Models\TestCar2088279885;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2088279885 $testCar2088279885;

    public function render()
    {
        $items = TestCar2088279885::paginate($this->perPage);

        return view('livewire.test-car2088279885.index', compact('items'));
    }

            public function delete(TestCar2088279885 $testCar2088279885): void
        {
                                                if ($testCar2088279885->testCar21500636216s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2088279885->delete();
        }
    }
