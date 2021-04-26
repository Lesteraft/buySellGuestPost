<div>
    <div>
         <div class="names">

            <div class="cFName">
                <label for="first_name" class="label">First Name</label>
                <input wire:model="first_name" type="text" placeholder="First Name" class="input" value="{{ old('first_name') }}">
                @error('first_name')
                <small class="error" role="alert">
                    <strong style="color: #dc3545; display: block; margin-bottom: 1rem;">{{ $message }}</strong>
                </small>
                @enderror
            </div>

            <div class="lFName">
                <label for="last_name" class="label">Last Name</label>
                <input wire:model="last_name" type="text" placeholder="Last Name" class="input" value="{{ old('last_name') }}">
                @error('last_name')
                <small class="error" role="alert">
                    <strong style="color: #dc3545; display: block; margin-bottom: 1rem;">{{ $message }}</strong>
                </small>
                @enderror
            </div>

        </div>

        <label for="email" class="label">Email</label>
        <input wire:model="email" type="email" placeholder="Example: info@yourcompany.com" class="input" value="{{ old('email') }}">
        @error('email')
        <small class="error" role="alert">
            <strong style="color: #dc3545; display: block; margin-bottom: 1rem;">{{ $message }}</strong>
        </small>
        @enderror

        <label for="password" class="label">Password</label>
        <input wire:model="password" type="password"  placeholder="Password" class="input">
        @error('password')
        <small class="error" role="alert">
            <strong style="color: #dc3545; display: block; margin-bottom: 1rem;">{{ $message }}</strong>
        </small>
        @enderror

        <span>
        By Registering, You Agree To <a href="/privacy" class="formLinks">The Privacy Policy</a>, <a
                    href="/refunds" class="formLinks">Refund Policy</a> & <a href="/term"
                                                                             class="formLinks">Terms Of
            Services.</a>
        </span>

        <div class="submit">
            <button type="button" wire:click="submit()" id="btn-register" class="btn" style="cursor: pointer;">
                Register Now
            </button>

            <!-- <a href="{{ route('marketplace') }}"  id="btn-register" class="btn" style="cursor: pointer;">
                Register Now
            </a> -->
        </div>
    </div>
       

</div>
