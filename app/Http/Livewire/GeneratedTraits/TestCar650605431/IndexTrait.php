<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar650605431;

use App\Models\TestCar650605431;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar650605431 $testCar650605431;

    public function render()
    {
        $items = TestCar650605431::paginate($this->perPage);

        return view('livewire.test-car650605431.index', compact('items'));
    }

            public function delete(TestCar650605431 $testCar650605431): void
        {
                                                if ($testCar650605431->testCar21358962366s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar650605431->delete();
        }
    }
