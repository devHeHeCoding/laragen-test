<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar289843917;

use App\Models\TestCar289843917;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar289843917 $testCar289843917;

    public function render()
    {
        $items = TestCar289843917::paginate($this->perPage);

        return view('livewire.test-car289843917.index', compact('items'));
    }

            public function delete(TestCar289843917 $testCar289843917): void
        {
                                                if ($testCar289843917->testCar2578749838s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar289843917->delete();
        }
    }
