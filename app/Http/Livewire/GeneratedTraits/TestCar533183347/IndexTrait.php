<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar533183347;

use App\Models\TestCar533183347;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar533183347 $testCar533183347;

    public function render()
    {
        $items = TestCar533183347::paginate($this->perPage);

        return view('livewire.generated.test-car533183347.index', compact('items'));
    }

            public function delete(TestCar533183347 $testCar533183347): void
        {
                                                if ($testCar533183347->testCar2372997582s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar533183347->delete();
        }
    }
