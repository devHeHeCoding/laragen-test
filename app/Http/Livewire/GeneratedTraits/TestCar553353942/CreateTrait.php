<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar553353942;

use App\Models\TestCar553353942;
                use App\Models\TestCar21305962671;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar553353942 $testCar553353942;

                                    public Collection $testCar21305962671s;
            
    public function mount(TestCar553353942 $testCar553353942)
    {
        $this->testCar553353942 = $testCar553353942;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar553353942->save();

        return redirect()->route('laragentestCar553353942s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar553353942.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar553353942.silas_gislason_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
