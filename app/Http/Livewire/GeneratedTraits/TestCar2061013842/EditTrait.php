<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2061013842;

use App\Models\TestCar2061013842;
                use App\Models\TestCar2696937327;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2696937327s;
            
    public TestCar2061013842 $testCar2061013842;

    public function mount(TestCar2061013842 $testCar2061013842)
    {
        $this->testCar2061013842 = $testCar2061013842;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar2061013842->save();

        return redirect()->route('laragentestCar2061013842.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar2061013842.test' => [
                                                                                                                ],
                                                'testCar2061013842.gregoria_howe_id' => [
                                                                                                                ],
                    ];
    }
}
