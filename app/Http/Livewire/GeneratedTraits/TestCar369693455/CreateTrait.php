<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar369693455;

use App\Models\TestCar369693455;
use App\Models\TestCar21880061574;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar369693455 $testCar369693455;

                        
    public function mount(TestCar369693455 $testCar369693455)
    {
        $this->testCar369693455 = $testCar369693455;
                                }

    public function render()
    {
        return view('livewire.generated.test-car369693455.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar369693455->save();

        return redirect()->route('laragen.admin.test_car369693455s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar369693455.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar369693455.ms._celestine_hodkiewicz_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
