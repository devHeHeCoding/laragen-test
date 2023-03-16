<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar250640198;

use App\Models\TestCar250640198;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar250640198 $testCar250640198;

    public function render()
    {
        $items = TestCar250640198::paginate($this->perPage);

        return view('livewire.generated.test-car250640198.index', compact('items'));
    }

            public function delete(TestCar250640198 $testCar250640198): void
        {
                                                if ($testCar250640198->testCar21546157531s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar250640198->delete();
        }
    }
