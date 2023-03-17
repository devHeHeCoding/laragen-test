<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1556945516;

use App\Models\TestCar1556945516;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1556945516 $testCar1556945516;

    public function render()
    {
        $items = TestCar1556945516::paginate($this->perPage);

        return view('livewire.generated.test-car1556945516.index', compact('items'));
    }

            public function delete(TestCar1556945516 $testCar1556945516): void
        {
                                                if ($testCar1556945516->testCar289602167s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1556945516->delete();
        }
    }
