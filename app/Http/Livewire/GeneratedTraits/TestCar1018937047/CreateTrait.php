<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1018937047;

use App\Models\TestCar1018937047;
use App\Models\TestCar21035955028;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1018937047 $testCar1018937047;

                        
    public function mount(TestCar1018937047 $testCar1018937047)
    {
        $this->testCar1018937047 = $testCar1018937047;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1018937047.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1018937047->save();

        return redirect()->route('laragen.admin.test_car1018937047s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1018937047.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1018937047.ms._eudora_reinger_ph_d_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
