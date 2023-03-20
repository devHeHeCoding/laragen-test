<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar252691639;

use App\Models\TestCar252691639;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar252691639 $testCar252691639;

    public function render()
    {
        $items = TestCar252691639::paginate($this->perPage);

        return view('livewire.generated.test-car252691639.index', compact('items'));
    }

            public function delete(TestCar252691639 $testCar252691639): void
        {
                                                if ($testCar252691639->testCar2530735326s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar252691639->delete();
        }
    }
