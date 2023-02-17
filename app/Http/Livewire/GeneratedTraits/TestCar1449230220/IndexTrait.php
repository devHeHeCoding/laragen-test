<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1449230220;

use App\Models\TestCar1449230220;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1449230220 $testCar1449230220;

    public function render()
    {
        $items = TestCar1449230220::paginate($this->perPage);

        return view('livewire.generated.test-car1449230220.index', compact('items'));
    }

            public function delete(TestCar1449230220 $testCar1449230220): void
        {
                                                if ($testCar1449230220->testCar2494391298s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1449230220->delete();
        }
    }
