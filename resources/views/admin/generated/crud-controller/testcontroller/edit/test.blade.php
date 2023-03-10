<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car163136273.fields.test') }}" for="7" :errors="$errors->get('testCar163136273.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car163136273.fields.test')}}" name="testCar163136273.test" id="7" wire:model.defer="testCar163136273.test" />
</x-laragen::input.group>