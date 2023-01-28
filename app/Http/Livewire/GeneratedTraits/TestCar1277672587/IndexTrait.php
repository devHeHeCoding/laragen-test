<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1277672587;

use App\Models\TestCar1277672587;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1277672587 $testCar1277672587;

    public function render()
    {
        $items = TestCar1277672587::paginate($this->perPage);

        return view('livewire.test-car1277672587.index', compact('items'));
    }

            public function delete(TestCar1277672587 $testCar1277672587): void
        {
                                                if ($testCar1277672587->testCar21192258690s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1277672587->delete();
        }
    }
