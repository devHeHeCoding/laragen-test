<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar911040946;

use App\Models\TestCar911040946;
                use App\Models\TestCar21082757691;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar911040946 $testCar911040946;

                                            
    public function mount(TestCar911040946 $testCar911040946)
    {
        $this->testCar911040946 = $testCar911040946;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar911040946->save();

        return redirect()->route('laragen.admin.test_car911040946s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar911040946.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar911040946.ali_wiegand_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
