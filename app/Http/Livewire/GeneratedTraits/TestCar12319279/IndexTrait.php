<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar12319279;

use App\Models\TestCar12319279;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar12319279 $testCar12319279;

    public function render()
    {
        $items = TestCar12319279::paginate($this->perPage);

        return view('livewire.test-car12319279.index', compact('items'));
    }

            public function delete(TestCar12319279 $testCar12319279): void
        {
                                                if ($testCar12319279->testCar21796656719s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar12319279->delete();
        }
    }
