<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1269619307;

use App\Models\TestCar1269619307;
                use App\Models\TestCar21666624633;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1269619307 $testCar1269619307;

                                            
    public function mount(TestCar1269619307 $testCar1269619307)
    {
        $this->testCar1269619307 = $testCar1269619307;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1269619307->save();

        return redirect()->route('laragen.admin.test_car1269619307s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1269619307.test' => [
                                                                                                                ],
                                                'testCar1269619307.laury_spinka_id' => [
                                                                                                                ],
                    ];
    }
}
