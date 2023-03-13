<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar662858584;

use App\Models\TestCar662858584;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar662858584 $testCar662858584;

    public function render()
    {
        $items = TestCar662858584::paginate($this->perPage);

        return view('livewire.generated.test-car662858584.index', compact('items'));
    }

            public function delete(TestCar662858584 $testCar662858584): void
        {
                                                if ($testCar662858584->testCar21976165244s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar662858584->delete();
        }
    }
