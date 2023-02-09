<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1949212830;

use App\Models\TestCar1949212830;
                    use App\Models\TestCar2580666442;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1949212830 $testCar1949212830;

                                            
    public function mount(TestCar1949212830 $testCar1949212830)
    {
        $this->testCar1949212830 = $testCar1949212830;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1949212830.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1949212830->save();

        return redirect()->route('laragen.admin.test_car1949212830s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1949212830.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1949212830.ms._ashley_gislason_m_d_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
