@csrf

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right" >{{ __('Name') }}</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $utilisateur ->name ?? old('name') }}" required autocomplete="name" autofocus>

        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $utilisateur ->email ?? old('email') }}" required autocomplete="email">

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ $utilisateur ->password ?? old('password') }}" required autocomplete="new-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="form-group row">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{ $utilisateur ->password ?? old('password') }}" required autocomplete="new-password">
    </div>
</div>
<div class="form-group row">
    <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('role') }}</label>

    <div class="col-md-6">
        <input id="role" type="number" class="form-control @error('role') is-invalid @enderror" name="role" value="{{ $utilisateur ->role ?? old('role') }}" required autocomplete="role">

        @error('role')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-block btn-outline-primary"><i class="fas fa-save"></i> Save</button>
    </div>
    <div class="col">
        <button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-window-close"></i> Cancel</button>
    </div>
</div>