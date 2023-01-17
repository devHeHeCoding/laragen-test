<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar611654621;

use App\Models\TestCar611654621;
                use App\Models\TestCar248776958;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar611654621 $testCar611654621;

                                    public Collection $testCar248776958s;
            
    public function mount(TestCar611654621 $testCar611654621)
    {
        $this->testCar611654621 = $testCar611654621;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar611654621->save();

        return redirect()->route('laragentestCar611654621s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar611654621.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar611654621.kadin_reinger_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
