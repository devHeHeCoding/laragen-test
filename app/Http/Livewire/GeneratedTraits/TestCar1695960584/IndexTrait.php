<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1695960584;

use App\Models\TestCar1695960584;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1695960584 $testCar1695960584;

    public function render()
    {
        $items = TestCar1695960584::paginate($this->perPage);

        return view('livewire.test-car1695960584.index', compact('items'));
    }

            public function delete(TestCar1695960584 $testCar1695960584): void
        {
                                                if ($testCar1695960584->testCar22001616236s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1695960584->delete();
        }
    }
