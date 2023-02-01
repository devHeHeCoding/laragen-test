<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar453760717;

use App\Models\TestCar453760717;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar453760717 $testCar453760717;

    public function render()
    {
        $items = TestCar453760717::paginate($this->perPage);

        return view('livewire.test-car453760717.index', compact('items'));
    }

            public function delete(TestCar453760717 $testCar453760717): void
        {
                                                if ($testCar453760717->testCar21334893886s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar453760717->delete();
        }
    }
