<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1921867778;

use App\Models\TestCar1921867778;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1921867778 $testCar1921867778;

    public function render()
    {
        $items = TestCar1921867778::paginate($this->perPage);

        return view('livewire.test-car1921867778.index', compact('items'));
    }

            public function delete(TestCar1921867778 $testCar1921867778): void
        {
                                                if ($testCar1921867778->testCar2292886112s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1921867778->delete();
        }
    }
