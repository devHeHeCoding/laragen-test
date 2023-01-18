<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar722371413;

use App\Models\TestCar722371413;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar722371413 $testCar722371413;

    public function render()
    {
        $items = TestCar722371413::paginate($this->perPage);

        return view('livewire.test-car722371413.index', compact('items'));
    }

            public function delete(TestCar722371413 $testCar722371413): void
        {
                                                if ($testCar722371413->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar722371413->delete();
        }
    }
