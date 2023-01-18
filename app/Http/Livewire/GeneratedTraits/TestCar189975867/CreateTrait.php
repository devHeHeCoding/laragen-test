<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar189975867;

use App\Models\TestCar189975867;
                use App\Models\TestCar21256990802;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar189975867 $testCar189975867;

                                    public Collection $testCar21256990802s;
            
    public function mount(TestCar189975867 $testCar189975867)
    {
        $this->testCar189975867 = $testCar189975867;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar189975867->save();

        return redirect()->route('laragen.admin.test_car189975867s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar189975867.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar189975867.helen_lakin_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
