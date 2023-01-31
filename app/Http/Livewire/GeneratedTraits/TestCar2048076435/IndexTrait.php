<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2048076435;

use App\Models\TestCar2048076435;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2048076435 $testCar2048076435;

    public function render()
    {
        $items = TestCar2048076435::paginate($this->perPage);

        return view('livewire.test-car2048076435.index', compact('items'));
    }

            public function delete(TestCar2048076435 $testCar2048076435): void
        {
                                                if ($testCar2048076435->testCar21513198563s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2048076435->delete();
        }
    }
