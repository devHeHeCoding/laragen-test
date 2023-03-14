<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar876793704;

use App\Models\TestCar876793704;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar876793704 $testCar876793704;

    public function render()
    {
        $items = TestCar876793704::paginate($this->perPage);

        return view('livewire.generated.test-car876793704.index', compact('items'));
    }

            public function delete(TestCar876793704 $testCar876793704): void
        {
                                                if ($testCar876793704->testCar21004201895s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar876793704->delete();
        }
    }
