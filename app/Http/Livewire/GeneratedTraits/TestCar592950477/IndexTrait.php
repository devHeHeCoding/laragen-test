<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar592950477;

use App\Models\TestCar592950477;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar592950477 $testCar592950477;

    public function render()
    {
        $items = TestCar592950477::paginate($this->perPage);

        return view('livewire.generated.test-car592950477.index', compact('items'));
    }

            public function delete(TestCar592950477 $testCar592950477): void
        {
                                                if ($testCar592950477->testCar21336798997s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar592950477->delete();
        }
    }
