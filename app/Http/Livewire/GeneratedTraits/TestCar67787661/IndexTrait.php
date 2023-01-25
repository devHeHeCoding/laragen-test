<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar67787661;

use App\Models\TestCar67787661;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar67787661 $testCar67787661;

    public function render()
    {
        $items = TestCar67787661::paginate($this->perPage);

        return view('livewire.test-car67787661.index', compact('items'));
    }

            public function delete(TestCar67787661 $testCar67787661): void
        {
                                                if ($testCar67787661->testCar2734680696s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar67787661->delete();
        }
    }
