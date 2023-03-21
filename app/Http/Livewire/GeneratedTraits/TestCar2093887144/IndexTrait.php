<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2093887144;

use App\Models\TestCar2093887144;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2093887144 $testCar2093887144;

    public function render()
    {
        $items = TestCar2093887144::paginate($this->perPage);

        return view('livewire.generated.test-car2093887144.index', compact('items'));
    }

            public function delete(TestCar2093887144 $testCar2093887144): void
        {
                                                if ($testCar2093887144->testCar23725169s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2093887144->delete();
        }
    }
