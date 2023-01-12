<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2081218688;

use App\Models\TestCar2081218688;
                use App\Models\TestCar2342199166;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar2081218688 $testCar2081218688;

    public function mount(TestCar2081218688 $testCar2081218688)
    {
        $this->testCar2081218688 = $testCar2081218688;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar2081218688->save();

        return redirect()->route('admin.testCar2081218688.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar2081218688.test' => [
                                                                                                                ],
                                                'testCar2081218688.lucinda_reynolds_id' => [
                                                                                                                ],
                    ];
    }
}
