<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar614311431;

use App\Models\TestCar614311431;
                use App\Models\TestCar21246750806;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar614311431 $testCar614311431;

    public function mount(TestCar614311431 $testCar614311431)
    {
        $this->testCar614311431 = $testCar614311431;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar614311431->save();

        return redirect()->route('admin.testCar614311431.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar614311431.test' => [
                                                                                                                ],
                                                'testCar614311431.marilou_greenfelder_id' => [
                                                                                                                ],
                    ];
    }
}
