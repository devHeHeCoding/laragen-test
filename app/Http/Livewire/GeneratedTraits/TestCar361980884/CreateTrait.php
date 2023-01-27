<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar361980884;

use App\Models\TestCar361980884;
                use App\Models\TestCar21832519944;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar361980884 $testCar361980884;

                                            
    public function mount(TestCar361980884 $testCar361980884)
    {
        $this->testCar361980884 = $testCar361980884;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar361980884->save();

        return redirect()->route('laragen.admin.test_car361980884s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar361980884.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar21832519944s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
