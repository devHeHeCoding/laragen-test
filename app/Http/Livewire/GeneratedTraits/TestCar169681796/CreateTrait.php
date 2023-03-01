<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar169681796;

use App\Models\TestCar169681796;
                    use App\Models\TestCar21325972417;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar169681796 $testCar169681796;

                                            
    public function mount(TestCar169681796 $testCar169681796)
    {
        $this->testCar169681796 = $testCar169681796;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car169681796.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar169681796->save();

        return redirect()->route('laragen.admin.test_car169681796s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar169681796.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar169681796.roselyn_shanahan_d_v_m_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
