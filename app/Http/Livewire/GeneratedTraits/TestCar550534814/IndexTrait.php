<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar550534814;

use App\Models\TestCar550534814;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar550534814 $testCar550534814;

    public function render()
    {
        $items = TestCar550534814::paginate($this->perPage);

        return view('livewire.test-car550534814.index', compact('items'));
    }

            public function delete(TestCar550534814 $testCar550534814): void
        {
                                                if ($testCar550534814->testCar2302840860s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar550534814->delete();
        }
    }
