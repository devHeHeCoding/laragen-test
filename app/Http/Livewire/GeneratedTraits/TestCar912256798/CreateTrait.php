<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar912256798;

use App\Models\TestCar912256798;
                use App\Models\TestCar21659889129;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar912256798 $testCar912256798;

                                            
    public function mount(TestCar912256798 $testCar912256798)
    {
        $this->testCar912256798 = $testCar912256798;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar912256798->save();

        return redirect()->route('laragen.admin.test_car912256798s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar912256798.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar912256798.prof._josiah_bartell_i_v_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
