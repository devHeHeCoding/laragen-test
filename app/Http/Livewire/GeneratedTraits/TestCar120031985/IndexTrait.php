<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar120031985;

use App\Models\TestCar120031985;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar120031985 $testCar120031985;

    public function render()
    {
        $items = TestCar120031985::paginate($this->perPage);

        return view('livewire.test-car120031985.index', compact('items'));
    }

            public function delete(TestCar120031985 $testCar120031985): void
        {
                                                if ($testCar120031985->testCar2789241591s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar120031985->delete();
        }
    }
