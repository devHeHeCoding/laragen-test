<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar650605431;

use App\Models\TestCar650605431;
                use App\Models\TestCar21358962366;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar650605431 $testCar650605431;

                                            
    public function mount(TestCar650605431 $testCar650605431)
    {
        $this->testCar650605431 = $testCar650605431;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar650605431->save();

        return redirect()->route('laragen.admin.test_car650605431s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar650605431.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar650605431.conner_gibson_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
