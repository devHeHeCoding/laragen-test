<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar861757788;

use App\Models\TestCar861757788;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar861757788 $testCar861757788;

    public function render()
    {
        $items = TestCar861757788::paginate($this->perPage);

        return view('livewire.test-car861757788.index', compact('items'));
    }

            public function delete(TestCar861757788 $testCar861757788): void
        {
                                                if ($testCar861757788->testCar2445750031s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar861757788->delete();
        }
    }
