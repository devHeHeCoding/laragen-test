<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar465974586;

use App\Models\TestCar465974586;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar465974586 $testCar465974586;

    public function render()
    {
        $items = TestCar465974586::paginate($this->perPage);

        return view('livewire.test-car465974586.index', compact('items'));
    }

            public function delete(TestCar465974586 $testCar465974586): void
        {
                                                if ($testCar465974586->testCar2335452405s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar465974586->delete();
        }
    }
