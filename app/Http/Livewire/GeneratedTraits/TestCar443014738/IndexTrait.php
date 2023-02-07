<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar443014738;

use App\Models\TestCar443014738;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar443014738 $testCar443014738;

    public function render()
    {
        $items = TestCar443014738::paginate($this->perPage);

        return view('livewire.test-car443014738.index', compact('items'));
    }

            public function delete(TestCar443014738 $testCar443014738): void
        {
                                                if ($testCar443014738->testCar2100569587s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar443014738->delete();
        }
    }
