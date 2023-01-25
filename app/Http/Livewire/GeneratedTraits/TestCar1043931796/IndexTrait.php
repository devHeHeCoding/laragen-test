<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1043931796;

use App\Models\TestCar1043931796;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1043931796 $testCar1043931796;

    public function render()
    {
        $items = TestCar1043931796::paginate($this->perPage);

        return view('livewire.test-car1043931796.index', compact('items'));
    }

            public function delete(TestCar1043931796 $testCar1043931796): void
        {
                                                if ($testCar1043931796->testCar21874596528s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1043931796->delete();
        }
    }
