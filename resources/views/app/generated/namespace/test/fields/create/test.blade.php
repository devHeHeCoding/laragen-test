<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car671360761.fields.test') }}" for="7" :errors="$errors->get('testCar671360761.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car671360761.fields.test')}}" name="testCar671360761.test" id="7" wire:model.defer="testCar671360761.test" />
</x-laragen::input.group>