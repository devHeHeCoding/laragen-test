<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar623301657;

use App\Models\TestCar623301657;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar623301657 $testCar623301657;

    public function render()
    {
        $items = TestCar623301657::paginate($this->perPage);

        return view('livewire.test-car623301657.index', compact('items'));
    }

            public function delete(TestCar623301657 $testCar623301657): void
        {
                                                if ($testCar623301657->testCar2344387994s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar623301657->delete();
        }
    }
