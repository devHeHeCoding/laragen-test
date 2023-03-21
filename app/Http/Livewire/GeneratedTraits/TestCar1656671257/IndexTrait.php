<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1656671257;

use App\Models\TestCar1656671257;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1656671257 $testCar1656671257;

    public function render()
    {
        $items = TestCar1656671257::paginate($this->perPage);

        return view('livewire.generated.test-car1656671257.index', compact('items'));
    }

            public function delete(TestCar1656671257 $testCar1656671257): void
        {
                                                if ($testCar1656671257->testCar21239835521s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1656671257->delete();
        }
    }
