<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1750227684;

use App\Models\TestCar1750227684;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1750227684 $testCar1750227684;

    public function render()
    {
        $items = TestCar1750227684::paginate($this->perPage);

        return view('livewire.generated.test-car1750227684.index', compact('items'));
    }

            public function delete(TestCar1750227684 $testCar1750227684): void
        {
                                                if ($testCar1750227684->testCar21526338626s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1750227684->delete();
        }
    }
