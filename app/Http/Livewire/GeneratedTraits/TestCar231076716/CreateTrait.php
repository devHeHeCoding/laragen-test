<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar231076716;

use App\Models\TestCar231076716;
                    use App\Models\TestCar21802586333;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar231076716 $testCar231076716;

                                            
    public function mount(TestCar231076716 $testCar231076716)
    {
        $this->testCar231076716 = $testCar231076716;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar231076716->save();

        return redirect()->route('laragen.admin.test_car231076716s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar231076716.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar231076716.colby_kovacek_i_v_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
