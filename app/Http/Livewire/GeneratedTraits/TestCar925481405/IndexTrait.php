<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar925481405;

use App\Models\TestCar925481405;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar925481405 $testCar925481405;

    public function render()
    {
        $items = TestCar925481405::paginate($this->perPage);

        return view('livewire.generated.test-car925481405.index', compact('items'));
    }

            public function delete(TestCar925481405 $testCar925481405): void
        {
                                                if ($testCar925481405->testCar239438474s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar925481405->delete();
        }
    }
