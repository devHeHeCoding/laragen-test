<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar719684078;

use App\Models\TestCar719684078;
                use App\Models\TestCar21611968117;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar719684078 $testCar719684078;

    public function mount(TestCar719684078 $testCar719684078)
    {
        $this->testCar719684078 = $testCar719684078;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar719684078->save();

        return redirect()->route('admin.testCar719684078.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar719684078.test' => [
                                                                                                                ],
                                                'testCar719684078.frankie_terry_id' => [
                                                                                                                ],
                    ];
    }
}
