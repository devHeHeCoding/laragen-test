<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar730684024;

use App\Models\TestCar730684024;
                use App\Models\TestCar22089853956;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar730684024 $testCar730684024;

                                            
    public function mount(TestCar730684024 $testCar730684024)
    {
        $this->testCar730684024 = $testCar730684024;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar730684024->save();

        return redirect()->route('laragen.admin.test_car730684024s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar730684024.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar730684024.miss_florine_wintheiser_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
