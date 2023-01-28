<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar177062726;

use App\Models\TestCar177062726;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar177062726 $testCar177062726;

    public function render()
    {
        $items = TestCar177062726::paginate($this->perPage);

        return view('livewire.test-car177062726.index', compact('items'));
    }

            public function delete(TestCar177062726 $testCar177062726): void
        {
                                                if ($testCar177062726->testCar2927580276s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar177062726->delete();
        }
    }
