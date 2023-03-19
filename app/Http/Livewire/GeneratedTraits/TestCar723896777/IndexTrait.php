<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar723896777;

use App\Models\TestCar723896777;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar723896777 $testCar723896777;

    public function render()
    {
        $items = TestCar723896777::paginate($this->perPage);

        return view('livewire.generated.test-car723896777.index', compact('items'));
    }

            public function delete(TestCar723896777 $testCar723896777): void
        {
                                                if ($testCar723896777->testCar21272154082s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar723896777->delete();
        }
    }
