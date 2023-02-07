<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1741852970;

use App\Models\TestCar1741852970;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1741852970 $testCar1741852970;

    public function render()
    {
        $items = TestCar1741852970::paginate($this->perPage);

        return view('livewire.generated.test-car1741852970.index', compact('items'));
    }

            public function delete(TestCar1741852970 $testCar1741852970): void
        {
                                                if ($testCar1741852970->testCar21776285290s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1741852970->delete();
        }
    }
