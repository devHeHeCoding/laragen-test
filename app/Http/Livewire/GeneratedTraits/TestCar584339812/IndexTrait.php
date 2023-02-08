<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar584339812;

use App\Models\TestCar584339812;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar584339812 $testCar584339812;

    public function render()
    {
        $items = TestCar584339812::paginate($this->perPage);

        return view('livewire.generated.test-car584339812.index', compact('items'));
    }

            public function delete(TestCar584339812 $testCar584339812): void
        {
                                                if ($testCar584339812->testCar2254669533s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar584339812->delete();
        }
    }
