<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1877131006;

use App\Models\TestCar1877131006;
                use App\Models\TestCar21226692621;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1877131006 $testCar1877131006;

                                            
    public function mount(TestCar1877131006 $testCar1877131006)
    {
        $this->testCar1877131006 = $testCar1877131006;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1877131006->save();

        return redirect()->route('laragen.admin.test_car1877131006s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1877131006.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1877131006.deion_howell_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
