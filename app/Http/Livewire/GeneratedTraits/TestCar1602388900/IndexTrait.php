<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1602388900;

use App\Models\TestCar1602388900;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1602388900 $testCar1602388900;

    public function render()
    {
        $items = TestCar1602388900::paginate($this->perPage);

        return view('livewire.test-car1602388900.index', compact('items'));
    }

            public function delete(TestCar1602388900 $testCar1602388900): void
        {
                                                if ($testCar1602388900->testCar2160022486s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1602388900->delete();
        }
    }
