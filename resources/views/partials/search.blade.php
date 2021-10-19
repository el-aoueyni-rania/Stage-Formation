<form action="{{ route('utilisateurs.search') }}" class="d-flex mr-3 mb-2">
    <div class="form-group mb-0 mr-1">
        <input type="text" name="q" class="form-control" value="{{ request()->q ?? '' }}">
    </div>
    <button type="submit" class="btn btn-info"><i class="fas fa-search"></i></button>
</form>



