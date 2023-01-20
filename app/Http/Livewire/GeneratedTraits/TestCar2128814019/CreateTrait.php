<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2128814019;

use App\Models\TestCar2128814019;
                use App\Models\TestCar21711982605;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2128814019 $testCar2128814019;

                                            
    public function mount(TestCar2128814019 $testCar2128814019)
    {
        $this->testCar2128814019 = $testCar2128814019;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar2128814019->save();

        return redirect()->route('laragen.admin.test_car2128814019s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar2128814019.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2128814019.zelda_hodkiewicz_d_v_m_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
