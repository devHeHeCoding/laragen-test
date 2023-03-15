<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1159592761;

use App\Models\TestCar1159592761;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1159592761 $testCar1159592761;

    public function render()
    {
        $items = TestCar1159592761::paginate($this->perPage);

        return view('livewire.generated.test-car1159592761.index', compact('items'));
    }

            public function delete(TestCar1159592761 $testCar1159592761): void
        {
                                                if ($testCar1159592761->testCar2274435045s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1159592761->delete();
        }
    }
