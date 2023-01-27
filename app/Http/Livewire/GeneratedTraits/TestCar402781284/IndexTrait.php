<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar402781284;

use App\Models\TestCar402781284;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar402781284 $testCar402781284;

    public function render()
    {
        $items = TestCar402781284::paginate($this->perPage);

        return view('livewire.test-car402781284.index', compact('items'));
    }

            public function delete(TestCar402781284 $testCar402781284): void
        {
                                                if ($testCar402781284->testCar21623756155s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar402781284->delete();
        }
    }
