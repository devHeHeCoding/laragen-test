<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar844793946;

use App\Models\TestCar844793946;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar844793946 $testCar844793946;

    public function render()
    {
        $items = TestCar844793946::paginate($this->perPage);

        return view('livewire.test-car844793946.index', compact('items'));
    }

            public function delete(TestCar844793946 $testCar844793946): void
        {
                                                if ($testCar844793946->testCar2345305249s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar844793946->delete();
        }
    }
