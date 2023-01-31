<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2012776875;

use App\Models\TestCar2012776875;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2012776875 $testCar2012776875;

    public function render()
    {
        $items = TestCar2012776875::paginate($this->perPage);

        return view('livewire.test-car2012776875.index', compact('items'));
    }

            public function delete(TestCar2012776875 $testCar2012776875): void
        {
                                                if ($testCar2012776875->testCar2745560118s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2012776875->delete();
        }
    }
