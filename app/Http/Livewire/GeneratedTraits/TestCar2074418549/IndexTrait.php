<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2074418549;

use App\Models\TestCar2074418549;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2074418549 $testCar2074418549;

    public function render()
    {
        $items = TestCar2074418549::paginate($this->perPage);

        return view('livewire.generated.test-car2074418549.index', compact('items'));
    }

            public function delete(TestCar2074418549 $testCar2074418549): void
        {
                                                if ($testCar2074418549->testCar22125707506s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2074418549->delete();
        }
    }
