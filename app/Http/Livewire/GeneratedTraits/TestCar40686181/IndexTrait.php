<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar40686181;

use App\Models\TestCar40686181;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar40686181 $testCar40686181;

    public function render()
    {
        $items = TestCar40686181::paginate($this->perPage);

        return view('livewire.test-car40686181.index', compact('items'));
    }

            public function delete(TestCar40686181 $testCar40686181): void
        {
                                                if ($testCar40686181->testCar2732044160s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar40686181->delete();
        }
    }
