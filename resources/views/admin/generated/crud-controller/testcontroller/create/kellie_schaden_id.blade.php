<div class="form-group {{$errors->has('testCar1095306803.kellie_schaden_id') ? 'error' : ''}}">
    <label for="3">
        {{ trans('cruds.test-car1095306803.fields.kellie_schaden_id') }}        <input type="text"
               id="3"
               name="testCar1095306803.kellie_schaden_id"
               class="form-control"
               placeholder="kellie_schaden_id"
               wire:model.defer="testCar1095306803.kellie_schaden_id"
        >
        <span class="error-message">
            {{$errors->first('testCar1095306803.kellie_schaden_id')}}        </span>
    </label>
</div>
