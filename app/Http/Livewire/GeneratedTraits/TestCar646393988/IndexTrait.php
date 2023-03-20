<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar646393988;

use App\Models\TestCar646393988;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar646393988 $testCar646393988;

    public function render()
    {
        $items = TestCar646393988::paginate($this->perPage);

        return view('livewire.generated.test-car646393988.index', compact('items'));
    }

            public function delete(TestCar646393988 $testCar646393988): void
        {
                                                if ($testCar646393988->testCar2338776130s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar646393988->delete();
        }
    }
