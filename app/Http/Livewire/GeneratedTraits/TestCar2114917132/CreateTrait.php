<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2114917132;

use App\Models\TestCar2114917132;
use App\Models\TestCar21522056515;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2114917132 $testCar2114917132;

                        
    public function mount(TestCar2114917132 $testCar2114917132)
    {
        $this->testCar2114917132 = $testCar2114917132;
                                }

    public function render()
    {
        return view('livewire.generated.test-car2114917132.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar2114917132->save();

        return redirect()->route('laragen.admin.test_car2114917132s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2114917132.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar2114917132.murl_quitzon_sr._id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
