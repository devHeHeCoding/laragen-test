<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar77220492;

use App\Models\TestCar77220492;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar77220492 $testCar77220492;

    public function render()
    {
        $items = TestCar77220492::paginate($this->perPage);

        return view('livewire.generated.test-car77220492.index', compact('items'));
    }

            public function delete(TestCar77220492 $testCar77220492): void
        {
                                                if ($testCar77220492->testCar21212115157s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar77220492->delete();
        }
    }
