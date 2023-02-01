<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar500896906;

use App\Models\TestCar500896906;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar500896906 $testCar500896906;

    public function render()
    {
        $items = TestCar500896906::paginate($this->perPage);

        return view('livewire.test-car500896906.index', compact('items'));
    }

            public function delete(TestCar500896906 $testCar500896906): void
        {
                                                if ($testCar500896906->testCar21981742326s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar500896906->delete();
        }
    }
