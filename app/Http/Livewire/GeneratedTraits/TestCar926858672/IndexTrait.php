<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar926858672;

use App\Models\TestCar926858672;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar926858672 $testCar926858672;

    public function render()
    {
        $items = TestCar926858672::paginate($this->perPage);

        return view('livewire.test-car926858672.index', compact('items'));
    }

            public function delete(TestCar926858672 $testCar926858672): void
        {
                                                if ($testCar926858672->testCar21842593496s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar926858672->delete();
        }
    }
