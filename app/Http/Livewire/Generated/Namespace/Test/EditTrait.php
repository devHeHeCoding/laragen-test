<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1751713506;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait EditTrait
{
    public TestCar1751713506 $testCar1751713506;

    
    public function mount(TestCar1751713506 $testCar1751713506)
    {
        $this->testCar1751713506 = $testCar1751713506;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1751713506->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1751713506.test' => [
                                                                                ],
                    ];
    }
}
