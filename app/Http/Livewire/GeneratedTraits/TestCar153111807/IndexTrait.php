<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar153111807;

use App\Models\TestCar153111807;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar153111807 $testCar153111807;

    public function render()
    {
        $items = TestCar153111807::paginate($this->perPage);

        return view('livewire.test-car153111807.index', compact('items'));
    }

            public function delete(TestCar153111807 $testCar153111807): void
        {
                                                if ($testCar153111807->testCar21729063810s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar153111807->delete();
        }
    }
