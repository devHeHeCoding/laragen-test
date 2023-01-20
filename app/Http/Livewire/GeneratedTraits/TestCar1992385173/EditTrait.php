<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1992385173;

use App\Models\TestCar1992385173;
                use App\Models\TestCar21734315086;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1992385173 $testCar1992385173;

                                            
    public function mount(TestCar1992385173 $testCar1992385173)
    {
        $this->testCar1992385173 = $testCar1992385173;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1992385173->save();

        return redirect()->route('laragen.admin.test_car1992385173s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1992385173.test' => [
                                                                                                                ],
                                                'testCar1992385173.alfonzo_schulist_d_v_m_id' => [
                                                                                                                ],
                    ];
    }
}
