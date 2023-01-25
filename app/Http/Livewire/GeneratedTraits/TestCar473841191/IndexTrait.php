<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar473841191;

use App\Models\TestCar473841191;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar473841191 $testCar473841191;

    public function render()
    {
        $items = TestCar473841191::paginate($this->perPage);

        return view('livewire.test-car473841191.index', compact('items'));
    }

            public function delete(TestCar473841191 $testCar473841191): void
        {
                                                if ($testCar473841191->testCar2701021352s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar473841191->delete();
        }
    }
