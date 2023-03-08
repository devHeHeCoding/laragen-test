<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1584959880;

use App\Models\TestCar1584959880;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1584959880 $testCar1584959880;

                        
    public function mount(TestCar1584959880 $testCar1584959880)
    {
        $this->testCar1584959880 = $testCar1584959880;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1584959880.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1584959880->save();

        return redirect()->route('laragen.admin.test_car1584959880s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1584959880.test' => [
                                                                                ],
                    ];
    }
}
