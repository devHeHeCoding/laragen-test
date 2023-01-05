<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2097014541;

use App\Models\TestCar2097014541;
                use App\Models\TestCar2958207552;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar2097014541 $testCar2097014541;

    public function mount(TestCar2097014541 $testCar2097014541)
    {
        $this->testCar2097014541 = $testCar2097014541;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar2097014541->save();

        return redirect()->route('admin.testCar2097014541.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar2097014541.test' => [
                                                                                                                ],
                                                'testCar2097014541.dr._sedrick_gerhold_id' => [
                                                                                                                ],
                    ];
    }
}
