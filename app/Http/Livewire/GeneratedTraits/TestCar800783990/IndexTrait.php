<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar800783990;

use App\Models\TestCar800783990;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar800783990 $testCar800783990;

    public function render()
    {
        $items = TestCar800783990::paginate($this->perPage);

        return view('livewire.test-car800783990.index', compact('items'));
    }

            public function delete(TestCar800783990 $testCar800783990): void
        {
                                                if ($testCar800783990->testCar21164681542s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar800783990->delete();
        }
    }
