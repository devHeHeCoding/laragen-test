<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar209071879;

use App\Models\TestCar209071879;
                use App\Models\TestCar21798349253;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar209071879 $testCar209071879;

                                            
    public function mount(TestCar209071879 $testCar209071879)
    {
        $this->testCar209071879 = $testCar209071879;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar209071879->save();

        return redirect()->route('laragen.admin.test_car209071879s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar209071879.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar21798349253s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
