<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar659232380;

use App\Models\TestCar659232380;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar659232380 $testCar659232380;

    public function render()
    {
        $items = TestCar659232380::paginate($this->perPage);

        return view('livewire.test-car659232380.index', compact('items'));
    }

            public function delete(TestCar659232380 $testCar659232380): void
        {
                                                if ($testCar659232380->testCar21573850148s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar659232380->delete();
        }
    }
