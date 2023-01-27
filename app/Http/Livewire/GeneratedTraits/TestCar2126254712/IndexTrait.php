<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2126254712;

use App\Models\TestCar2126254712;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar2126254712 $testCar2126254712;

    public function render()
    {
        $items = TestCar2126254712::paginate($this->perPage);

        return view('livewire.test-car2126254712.index', compact('items'));
    }

            public function delete(TestCar2126254712 $testCar2126254712): void
        {
                                                if ($testCar2126254712->testCar21415645596s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar2126254712->delete();
        }
    }
