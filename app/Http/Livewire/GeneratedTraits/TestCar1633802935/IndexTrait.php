<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1633802935;

use App\Models\TestCar1633802935;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1633802935 $testCar1633802935;

    public function render()
    {
        $items = TestCar1633802935::paginate($this->perPage);

        return view('livewire.test-car1633802935.index', compact('items'));
    }

            public function delete(TestCar1633802935 $testCar1633802935): void
        {
                                                if ($testCar1633802935->testCar21700242801s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1633802935->delete();
        }
    }
