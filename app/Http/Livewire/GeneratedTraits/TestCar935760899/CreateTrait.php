<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar935760899;

use App\Models\TestCar935760899;
                use App\Models\TestCar22006016104;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar935760899 $testCar935760899;

                                            
    public function mount(TestCar935760899 $testCar935760899)
    {
        $this->testCar935760899 = $testCar935760899;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar935760899->save();

        return redirect()->route('laragen.admin.test_car935760899s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar935760899.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar935760899.prof._edd_renner_sr._id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
