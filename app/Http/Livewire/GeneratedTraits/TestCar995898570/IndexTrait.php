<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar995898570;

use App\Models\TestCar995898570;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar995898570 $testCar995898570;

    public function render()
    {
        $items = TestCar995898570::paginate($this->perPage);

        return view('livewire.generated.test-car995898570.index', compact('items'));
    }

            public function delete(TestCar995898570 $testCar995898570): void
        {
                                                if ($testCar995898570->testCar22040393320s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar995898570->delete();
        }
    }
