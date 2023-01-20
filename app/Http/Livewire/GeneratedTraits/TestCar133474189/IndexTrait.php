<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar133474189;

use App\Models\TestCar133474189;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar133474189 $testCar133474189;

    public function render()
    {
        $items = TestCar133474189::paginate($this->perPage);

        return view('livewire.test-car133474189.index', compact('items'));
    }

            public function delete(TestCar133474189 $testCar133474189): void
        {
                                                if ($testCar133474189->testCar2252891703s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testcar133474189->delete();
        }
    }
