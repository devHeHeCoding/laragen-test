<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1840422296;

use App\Models\TestCar1840422296;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1840422296 $testCar1840422296;

    public function render()
    {
        $items = TestCar1840422296::paginate($this->perPage);

        return view('livewire.test-car1840422296.index', compact('items'));
    }

            public function delete(TestCar1840422296 $testCar1840422296): void
        {
                                                if ($testCar1840422296->testCar2293294411s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1840422296->delete();
        }
    }
