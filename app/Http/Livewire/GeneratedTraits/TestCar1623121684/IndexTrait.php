<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1623121684;

use App\Models\TestCar1623121684;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1623121684 $testCar1623121684;

    public function render()
    {
        $items = TestCar1623121684::paginate($this->perPage);

        return view('livewire.test-car1623121684.index', compact('items'));
    }

            public function delete(TestCar1623121684 $testCar1623121684): void
        {
                                                if ($testCar1623121684->has_many_relation()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar1623121684->delete();
        }
    }
