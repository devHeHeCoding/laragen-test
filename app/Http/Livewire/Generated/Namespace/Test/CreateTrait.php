<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1764321535;
use App\Models\TestCar2282025567;
        use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait CreateTrait
{
    public TestCar1764321535 $testCar1764321535;

                        
    public function mount(TestCar1764321535 $testCar1764321535)
    {
        $this->testCar1764321535 = $testCar1764321535;
                                }

    public function render()
    {
        return view('livewire.generated.namespace.test.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1764321535->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1764321535.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1764321535.enrique_langworth_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
