<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2033733895;

use App\Models\TestCar2033733895;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2033733895 $testCar2033733895;

    public function render()
    {
        $items = TestCar2033733895::paginate($this->perPage);

        return view('livewire.generated.test-car2033733895.index', compact('items'));
    }

            public function delete(TestCar2033733895 $testCar2033733895): void
        {
                                                if ($testCar2033733895->testCar2305220254s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2033733895->delete();
        }
    }
