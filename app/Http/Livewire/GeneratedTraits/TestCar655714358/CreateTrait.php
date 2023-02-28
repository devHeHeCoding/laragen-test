<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar655714358;

use App\Models\TestCar655714358;
                    use App\Models\TestCar2977466008;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar655714358 $testCar655714358;

                                            
    public function mount(TestCar655714358 $testCar655714358)
    {
        $this->testCar655714358 = $testCar655714358;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car655714358.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar655714358->save();

        return redirect()->route('laragen.admin.test_car655714358s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar655714358.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar655714358.deja_macejkovic_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
