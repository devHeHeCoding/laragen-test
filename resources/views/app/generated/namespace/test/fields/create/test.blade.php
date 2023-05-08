<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car674423168.fields.test') }}" for="7" :errors="$errors->get('testCar674423168.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car674423168.fields.test')}}" name="testCar674423168.test" id="7" wire:model.defer="testCar674423168.test" />
</x-laragen::input.group>