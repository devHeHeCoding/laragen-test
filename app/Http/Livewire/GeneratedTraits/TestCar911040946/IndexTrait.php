<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar911040946;

use App\Models\TestCar911040946;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar911040946 $testCar911040946;

    public function render()
    {
        $items = TestCar911040946::paginate($this->perPage);

        return view('livewire.test-car911040946.index', compact('items'));
    }

            public function delete(TestCar911040946 $testCar911040946): void
        {
                                                if ($testCar911040946->testCar21082757691s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar911040946->delete();
        }
    }
