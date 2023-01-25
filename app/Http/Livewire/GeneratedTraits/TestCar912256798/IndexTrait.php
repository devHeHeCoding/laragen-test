<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar912256798;

use App\Models\TestCar912256798;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar912256798 $testCar912256798;

    public function render()
    {
        $items = TestCar912256798::paginate($this->perPage);

        return view('livewire.test-car912256798.index', compact('items'));
    }

            public function delete(TestCar912256798 $testCar912256798): void
        {
                                                if ($testCar912256798->testCar21659889129s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar912256798->delete();
        }
    }
