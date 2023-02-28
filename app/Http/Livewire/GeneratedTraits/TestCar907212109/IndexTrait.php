<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar907212109;

use App\Models\TestCar907212109;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar907212109 $testCar907212109;

    public function render()
    {
        $items = TestCar907212109::paginate($this->perPage);

        return view('livewire.generated.test-car907212109.index', compact('items'));
    }

            public function delete(TestCar907212109 $testCar907212109): void
        {
                                                if ($testCar907212109->testCar21906002011s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar907212109->delete();
        }
    }
