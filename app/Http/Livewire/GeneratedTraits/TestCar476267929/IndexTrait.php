<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar476267929;

use App\Models\TestCar476267929;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar476267929 $testCar476267929;

    public function render()
    {
        $items = TestCar476267929::paginate($this->perPage);

        return view('livewire.test-car476267929.index', compact('items'));
    }

            public function delete(TestCar476267929 $testCar476267929): void
        {
                                                if ($testCar476267929->testCar2496564315s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar476267929->delete();
        }
    }
