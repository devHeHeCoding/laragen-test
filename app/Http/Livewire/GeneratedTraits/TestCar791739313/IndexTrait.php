<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar791739313;

use App\Models\TestCar791739313;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar791739313 $testCar791739313;

    public function render()
    {
        $items = TestCar791739313::paginate($this->perPage);

        return view('livewire.generated.test-car791739313.index', compact('items'));
    }

            public function delete(TestCar791739313 $testCar791739313): void
        {
                                                if ($testCar791739313->testCar2553668537s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar791739313->delete();
        }
    }
