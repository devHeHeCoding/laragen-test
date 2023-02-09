<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar572401614;

use App\Models\TestCar572401614;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar572401614 $testCar572401614;

    public function render()
    {
        $items = TestCar572401614::paginate($this->perPage);

        return view('livewire.generated.test-car572401614.index', compact('items'));
    }

            public function delete(TestCar572401614 $testCar572401614): void
        {
                                                if ($testCar572401614->testCar21456753527s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar572401614->delete();
        }
    }
