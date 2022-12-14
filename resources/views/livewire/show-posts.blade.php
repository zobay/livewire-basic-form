<div class="container">
    <form wire:submit.prevent="submitForm" action="" method="POST">
        @csrf
        @if ($successMessage)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
               <strong>{{ $successMessage }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" wire:model="email" class="@error('email') is-invalid @enderror form-control" id="email" name="email" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" wire:model="name" class="@error('name') is-invalid @enderror form-control" id="name" name="name">
            @error('name')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
            @error('password')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">
            <span wire:loading wire:target="submitForm" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            Submit
        </button>
    </form>
</div>
