<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar20837838;

use App\Models\TestCar20837838;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar20837838 $testCar20837838;

    public function render()
    {
        $items = TestCar20837838::paginate($this->perPage);

        return view('livewire.generated.test-car20837838.index', compact('items'));
    }

            public function delete(TestCar20837838 $testCar20837838): void
        {
                                                if ($testCar20837838->testCar21312630471s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar20837838->delete();
        }
    }
