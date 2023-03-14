<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car821706938.fields.test') }}" for="7" :errors="$errors->get('testCar821706938.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car821706938.fields.test')}}" name="testCar821706938.test" id="7" wire:model.defer="testCar821706938.test" />
</x-laragen::input.group>