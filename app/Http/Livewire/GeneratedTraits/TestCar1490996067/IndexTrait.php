<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1490996067;

use App\Models\TestCar1490996067;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1490996067 $testCar1490996067;

    public function render()
    {
        $items = TestCar1490996067::paginate($this->perPage);

        return view('livewire.test-car1490996067.index', compact('items'));
    }

            public function delete(TestCar1490996067 $testCar1490996067): void
        {
                                                if ($testCar1490996067->testCar2892354326s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1490996067->delete();
        }
    }
