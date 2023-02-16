<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1331586653;

use App\Models\TestCar1331586653;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1331586653 $testCar1331586653;

    public function render()
    {
        $items = TestCar1331586653::paginate($this->perPage);

        return view('livewire.generated.test-car1331586653.index', compact('items'));
    }

            public function delete(TestCar1331586653 $testCar1331586653): void
        {
                                                if ($testCar1331586653->testCar22020105740s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1331586653->delete();
        }
    }
