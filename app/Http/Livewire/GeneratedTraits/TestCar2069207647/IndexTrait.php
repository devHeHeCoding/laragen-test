<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2069207647;

use App\Models\TestCar2069207647;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2069207647 $testCar2069207647;

    public function render()
    {
        $items = TestCar2069207647::paginate($this->perPage);

        return view('livewire.generated.test-car2069207647.index', compact('items'));
    }

            public function delete(TestCar2069207647 $testCar2069207647): void
        {
                                                if ($testCar2069207647->testCar2813526747s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2069207647->delete();
        }
    }
