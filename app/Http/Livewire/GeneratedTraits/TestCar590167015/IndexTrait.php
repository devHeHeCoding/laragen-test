<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar590167015;

use App\Models\TestCar590167015;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar590167015 $testCar590167015;

    public function render()
    {
        $items = TestCar590167015::paginate($this->perPage);

        return view('livewire.generated.test-car590167015.index', compact('items'));
    }

            public function delete(TestCar590167015 $testCar590167015): void
        {
                                                if ($testCar590167015->testCar21208163008s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar590167015->delete();
        }
    }
