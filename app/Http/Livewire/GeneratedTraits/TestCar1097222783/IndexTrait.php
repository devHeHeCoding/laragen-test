<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1097222783;

use App\Models\TestCar1097222783;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1097222783 $testCar1097222783;

    public function render()
    {
        $items = TestCar1097222783::paginate($this->perPage);

        return view('livewire.test-car1097222783.index', compact('items'));
    }

            public function delete(TestCar1097222783 $testCar1097222783): void
        {
                                                if ($testCar1097222783->testCar21833209739s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1097222783->delete();
        }
    }
