<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar818681802;

use App\Models\TestCar818681802;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar818681802 $testCar818681802;

                        
    public function mount(TestCar818681802 $testCar818681802)
    {
        $this->testCar818681802 = $testCar818681802;
                                }

    public function render()
    {
        return view('livewire.generated.test-car818681802.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar818681802->save();

        return redirect()->route('laragen.admin.test_car818681802s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar818681802.test' => [
                                                                                ],
                    ];
    }
}
