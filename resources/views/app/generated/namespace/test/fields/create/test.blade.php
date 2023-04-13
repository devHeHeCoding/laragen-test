<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car194840499.fields.test') }}" for="7" :errors="$errors->get('testCar194840499.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car194840499.fields.test')}}" name="testCar194840499.test" id="7" wire:model.defer="testCar194840499.test" />
</x-laragen::input.group>