<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1122180325;

use App\Models\TestCar1122180325;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1122180325 $testCar1122180325;

    public function render()
    {
        $items = TestCar1122180325::paginate($this->perPage);

        return view('livewire.generated.test-car1122180325.index', compact('items'));
    }

            public function delete(TestCar1122180325 $testCar1122180325): void
        {
                                                if ($testCar1122180325->testCar21149628939s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1122180325->delete();
        }
    }
