<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2051683754;

use App\Models\TestCar2051683754;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2051683754 $testCar2051683754;

    public function render()
    {
        $items = TestCar2051683754::paginate($this->perPage);

        return view('livewire.test-car2051683754.index', compact('items'));
    }

            public function delete(TestCar2051683754 $testCar2051683754): void
        {
                                                if ($testCar2051683754->testCar21066029830s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2051683754->delete();
        }
    }
