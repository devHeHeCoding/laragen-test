<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar551476458;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait EditTrait
{
    public TestCar551476458 $testCar551476458;

    
    public function mount(TestCar551476458 $testCar551476458)
    {
        $this->testCar551476458 = $testCar551476458;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar551476458->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar551476458.test' => [
                                                                                ],
                    ];
    }
}
