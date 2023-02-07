<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar672712618;

use App\Models\TestCar672712618;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar672712618 $testCar672712618;

    public function render()
    {
        $items = TestCar672712618::paginate($this->perPage);

        return view('livewire.generate.test-car672712618.index', compact('items'));
    }

            public function delete(TestCar672712618 $testCar672712618): void
        {
                                                if ($testCar672712618->testCar21405958520s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar672712618->delete();
        }
    }
