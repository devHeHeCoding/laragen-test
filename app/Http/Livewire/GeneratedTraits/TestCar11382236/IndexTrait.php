<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar11382236;

use App\Models\TestCar11382236;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar11382236 $testCar11382236;

    public function render()
    {
        $items = TestCar11382236::paginate($this->perPage);

        return view('livewire.generated.test-car11382236.index', compact('items'));
    }

            public function delete(TestCar11382236 $testCar11382236): void
        {
                                                if ($testCar11382236->testCar2586506791s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar11382236->delete();
        }
    }
