@csrf
<div class="form-group">
    <label for="user_id"> User_id : </label>
    <input type="text" name="user_id" value="{{ $restauration ->user_id ?? old('user_id') }}" id="user_id" class="form-control @error('user_id') is-invalid @enderror" placeholder="User_id">
    @error('user_id')<div class="text-danger">{{ $message }}</div>@enderror
</div>
<div class="form-group">
    <label for="nom_restaurant"> Titre de formation : </label>
    <input type="text" name="titre" value="{{ $formation ->titre ?? old('titre') }}" id="titre" class="form-control @error('titre') is-invalid @enderror @error('titre') is-invalid @enderror" placeholder="titre de formation">
    @error('titre')<div class="text-danger">{{ $message }}</div>@enderror
</div>
<div class="form-group">
    <label for="menu"> Contenu de formation : </label>
    <input type="text" name="contenu" value="{{ $formation ->contenu ?? old('contenu') }}" id="menu" class="form-control @error('contenu') is-invalid @enderror" placeholder="contenu de formation">
    @error('contenu')<div class="text-danger">{{ $message }}</div>@enderror
</div>
<div class="row">
    <div class="col">
        <button type="submit" class="btn btn-block btn-outline-primary"><i class="fas fa-save"></i> Save</button>
    </div>
    <div class="col">
        <button type="reset" class="btn btn-block btn-outline-secondary"><i class="fas fa-window-close"></i> Cancel</button>
    </div>
</div>