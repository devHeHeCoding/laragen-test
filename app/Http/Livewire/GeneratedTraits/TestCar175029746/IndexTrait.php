<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar175029746;

use App\Models\TestCar175029746;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar175029746 $testCar175029746;

    public function render()
    {
        $items = TestCar175029746::paginate($this->perPage);

        return view('livewire.test-car175029746.index', compact('items'));
    }

            public function delete(TestCar175029746 $testCar175029746): void
        {
                                                if ($testCar175029746->testCar21264516616s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar175029746->delete();
        }
    }
