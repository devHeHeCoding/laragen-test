<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar898972813;

use App\Models\TestCar898972813;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar898972813 $testCar898972813;

    public function render()
    {
        $items = TestCar898972813::paginate($this->perPage);

        return view('livewire.generated.test-car898972813.index', compact('items'));
    }

            public function delete(TestCar898972813 $testCar898972813): void
        {
                                                if ($testCar898972813->testCar21637820003s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar898972813->delete();
        }
    }
