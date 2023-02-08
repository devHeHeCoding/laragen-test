<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1147131989;

use App\Models\TestCar1147131989;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1147131989 $testCar1147131989;

    public function render()
    {
        $items = TestCar1147131989::paginate($this->perPage);

        return view('livewire.generated.test-car1147131989.index', compact('items'));
    }

            public function delete(TestCar1147131989 $testCar1147131989): void
        {
                                                if ($testCar1147131989->testCar2539016647s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1147131989->delete();
        }
    }
