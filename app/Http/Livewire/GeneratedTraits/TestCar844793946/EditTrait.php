<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar844793946;

use App\Models\TestCar844793946;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar844793946 $testCar844793946;

                        
    public function mount(TestCar844793946 $testCar844793946)
    {
        $this->testCar844793946 = $testCar844793946;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar844793946->save();

        return redirect()->route('laragen.admin.test_car844793946s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar844793946.test' => [
                                                                                                                ],
                    ];
    }
}
