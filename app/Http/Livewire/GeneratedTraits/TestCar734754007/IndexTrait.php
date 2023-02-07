<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar734754007;

use App\Models\TestCar734754007;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar734754007 $testCar734754007;

    public function render()
    {
        $items = TestCar734754007::paginate($this->perPage);

        return view('livewire.test-car734754007.index', compact('items'));
    }

            public function delete(TestCar734754007 $testCar734754007): void
        {
                                                if ($testCar734754007->testCar21184078765s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar734754007->delete();
        }
    }
