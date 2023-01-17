<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1693477620;

use App\Models\TestCar1693477620;
                use App\Models\TestCar21473998494;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar21473998494s;
            
    public TestCar1693477620 $testCar1693477620;

    public function mount(TestCar1693477620 $testCar1693477620)
    {
        $this->testCar1693477620 = $testCar1693477620;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1693477620->save();

        return redirect()->route('laragentestCar1693477620s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1693477620.test' => [
                                                                                                                ],
                                                'testCar1693477620.armando_collier_id' => [
                                                                                                                ],
                    ];
    }
}
