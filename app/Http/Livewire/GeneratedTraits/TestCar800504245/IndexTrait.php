<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar800504245;

use App\Models\TestCar800504245;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar800504245 $testCar800504245;

    public function render()
    {
        $items = TestCar800504245::paginate($this->perPage);

        return view('livewire.generated.test-car800504245.index', compact('items'));
    }

            public function delete(TestCar800504245 $testCar800504245): void
        {
                                                if ($testCar800504245->testCar21644670278s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar800504245->delete();
        }
    }
