<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1044631486;

use App\Models\TestCar1044631486;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1044631486 $testCar1044631486;

    public function render()
    {
        $items = TestCar1044631486::paginate($this->perPage);

        return view('livewire.generated.test-car1044631486.index', compact('items'));
    }

            public function delete(TestCar1044631486 $testCar1044631486): void
        {
                                                if ($testCar1044631486->testCar21028636746s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1044631486->delete();
        }
    }
