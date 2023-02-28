<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1363987257;

use App\Models\TestCar1363987257;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1363987257 $testCar1363987257;

    public function render()
    {
        $items = TestCar1363987257::paginate($this->perPage);

        return view('livewire.generated.test-car1363987257.index', compact('items'));
    }

            public function delete(TestCar1363987257 $testCar1363987257): void
        {
                                                if ($testCar1363987257->testCar21428513431s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1363987257->delete();
        }
    }
