<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar686976583;

use App\Models\TestCar686976583;
                use App\Models\TestCar21396107844;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar686976583 $testCar686976583;

                                            
    public function mount(TestCar686976583 $testCar686976583)
    {
        $this->testCar686976583 = $testCar686976583;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar686976583->save();

        return redirect()->route('laragen.admin.test_car686976583s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar686976583.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar686976583.alexanne_franecki_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
