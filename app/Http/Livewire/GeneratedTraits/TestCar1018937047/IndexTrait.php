<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1018937047;

use App\Models\TestCar1018937047;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1018937047 $testCar1018937047;

    public function render()
    {
        $items = TestCar1018937047::paginate($this->perPage);

        return view('livewire.generated.test-car1018937047.index', compact('items'));
    }

            public function delete(TestCar1018937047 $testCar1018937047): void
        {
                                                if ($testCar1018937047->testCar21035955028s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1018937047->delete();
        }
    }
