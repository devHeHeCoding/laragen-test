<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar730684024;

use App\Models\TestCar730684024;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar730684024 $testCar730684024;

    public function render()
    {
        $items = TestCar730684024::paginate($this->perPage);

        return view('livewire.test-car730684024.index', compact('items'));
    }

            public function delete(TestCar730684024 $testCar730684024): void
        {
                                                if ($testCar730684024->testCar22089853956s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar730684024->delete();
        }
    }
