<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar236489217;

use App\Models\TestCar236489217;
                use App\Models\TestCar21087509902;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar236489217 $testCar236489217;

                                            
    public function mount(TestCar236489217 $testCar236489217)
    {
        $this->testCar236489217 = $testCar236489217;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar236489217->save();

        return redirect()->route('laragen.admin.test_car236489217s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar236489217.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar21087509902s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
