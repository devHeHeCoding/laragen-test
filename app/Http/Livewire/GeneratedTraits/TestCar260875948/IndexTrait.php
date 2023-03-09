<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar260875948;

use App\Models\TestCar260875948;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar260875948 $testCar260875948;

    public function render()
    {
        $items = TestCar260875948::paginate($this->perPage);

        return view('livewire.generated.test-car260875948.index', compact('items'));
    }

            public function delete(TestCar260875948 $testCar260875948): void
        {
                                                if ($testCar260875948->testCar2836000106s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar260875948->delete();
        }
    }
