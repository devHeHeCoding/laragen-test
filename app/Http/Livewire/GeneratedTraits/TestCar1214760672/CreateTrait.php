<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1214760672;

use App\Models\TestCar1214760672;
                use App\Models\TestCar21502523278;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1214760672 $testCar1214760672;

                                            
    public function mount(TestCar1214760672 $testCar1214760672)
    {
        $this->testCar1214760672 = $testCar1214760672;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1214760672->save();

        return redirect()->route('laragen.admin.test_car1214760672s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1214760672.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1214760672.aric_koepp_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
