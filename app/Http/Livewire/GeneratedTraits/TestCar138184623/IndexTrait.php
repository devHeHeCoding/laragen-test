<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar138184623;

use App\Models\TestCar138184623;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar138184623 $testCar138184623;

    public function render()
    {
        $items = TestCar138184623::paginate($this->perPage);

        return view('livewire.generated.test-car138184623.index', compact('items'));
    }

            public function delete(TestCar138184623 $testCar138184623): void
        {
                                                if ($testCar138184623->testCar21537690666s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar138184623->delete();
        }
    }
