<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car593990579.fields.test') }}" for="7" :errors="$errors->get('testCar593990579.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car593990579.fields.test')}}" name="testCar593990579.test" id="7" wire:model.defer="testCar593990579.test" />
</x-laragen::input.group>