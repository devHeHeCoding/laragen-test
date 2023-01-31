<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar561906651;

use App\Models\TestCar561906651;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar561906651 $testCar561906651;

    public function render()
    {
        $items = TestCar561906651::paginate($this->perPage);

        return view('livewire.test-car561906651.index', compact('items'));
    }

            public function delete(TestCar561906651 $testCar561906651): void
        {
                                                if ($testCar561906651->testCar21104752396s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar561906651->delete();
        }
    }
