<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car47779518.fields.test') }}" for="7" :errors="$errors->get('testCar47779518.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car47779518.fields.test')}}" name="testCar47779518.test" id="7" wire:model.defer="testCar47779518.test" />
</x-laragen::input.group>