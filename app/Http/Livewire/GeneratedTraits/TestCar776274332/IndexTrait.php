<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar776274332;

use App\Models\TestCar776274332;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar776274332 $testCar776274332;

    public function render()
    {
        $items = TestCar776274332::paginate($this->perPage);

        return view('livewire.test-car776274332.index', compact('items'));
    }

            public function delete(TestCar776274332 $testCar776274332): void
        {
                                                if ($testCar776274332->testCar21653590171s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar776274332->delete();
        }
    }
