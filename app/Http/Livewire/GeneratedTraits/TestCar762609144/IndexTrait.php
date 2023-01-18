<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar762609144;

use App\Models\TestCar762609144;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar762609144 $testCar762609144;

    public function render()
    {
        $items = TestCar762609144::paginate($this->perPage);

        return view('livewire.test-car762609144.index', compact('items'));
    }

            public function delete(TestCar762609144 $testCar762609144): void
        {
                                                if ($testCar762609144->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar762609144->delete();
        }
    }
