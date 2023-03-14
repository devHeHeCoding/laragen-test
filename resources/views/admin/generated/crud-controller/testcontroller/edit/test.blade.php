<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car876793704.fields.test') }}" for="7" :errors="$errors->get('testCar876793704.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car876793704.fields.test')}}" name="testCar876793704.test" id="7" wire:model.defer="testCar876793704.test" />
</x-laragen::input.group>