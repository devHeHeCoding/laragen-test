<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1841028066;

use App\Models\TestCar1841028066;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1841028066 $testCar1841028066;

    public function render()
    {
        $items = TestCar1841028066::paginate($this->perPage);

        return view('livewire.generated.test-car1841028066.index', compact('items'));
    }

            public function delete(TestCar1841028066 $testCar1841028066): void
        {
                                                if ($testCar1841028066->testCar275641337s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1841028066->delete();
        }
    }
