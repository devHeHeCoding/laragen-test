<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar361980884;

use App\Models\TestCar361980884;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar361980884 $testCar361980884;

    public function render()
    {
        $items = TestCar361980884::paginate($this->perPage);

        return view('livewire.test-car361980884.index', compact('items'));
    }

            public function delete(TestCar361980884 $testCar361980884): void
        {
                                                if ($testCar361980884->testCar21832519944s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar361980884->delete();
        }
    }
