<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1576106383;

use App\Models\TestCar1576106383;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar1576106383 $testCar1576106383;

    public function render()
    {
        $items = TestCar1576106383::paginate($this->perPage);

        return view('livewire.test-car1576106383.index', compact('items'));
    }

            public function delete(TestCar1576106383 $testCar1576106383): void
        {
                                                if ($testCar1576106383->testCar21288609184s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar1576106383->delete();
        }
    }
