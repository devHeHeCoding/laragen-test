<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar304007891;

use App\Models\TestCar304007891;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar304007891 $testCar304007891;

    public function render()
    {
        $items = TestCar304007891::paginate($this->perPage);

        return view('livewire.generated.test-car304007891.index', compact('items'));
    }

            public function delete(TestCar304007891 $testCar304007891): void
        {
                                                if ($testCar304007891->testCar21434168180s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar304007891->delete();
        }
    }
