<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1793038448;

use App\Models\TestCar1793038448;
                use App\Models\TestCar2663105981;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1793038448 $testCar1793038448;

                                            
    public function mount(TestCar1793038448 $testCar1793038448)
    {
        $this->testCar1793038448 = $testCar1793038448;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1793038448->save();

        return redirect()->route('laragen.admin.test_car1793038448s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1793038448.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2663105981s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
