<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1407877259;

use App\Models\TestCar1407877259;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1407877259 $testCar1407877259;

    public function render()
    {
        $items = TestCar1407877259::paginate($this->perPage);

        return view('livewire.test-car1407877259.index', compact('items'));
    }

            public function delete(TestCar1407877259 $testCar1407877259): void
        {
                                                if ($testCar1407877259->testCar262000380s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1407877259->delete();
        }
    }
