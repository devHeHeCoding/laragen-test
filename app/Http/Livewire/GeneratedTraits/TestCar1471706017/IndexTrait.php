<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1471706017;

use App\Models\TestCar1471706017;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1471706017 $testCar1471706017;

    public function render()
    {
        $items = TestCar1471706017::paginate($this->perPage);

        return view('livewire.test-car1471706017.index', compact('items'));
    }

            public function delete(TestCar1471706017 $testCar1471706017): void
        {
                                                if ($testCar1471706017->testCar2731289490s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1471706017->delete();
        }
    }
