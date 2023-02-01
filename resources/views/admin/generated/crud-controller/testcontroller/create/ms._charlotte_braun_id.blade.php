<div class="form-group {{$errors->has('testCar1898839695.ms._charlotte_braun_id') ? 'error' : ''}}">
    <label for="3">
        {{ trans('cruds.test-car1898839695.fields.ms._charlotte_braun_id') }}        <input type="text"
               id="3"
               name="testCar1898839695.ms._charlotte_braun_id"
               class="form-control"
               placeholder="ms._charlotte_braun_id"
               wire:model.defer="testCar1898839695.ms._charlotte_braun_id"
        >
        <span class="error-message">
            {{$errors->first('testCar1898839695.ms._charlotte_braun_id')}}        </span>
    </label>
</div>
