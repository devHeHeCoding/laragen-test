<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar133474189;

use App\Models\TestCar133474189;
                use App\Models\TestCar2252891703;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar133474189 $testCar133474189;

                                            
    public function mount(TestCar133474189 $testCar133474189)
    {
        $this->testCar133474189 = $testCar133474189;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar133474189->save();

        return redirect()->route('laragen.admin.test_car133474189s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar133474189.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar133474189.abby_hermann_i_v_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
