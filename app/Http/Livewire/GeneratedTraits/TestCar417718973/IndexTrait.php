<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar417718973;

use App\Models\TestCar417718973;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar417718973 $testCar417718973;

    public function render()
    {
        $items = TestCar417718973::paginate($this->perPage);

        return view('livewire.test-car417718973.index', compact('items'));
    }

            public function delete(TestCar417718973 $testCar417718973): void
        {
                                                if ($testCar417718973->testCar2882755939s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar417718973->delete();
        }
    }
