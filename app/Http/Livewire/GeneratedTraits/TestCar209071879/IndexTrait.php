<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar209071879;

use App\Models\TestCar209071879;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar209071879 $testCar209071879;

    public function render()
    {
        $items = TestCar209071879::paginate($this->perPage);

        return view('livewire.test-car209071879.index', compact('items'));
    }

            public function delete(TestCar209071879 $testCar209071879): void
        {
                                                if ($testCar209071879->testCar21798349253s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar209071879->delete();
        }
    }
