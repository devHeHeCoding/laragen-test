<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar695328886;

use App\Models\TestCar695328886;
                use App\Models\TestCar21245237984;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar695328886 $testCar695328886;

                                            
    public function mount(TestCar695328886 $testCar695328886)
    {
        $this->testCar695328886 = $testCar695328886;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar695328886->save();

        return redirect()->route('laragen.admin.test_car695328886s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar695328886.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar695328886.richie_stroman_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
