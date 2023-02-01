<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar12319279;

use App\Models\TestCar12319279;
                use App\Models\TestCar21796656719;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar12319279 $testCar12319279;

                                            
    public function mount(TestCar12319279 $testCar12319279)
    {
        $this->testCar12319279 = $testCar12319279;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar12319279->save();

        return redirect()->route('laragen.admin.test_car12319279s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar12319279.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar12319279.della_beatty_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
