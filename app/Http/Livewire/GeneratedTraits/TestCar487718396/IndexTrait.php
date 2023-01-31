<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar487718396;

use App\Models\TestCar487718396;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar487718396 $testCar487718396;

    public function render()
    {
        $items = TestCar487718396::paginate($this->perPage);

        return view('livewire.test-car487718396.index', compact('items'));
    }

            public function delete(TestCar487718396 $testCar487718396): void
        {
                                                if ($testCar487718396->testCar21404904703s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar487718396->delete();
        }
    }
