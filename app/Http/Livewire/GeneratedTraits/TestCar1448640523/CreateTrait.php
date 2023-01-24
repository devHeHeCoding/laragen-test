<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1448640523;

use App\Models\TestCar1448640523;
                use App\Models\TestCar2554651105;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1448640523 $testCar1448640523;

                                            
    public function mount(TestCar1448640523 $testCar1448640523)
    {
        $this->testCar1448640523 = $testCar1448640523;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1448640523->save();

        return redirect()->route('laragen.admin.test_car1448640523s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1448640523.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1448640523.oswald_breitenberg_i_i_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
