<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar210297364;

use App\Models\TestCar210297364;
                use App\Models\TestCar21063085357;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar21063085357s;
            
    public TestCar210297364 $testCar210297364;

    public function mount(TestCar210297364 $testCar210297364)
    {
        $this->testCar210297364 = $testCar210297364;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar210297364->save();

        return redirect()->route('laragentestCar210297364.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar210297364.test' => [
                                                                                                                ],
                                                'testCar210297364.gustave_wilkinson_id' => [
                                                                                                                ],
                    ];
    }
}
