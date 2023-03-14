<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1243674150;

use App\Models\TestCar1243674150;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1243674150 $testCar1243674150;

    public function render()
    {
        $items = TestCar1243674150::paginate($this->perPage);

        return view('livewire.generated.test-car1243674150.index', compact('items'));
    }

            public function delete(TestCar1243674150 $testCar1243674150): void
        {
                                                if ($testCar1243674150->testCar21589776178s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1243674150->delete();
        }
    }
