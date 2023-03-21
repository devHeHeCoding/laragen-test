<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar338518119;

use App\Models\TestCar338518119;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar338518119 $testCar338518119;

    public function render()
    {
        $items = TestCar338518119::paginate($this->perPage);

        return view('livewire.generated.test-car338518119.index', compact('items'));
    }

            public function delete(TestCar338518119 $testCar338518119): void
        {
                                                if ($testCar338518119->testCar2736809398s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar338518119->delete();
        }
    }
