<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car1835465219.fields.test') }}" for="7" :errors="$errors->get('testCar1835465219.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1835465219.fields.test')}}" name="testCar1835465219.test" id="7" wire:model.defer="testCar1835465219.test" />
</x-laragen::input.group>