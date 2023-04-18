<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar2136240971;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Edit`
*/
trait EditTrait
{
    public TestCar2136240971 $testCar2136240971;

    
    public function mount(TestCar2136240971 $testCar2136240971)
    {
        $this->testCar2136240971 = $testCar2136240971;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar2136240971->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2136240971.test' => [
                                                                                ],
                    ];
    }
}
