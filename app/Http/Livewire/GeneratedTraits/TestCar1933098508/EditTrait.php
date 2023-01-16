<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1933098508;

use App\Models\TestCar1933098508;
                use App\Models\TestCar2925814399;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2925814399s;
            
    public TestCar1933098508 $testCar1933098508;

    public function mount(TestCar1933098508 $testCar1933098508)
    {
        $this->testCar1933098508 = $testCar1933098508;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1933098508->save();

        return redirect()->route('laragentestCar1933098508.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1933098508.test' => [
                                                                                                                ],
                                                'testCar1933098508.milo_wiegand_id' => [
                                                                                                                ],
                    ];
    }
}
