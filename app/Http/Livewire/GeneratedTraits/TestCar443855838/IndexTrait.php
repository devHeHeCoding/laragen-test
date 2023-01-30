<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar443855838;

use App\Models\TestCar443855838;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar443855838 $testCar443855838;

    public function render()
    {
        $items = TestCar443855838::paginate($this->perPage);

        return view('livewire.test-car443855838.index', compact('items'));
    }

            public function delete(TestCar443855838 $testCar443855838): void
        {
                                                if ($testCar443855838->testCar21540040065s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar443855838->delete();
        }
    }
