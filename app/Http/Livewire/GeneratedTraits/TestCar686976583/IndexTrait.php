<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar686976583;

use App\Models\TestCar686976583;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar686976583 $testCar686976583;

    public function render()
    {
        $items = TestCar686976583::paginate($this->perPage);

        return view('livewire.test-car686976583.index', compact('items'));
    }

            public function delete(TestCar686976583 $testCar686976583): void
        {
                                                if ($testCar686976583->testCar21396107844s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar686976583->delete();
        }
    }
