<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car592950477.fields.test') }}" for="7" :errors="$errors->get('testCar592950477.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car592950477.fields.test')}}" name="testCar592950477.test" id="7" wire:model.defer="testCar592950477.test" />
</x-laragen::input.group>