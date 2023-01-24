<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar556394034;

use App\Models\TestCar556394034;
                use App\Models\TestCar21818832869;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar556394034 $testCar556394034;

                                            
    public function mount(TestCar556394034 $testCar556394034)
    {
        $this->testCar556394034 = $testCar556394034;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar556394034->save();

        return redirect()->route('laragen.admin.test_car556394034s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar556394034.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar556394034.prof._weston_conn_jr._id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
