<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car2048076435.fields.test') }}        <input type="text"
               id="7"
               name="testCar2048076435.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar2048076435.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
