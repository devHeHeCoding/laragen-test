<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2096628681;

use App\Models\TestCar2096628681;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2096628681 $testCar2096628681;

    public function render()
    {
        $items = TestCar2096628681::paginate($this->perPage);

        return view('livewire.test-car2096628681.index', compact('items'));
    }

            public function delete(TestCar2096628681 $testCar2096628681): void
        {
                                                if ($testCar2096628681->testCar2485534753s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2096628681->delete();
        }
    }
