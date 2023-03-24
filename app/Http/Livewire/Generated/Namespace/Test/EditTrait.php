<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar207063216;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait EditTrait
{
    public TestCar207063216 $testCar207063216;

    
    public function mount(TestCar207063216 $testCar207063216)
    {
        $this->testCar207063216 = $testCar207063216;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar207063216->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar207063216.test' => [
                                                                                ],
                    ];
    }
}
