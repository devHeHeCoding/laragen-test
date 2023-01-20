<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar878828653;

use App\Models\TestCar878828653;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar878828653 $testCar878828653;

    public function render()
    {
        $items = TestCar878828653::paginate($this->perPage);

        return view('livewire.test-car878828653.index', compact('items'));
    }

            public function delete(TestCar878828653 $testCar878828653): void
        {
                                                if ($testCar878828653->testCar2130973840s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar878828653->delete();
        }
    }
