<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar930361748;

use App\Models\TestCar930361748;
                use App\Models\TestCar21649564040;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar930361748 $testCar930361748;

                                            
    public function mount(TestCar930361748 $testCar930361748)
    {
        $this->testCar930361748 = $testCar930361748;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar930361748->save();

        return redirect()->route('laragen.admin.test_car930361748s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar930361748.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar21649564040s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
