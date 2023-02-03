<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar276494793;

use App\Models\TestCar276494793;

trait IndexTrait
{
    public int $perPage = 10;

    public TestCar276494793 $testCar276494793;

    public function render()
    {
        $items = TestCar276494793::paginate($this->perPage);

        return view('livewire.test-car276494793.index', compact('items'));
    }

            public function delete(TestCar276494793 $testCar276494793): void
        {
                                                if ($testCar276494793->testCar21687556601s()->count() > 0) {
                        $this->emit('deleteNotAllowed');
                        return;
                    }
                            
            $testCar276494793->delete();
        }
    }
