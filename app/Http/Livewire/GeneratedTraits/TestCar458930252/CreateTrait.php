<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar458930252;

use App\Models\TestCar458930252;
                use App\Models\TestCar2143583493;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar458930252 $testCar458930252;

                                            
    public function mount(TestCar458930252 $testCar458930252)
    {
        $this->testCar458930252 = $testCar458930252;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar458930252->save();

        return redirect()->route('laragen.admin.test_car458930252s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar458930252.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar458930252.mr._joshua_ebert_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
