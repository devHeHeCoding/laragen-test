<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1568035282;

use App\Models\TestCar1568035282;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1568035282 $testCar1568035282;

    public function render()
    {
        $items = TestCar1568035282::paginate($this->perPage);

        return view('livewire.generated.test-car1568035282.index', compact('items'));
    }

            public function delete(TestCar1568035282 $testCar1568035282): void
        {
                                                if ($testCar1568035282->testCar21636645964s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1568035282->delete();
        }
    }
