<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar972647089;

use App\Models\TestCar972647089;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar972647089 $testCar972647089;

    public function render()
    {
        $items = TestCar972647089::paginate($this->perPage);

        return view('livewire.test-car972647089.index', compact('items'));
    }

            public function delete(TestCar972647089 $testCar972647089): void
        {
                                                if ($testCar972647089->testCar2648826492s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar972647089->delete();
        }
    }
