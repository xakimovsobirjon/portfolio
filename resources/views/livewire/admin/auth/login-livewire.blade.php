<form wire:submit.prevent="login">

    <div class="form-outline mb-4">
        <label class="form-label" for="form3Example3cg">Emailingizni kiriting!</label>
        <input wire:model="email" type="email" id="form3Example3cg" class="form-control form-control-lg"  />
        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" for="form3Example4cg">Parolni kiriting!</label>
        <input wire:model="password" type="password" id="form3Example4cg" class="form-control form-control-lg" />
        <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
    </div>

    <div class="d-flex justify-content-center">
        <button type="submit"
                class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Kirish</button>
    </div>


</form>
