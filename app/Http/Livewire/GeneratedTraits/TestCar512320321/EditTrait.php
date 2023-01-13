<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar512320321;

use App\Models\TestCar512320321;
                use App\Models\TestCar2631586454;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar512320321 $testCar512320321;

    public function mount(TestCar512320321 $testCar512320321)
    {
        $this->testCar512320321 = $testCar512320321;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar512320321->save();

        return redirect()->route('admin.testCar512320321.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar512320321.test' => [
                                                                                                                ],
                                                'testCar512320321.albina_gleason_i_i_id' => [
                                                                                                                ],
                    ];
    }
}
