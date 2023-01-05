<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar99188925;

use App\Models\TestCar99188925;
                use App\Models\TestCar2691896388;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar99188925 $testCar99188925;

    public function mount(TestCar99188925 $testCar99188925)
    {
        $this->testCar99188925 = $testCar99188925;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar99188925->save();

        return redirect()->route('admin.testCar99188925.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar99188925.test' => [
                                                                                                                ],
                                                'testCar99188925.carolanne_dickens_id' => [
                                                                                                                ],
                    ];
    }
}
