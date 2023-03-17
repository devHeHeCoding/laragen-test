<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1215803700;

use App\Models\TestCar1215803700;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1215803700 $testCar1215803700;

    
    public function mount(TestCar1215803700 $testCar1215803700)
    {
        $this->testCar1215803700 = $testCar1215803700;
            }

    public function render()
    {
        return view('livewire.generated.test-car1215803700.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1215803700->save();

        return redirect()->route('laragen.admin.test_car1215803700s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1215803700.test' => [
                                                                                ],
                    ];
    }
}
