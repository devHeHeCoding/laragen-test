<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1424180971;

use App\Models\TestCar1424180971;
                use App\Models\TestCar2211599076;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1424180971 $testCar1424180971;

                                            
    public function mount(TestCar1424180971 $testCar1424180971)
    {
        $this->testCar1424180971 = $testCar1424180971;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1424180971->save();

        return redirect()->route('laragen.admin.test_car1424180971s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1424180971.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1424180971.gregoria_larkin_ph_d_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
