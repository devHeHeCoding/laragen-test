<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar930361748;

use App\Models\TestCar930361748;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar930361748 $testCar930361748;

    public function render()
    {
        $items = TestCar930361748::paginate($this->perPage);

        return view('livewire.test-car930361748.index', compact('items'));
    }

            public function delete(TestCar930361748 $testCar930361748): void
        {
                                                if ($testCar930361748->testCar21649564040s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar930361748->delete();
        }
    }
