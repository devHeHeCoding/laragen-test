<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar242859405;

use App\Models\TestCar242859405;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar242859405 $testCar242859405;

    
    public function mount(TestCar242859405 $testCar242859405)
    {
        $this->testCar242859405 = $testCar242859405;
                                }

    public function render()
    {
        return view('livewire.generated.test-car242859405.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar242859405->save();

        return redirect()->route('laragen.admin.test_car242859405s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar242859405.test' => [
                                                                                ],
                    ];
    }
}
