<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1153574605;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait EditTrait
{
    public TestCar1153574605 $testCar1153574605;

    
    public function mount(TestCar1153574605 $testCar1153574605)
    {
        $this->testCar1153574605 = $testCar1153574605;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1153574605->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1153574605.test' => [
                                                                                ],
                    ];
    }
}
