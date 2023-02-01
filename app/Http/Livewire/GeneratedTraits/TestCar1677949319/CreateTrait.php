<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1677949319;

use App\Models\TestCar1677949319;
                use App\Models\TestCar2597086083;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1677949319 $testCar1677949319;

                                            
    public function mount(TestCar1677949319 $testCar1677949319)
    {
        $this->testCar1677949319 = $testCar1677949319;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1677949319->save();

        return redirect()->route('laragen.admin.test_car1677949319s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1677949319.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1677949319.calista_gerhold_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
