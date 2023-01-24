<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar565247789;

use App\Models\TestCar565247789;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar565247789 $testCar565247789;

    public function render()
    {
        $items = TestCar565247789::paginate($this->perPage);

        return view('livewire.test-car565247789.index', compact('items'));
    }

            public function delete(TestCar565247789 $testCar565247789): void
        {
                                                if ($testCar565247789->testCar21245990123s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar565247789->delete();
        }
    }
