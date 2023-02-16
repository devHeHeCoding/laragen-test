<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar664264609;

use App\Models\TestCar664264609;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar664264609 $testCar664264609;

    public function render()
    {
        $items = TestCar664264609::paginate($this->perPage);

        return view('livewire.generated.test-car664264609.index', compact('items'));
    }

            public function delete(TestCar664264609 $testCar664264609): void
        {
                                                if ($testCar664264609->testCar231263316s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar664264609->delete();
        }
    }
