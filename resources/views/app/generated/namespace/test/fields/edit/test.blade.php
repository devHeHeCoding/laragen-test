<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car231510590.fields.test') }}" for="7" :errors="$errors->get('testCar231510590.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car231510590.fields.test')}}" name="testCar231510590.test" id="7" wire:model.defer="testCar231510590.test" />
</x-laragen::input.group>