<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1381045626;

use App\Models\TestCar1381045626;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1381045626 $testCar1381045626;

    public function render()
    {
        $items = TestCar1381045626::paginate($this->perPage);

        return view('livewire.generated.test-car1381045626.index', compact('items'));
    }

            public function delete(TestCar1381045626 $testCar1381045626): void
        {
                                                if ($testCar1381045626->testCar2170510129s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1381045626->delete();
        }
    }
