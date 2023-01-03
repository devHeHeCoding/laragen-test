<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1064489173;

use App\Models\TestCar1064489173;
                use App\Models\TestCar21827447861;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1064489173 $testCar1064489173;

    public function mount(TestCar1064489173 $testCar1064489173)
    {
        $this->testCar1064489173 = $testCar1064489173;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1064489173->save();

        return redirect()->route('admin.testCar1064489173.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1064489173.test' => [
                                                                                                                ],
                                                'testCar1064489173.annabell_lemke_id' => [
                                                                                                                ],
                    ];
    }
}
