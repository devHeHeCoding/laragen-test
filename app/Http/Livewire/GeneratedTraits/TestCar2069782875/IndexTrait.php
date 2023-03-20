<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2069782875;

use App\Models\TestCar2069782875;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2069782875 $testCar2069782875;

    public function render()
    {
        $items = TestCar2069782875::paginate($this->perPage);

        return view('livewire.generated.test-car2069782875.index', compact('items'));
    }

            public function delete(TestCar2069782875 $testCar2069782875): void
        {
                                                if ($testCar2069782875->testCar21857508330s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2069782875->delete();
        }
    }
