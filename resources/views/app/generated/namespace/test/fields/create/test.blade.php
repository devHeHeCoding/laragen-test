<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car739457300.fields.test') }}" for="7" :errors="$errors->get('testCar739457300.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car739457300.fields.test')}}" name="testCar739457300.test" id="7" wire:model.defer="testCar739457300.test" />
</x-laragen::input.group>