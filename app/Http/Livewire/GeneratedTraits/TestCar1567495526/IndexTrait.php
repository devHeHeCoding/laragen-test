<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1567495526;

use App\Models\TestCar1567495526;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1567495526 $testCar1567495526;

    public function render()
    {
        $items = TestCar1567495526::paginate($this->perPage);

        return view('livewire.generated.test-car1567495526.index', compact('items'));
    }

            public function delete(TestCar1567495526 $testCar1567495526): void
        {
                                                if ($testCar1567495526->testCar2412160001s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1567495526->delete();
        }
    }
