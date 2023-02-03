<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1083031205;

use App\Models\TestCar1083031205;
                use App\Models\TestCar21768873857;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1083031205 $testCar1083031205;

                                            
    public function mount(TestCar1083031205 $testCar1083031205)
    {
        $this->testCar1083031205 = $testCar1083031205;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1083031205->save();

        return redirect()->route('laragen.admin.test_car1083031205s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1083031205.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1083031205.coy_wilderman_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
