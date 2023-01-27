<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1159620795;

use App\Models\TestCar1159620795;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1159620795 $testCar1159620795;

    public function render()
    {
        $items = TestCar1159620795::paginate($this->perPage);

        return view('livewire.test-car1159620795.index', compact('items'));
    }

            public function delete(TestCar1159620795 $testCar1159620795): void
        {
                                                if ($testCar1159620795->testCar2494943405s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1159620795->delete();
        }
    }
