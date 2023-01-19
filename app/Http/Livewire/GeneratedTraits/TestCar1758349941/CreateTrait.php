<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1758349941;

use App\Models\TestCar1758349941;
                use App\Models\TestCar21992267901;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1758349941 $testCar1758349941;

                                            
    public function mount(TestCar1758349941 $testCar1758349941)
    {
        $this->testCar1758349941 = $testCar1758349941;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1758349941->save();

        return redirect()->route('laragen.admin.test_car1758349941s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1758349941.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1758349941.godfrey_rempel_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
