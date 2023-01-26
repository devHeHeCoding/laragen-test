<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar30717885;

use App\Models\TestCar30717885;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar30717885 $testCar30717885;

    public function render()
    {
        $items = TestCar30717885::paginate($this->perPage);

        return view('livewire.test-car30717885.index', compact('items'));
    }

            public function delete(TestCar30717885 $testCar30717885): void
        {
                                                if ($testCar30717885->testCar2402215259s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar30717885->delete();
        }
    }
