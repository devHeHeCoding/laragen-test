<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1533430550;

use App\Models\TestCar1533430550;
                use App\Models\TestCar21549000951;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar21549000951s;
            
    public TestCar1533430550 $testCar1533430550;

    public function mount(TestCar1533430550 $testCar1533430550)
    {
        $this->testCar1533430550 = $testCar1533430550;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1533430550->save();

        return redirect()->route('laragentestCar1533430550s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1533430550.test' => [
                                                                                                                ],
                                                'testCar1533430550.makenna_bartoletti_id' => [
                                                                                                                ],
                    ];
    }
}
