<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar540468406;

use App\Models\TestCar540468406;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar540468406 $testCar540468406;

    public function render()
    {
        $items = TestCar540468406::paginate($this->perPage);

        return view('livewire.test-car540468406.index', compact('items'));
    }

            public function delete(TestCar540468406 $testCar540468406): void
        {
                                                if ($testCar540468406->testCar21138849090s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar540468406->delete();
        }
    }
