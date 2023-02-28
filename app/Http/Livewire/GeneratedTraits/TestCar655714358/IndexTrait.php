<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar655714358;

use App\Models\TestCar655714358;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar655714358 $testCar655714358;

    public function render()
    {
        $items = TestCar655714358::paginate($this->perPage);

        return view('livewire.generated.test-car655714358.index', compact('items'));
    }

            public function delete(TestCar655714358 $testCar655714358): void
        {
                                                if ($testCar655714358->testCar2977466008s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar655714358->delete();
        }
    }
