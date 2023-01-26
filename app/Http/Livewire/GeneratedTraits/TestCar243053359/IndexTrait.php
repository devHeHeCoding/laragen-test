<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar243053359;

use App\Models\TestCar243053359;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar243053359 $testCar243053359;

    public function render()
    {
        $items = TestCar243053359::paginate($this->perPage);

        return view('livewire.test-car243053359.index', compact('items'));
    }

            public function delete(TestCar243053359 $testCar243053359): void
        {
                                                if ($testCar243053359->testCar21183146463s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar243053359->delete();
        }
    }
