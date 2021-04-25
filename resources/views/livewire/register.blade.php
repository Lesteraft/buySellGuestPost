<div>
    <section class="products">
        <div class="container">
            <h2 class="h2 upp align-center"> {{ __('Register') }}</h2>
                <div class="card">
                    <div class="card-body">
                        <form action="">
                        <div class="form-group row">


                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                
                                <input 
                                    wire:model="name"
                                    type="text"
                                    class="form-control @error('name') is-invalid @enderror" autocomplete="name"
                                    autofocus
                                >

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input 
                                    wire:model="email" 
                                    type="email"
                                    class="form-control @error('email') is-invalid @enderror" autocomplete="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Movil') }}</label>

                            <div class="col-md-6">
                                <input type="tel" wire:model="telefono" autocomplete="tel"
                                       class="form-control @error('telefono') is-invalid @enderror">

                                @error('telefono')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input wire:model="password" type="password"
                                       class="form-control @error('password') is-invalid @enderror" autocomplete="new-password" >

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input type="password" wire:model="password_confirmation" autocomplete="new-password"  class="form-control">
                            </div>
                        </div>

                            <div class="form-group row center-block">
                                <div class="col-md-4 col-md-offset-4">
                                <a wire:click.prevent="registrarme()"  class="btn btn-primary">
                                    {{ __('Register') }}
                                </a>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
    </section>
</div>
