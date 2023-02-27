<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar584991464;

use App\Models\TestCar584991464;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar584991464 $testCar584991464;

    public function render()
    {
        $items = TestCar584991464::paginate($this->perPage);

        return view('livewire.generated.test-car584991464.index', compact('items'));
    }

            public function delete(TestCar584991464 $testCar584991464): void
        {
                                                if ($testCar584991464->testCar2246734916s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar584991464->delete();
        }
    }
