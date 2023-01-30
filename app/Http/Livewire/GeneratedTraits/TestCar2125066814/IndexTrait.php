<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2125066814;

use App\Models\TestCar2125066814;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2125066814 $testCar2125066814;

    public function render()
    {
        $items = TestCar2125066814::paginate($this->perPage);

        return view('livewire.test-car2125066814.index', compact('items'));
    }

            public function delete(TestCar2125066814 $testCar2125066814): void
        {
                                                if ($testCar2125066814->testCar21167111726s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2125066814->delete();
        }
    }
