<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar369693455;

use App\Models\TestCar369693455;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar369693455 $testCar369693455;

    public function render()
    {
        $items = TestCar369693455::paginate($this->perPage);

        return view('livewire.generated.test-car369693455.index', compact('items'));
    }

            public function delete(TestCar369693455 $testCar369693455): void
        {
                                                if ($testCar369693455->testCar21880061574s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar369693455->delete();
        }
    }
