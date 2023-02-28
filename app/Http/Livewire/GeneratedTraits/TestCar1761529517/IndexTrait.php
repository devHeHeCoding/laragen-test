<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1761529517;

use App\Models\TestCar1761529517;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1761529517 $testCar1761529517;

    public function render()
    {
        $items = TestCar1761529517::paginate($this->perPage);

        return view('livewire.generated.test-car1761529517.index', compact('items'));
    }

            public function delete(TestCar1761529517 $testCar1761529517): void
        {
                                                if ($testCar1761529517->testCar21982770724s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1761529517->delete();
        }
    }
