<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar867844321;

use App\Models\TestCar867844321;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar867844321 $testCar867844321;

    public function render()
    {
        $items = TestCar867844321::paginate($this->perPage);

        return view('livewire.test-car867844321.index', compact('items'));
    }

            public function delete(TestCar867844321 $testCar867844321): void
        {
                                                if ($testCar867844321->testCar2393760076s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar867844321->delete();
        }
    }
