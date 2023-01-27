<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar436456490;

use App\Models\TestCar436456490;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar436456490 $testCar436456490;

    public function render()
    {
        $items = TestCar436456490::paginate($this->perPage);

        return view('livewire.test-car436456490.index', compact('items'));
    }

            public function delete(TestCar436456490 $testCar436456490): void
        {
                                                if ($testCar436456490->testCar21618861998s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar436456490->delete();
        }
    }
