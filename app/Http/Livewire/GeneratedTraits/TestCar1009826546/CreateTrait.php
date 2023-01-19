<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1009826546;

use App\Models\TestCar1009826546;
                use App\Models\TestCar21698598875;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1009826546 $testCar1009826546;

                                            
    public function mount(TestCar1009826546 $testCar1009826546)
    {
        $this->testCar1009826546 = $testCar1009826546;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1009826546->save();

        return redirect()->route('laragen.admin.test_car1009826546s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1009826546.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1009826546.kelsi_gibson_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
