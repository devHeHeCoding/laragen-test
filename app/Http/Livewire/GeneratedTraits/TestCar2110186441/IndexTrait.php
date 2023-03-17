<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2110186441;

use App\Models\TestCar2110186441;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2110186441 $testCar2110186441;

    public function render()
    {
        $items = TestCar2110186441::paginate($this->perPage);

        return view('livewire.generated.test-car2110186441.index', compact('items'));
    }

            public function delete(TestCar2110186441 $testCar2110186441): void
        {
                                                if ($testCar2110186441->testCar2422047950s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2110186441->delete();
        }
    }
