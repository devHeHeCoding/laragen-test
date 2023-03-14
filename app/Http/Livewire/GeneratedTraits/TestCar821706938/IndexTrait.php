<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar821706938;

use App\Models\TestCar821706938;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar821706938 $testCar821706938;

    public function render()
    {
        $items = TestCar821706938::paginate($this->perPage);

        return view('livewire.generated.test-car821706938.index', compact('items'));
    }

            public function delete(TestCar821706938 $testCar821706938): void
        {
                                                if ($testCar821706938->testCar2589757447s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar821706938->delete();
        }
    }
