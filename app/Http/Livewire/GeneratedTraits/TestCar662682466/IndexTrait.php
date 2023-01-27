<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar662682466;

use App\Models\TestCar662682466;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar662682466 $testCar662682466;

    public function render()
    {
        $items = TestCar662682466::paginate($this->perPage);

        return view('livewire.test-car662682466.index', compact('items'));
    }

            public function delete(TestCar662682466 $testCar662682466): void
        {
                                                if ($testCar662682466->testCar2577092462s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar662682466->delete();
        }
    }
