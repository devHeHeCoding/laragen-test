<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar923986688;

use App\Models\TestCar923986688;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar923986688 $testCar923986688;

    public function render()
    {
        $items = TestCar923986688::paginate($this->perPage);

        return view('livewire.generated.test-car923986688.index', compact('items'));
    }

            public function delete(TestCar923986688 $testCar923986688): void
        {
                                                if ($testCar923986688->testCar2985164798s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar923986688->delete();
        }
    }
