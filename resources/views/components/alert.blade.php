@if (session('success'))
    <div class="alert success" x-data="{ alert: true }" x-show="alert" x-transition.opacity>
        <div class="alert-info">
            <i class="fas fa-check-circle"></i>
            <p>{{ session('success') }}</p>
        </div>
        <i class="fas fa-xmark" x-on:click="alert = false"></i>
    </div>
@elseif (session('warning'))
    <div class="alert warning" x-data="{ alert: true }" x-show="alert" x-transition.opacity>
        <div class="alert-info">
            <i class="fas fa-check-circle"></i>
            <p>{{ session('warning') }}</p>
        </div>
        <i class="fas fa-xmark" x-on:click="alert = false"></i>
    </div>
@elseif (session('error'))
    <div class="alert error" x-data="{ alert: true }" x-show="alert" x-transition.opacity>
        <div class="alert-info">
            <i class="fas fa-check-circle"></i>
            <p>{{ session('error') }}</p>
        </div>
        <i class="fas fa-xmark" x-on:click="alert = false"></i>
    </div>
@endif