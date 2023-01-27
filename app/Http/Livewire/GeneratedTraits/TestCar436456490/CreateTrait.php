<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar436456490;

use App\Models\TestCar436456490;
                use App\Models\TestCar21618861998;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar436456490 $testCar436456490;

                                            
    public function mount(TestCar436456490 $testCar436456490)
    {
        $this->testCar436456490 = $testCar436456490;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar436456490->save();

        return redirect()->route('laragen.admin.test_car436456490s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar436456490.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar21618861998s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
