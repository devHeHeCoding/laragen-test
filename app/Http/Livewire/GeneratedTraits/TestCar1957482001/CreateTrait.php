<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1957482001;

use App\Models\TestCar1957482001;
                use App\Models\TestCar21358620237;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1957482001 $testCar1957482001;

                                            
    public function mount(TestCar1957482001 $testCar1957482001)
    {
        $this->testCar1957482001 = $testCar1957482001;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1957482001->save();

        return redirect()->route('laragen.admin.test_car1957482001s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1957482001.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1957482001.lindsay_kovacek_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
