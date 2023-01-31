<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar535034191;

use App\Models\TestCar535034191;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar535034191 $testCar535034191;

    public function render()
    {
        $items = TestCar535034191::paginate($this->perPage);

        return view('livewire.test-car535034191.index', compact('items'));
    }

            public function delete(TestCar535034191 $testCar535034191): void
        {
                                                if ($testCar535034191->testCar2946099501s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar535034191->delete();
        }
    }
