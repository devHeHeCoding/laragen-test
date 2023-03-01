<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar169681796;

use App\Models\TestCar169681796;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar169681796 $testCar169681796;

    public function render()
    {
        $items = TestCar169681796::paginate($this->perPage);

        return view('livewire.generated.test-car169681796.index', compact('items'));
    }

            public function delete(TestCar169681796 $testCar169681796): void
        {
                                                if ($testCar169681796->testCar21325972417s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar169681796->delete();
        }
    }
