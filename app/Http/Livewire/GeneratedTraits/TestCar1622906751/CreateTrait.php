<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1622906751;

use App\Models\TestCar1622906751;
                use App\Models\TestCar2982628438;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1622906751 $testCar1622906751;

                                            
    public function mount(TestCar1622906751 $testCar1622906751)
    {
        $this->testCar1622906751 = $testCar1622906751;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1622906751->save();

        return redirect()->route('laragen.admin.test_car1622906751s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1622906751.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2982628438s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
