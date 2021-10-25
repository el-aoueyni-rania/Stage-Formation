@csrf
<div class="row align-items-stretch mb-5">
    <div class="col-md-6">
        <!-- Name input-->
        <div class="form-group">
            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nom *" />
            @error('name')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <!-- Email address input-->
        <div class="form-group">   
            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"  placeholder="Email *" />
            @error('email')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
        <!-- Phone number input-->
        <div class="form-group mb-md-0">   
            <input type="tel" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror"  placeholder="numéro de téléphone *" />
            @error('phone')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
    </div>
     <!-- Message input-->
    <div class="col-md-6">
        <div class="form-group form-group-textarea mb-md-0">   
            <textarea type="text" name="message" id="message" class="form-control @error('message') is-invalid @enderror" placeholder="Message *" ></textarea>
            @error('message')<div class="text-danger">{{ $message }}</div>@enderror
        </div>
    </div>
</div>
<!-- Submit success message-->
@if (session('storeMessage'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('storeMessage') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
    <div class="d-none" id="submitSuccessMessage">
        <div class="text-center text-white mb-3">
            <div class="fw-bolder">message envoyer avec succes !</div>
        </div>
    </div>
<!-- Submit Button-->
<div class="text-center">
    <button type="submit" class="btn btn-primary btn-xl text-uppercase ">Envoyer</button>
</div>
