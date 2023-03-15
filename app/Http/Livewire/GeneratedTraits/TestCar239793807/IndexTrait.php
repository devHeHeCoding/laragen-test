<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar239793807;

use App\Models\TestCar239793807;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar239793807 $testCar239793807;

    public function render()
    {
        $items = TestCar239793807::paginate($this->perPage);

        return view('livewire.generated.test-car239793807.index', compact('items'));
    }

            public function delete(TestCar239793807 $testCar239793807): void
        {
                                                if ($testCar239793807->testCar21715222222s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar239793807->delete();
        }
    }
