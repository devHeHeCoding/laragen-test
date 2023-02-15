<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar11382236;

use App\Models\TestCar11382236;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar11382236 $testCar11382236;

                        
    public function mount(TestCar11382236 $testCar11382236)
    {
        $this->testCar11382236 = $testCar11382236;
                                }

    public function render()
    {
        return view('livewire.generated.test-car11382236.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar11382236->save();

        return redirect()->route('laragen.admin.test_car11382236s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar11382236.test' => [
                                                                                                                ],
                    ];
    }
}
