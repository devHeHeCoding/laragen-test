<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1354129242;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait EditTrait
{
    public TestCar1354129242 $testCar1354129242;

    
    public function mount(TestCar1354129242 $testCar1354129242)
    {
        $this->testCar1354129242 = $testCar1354129242;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1354129242->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1354129242.test' => [
                                                                                ],
                    ];
    }
}
