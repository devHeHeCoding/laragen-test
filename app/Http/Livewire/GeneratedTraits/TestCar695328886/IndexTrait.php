<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar695328886;

use App\Models\TestCar695328886;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar695328886 $testCar695328886;

    public function render()
    {
        $items = TestCar695328886::paginate($this->perPage);

        return view('livewire.test-car695328886.index', compact('items'));
    }

            public function delete(TestCar695328886 $testCar695328886): void
        {
                                                if ($testCar695328886->testCar21245237984s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar695328886->delete();
        }
    }
