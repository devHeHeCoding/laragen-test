<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1792318417;

use App\Models\TestCar1792318417;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1792318417 $testCar1792318417;

                        
    public function mount(TestCar1792318417 $testCar1792318417)
    {
        $this->testCar1792318417 = $testCar1792318417;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar1792318417->save();

        return redirect()->route('laragen.admin.test_car1792318417s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1792318417.test' => [
                                                                                                                ],
                    ];
    }
}
