<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar337160262;

use App\Models\TestCar337160262;
                use App\Models\TestCar2351372788;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar337160262 $testCar337160262;

                                    public Collection $testCar2351372788s;
            
    public function mount(TestCar337160262 $testCar337160262)
    {
        $this->testCar337160262 = $testCar337160262;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar337160262->save();

        return redirect()->route('laragen.admin.test_car337160262s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar337160262.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar337160262.summer_doyle_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
