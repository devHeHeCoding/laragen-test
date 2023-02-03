<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar340427550;

use App\Models\TestCar340427550;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar340427550 $testCar340427550;

    public function render()
    {
        $items = TestCar340427550::paginate($this->perPage);

        return view('livewire.test-car340427550.index', compact('items'));
    }

            public function delete(TestCar340427550 $testCar340427550): void
        {
                                                if ($testCar340427550->testCar2874902604s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar340427550->delete();
        }
    }
