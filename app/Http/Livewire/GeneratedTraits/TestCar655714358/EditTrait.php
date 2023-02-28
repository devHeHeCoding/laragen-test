<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar655714358;

use App\Models\TestCar655714358;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar655714358 $testCar655714358;

                        
    public function mount(TestCar655714358 $testCar655714358)
    {
        $this->testCar655714358 = $testCar655714358;
                                }

    public function render()
    {
        return view('livewire.generated.test-car655714358.edit');
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
                                                                                                                ],
                    ];
    }
}
