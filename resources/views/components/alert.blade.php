@if (session('success'))
    <div class="alert success">
        <div class="alert-info">
            <i class="fas fa-check-circle"></i>
            <p>{{ session('success') }}</p>
        </div>
        <i class="fas fa-xmark"></i>
    </div>
@elseif (session('warning'))
    <div class="alert warning">
        <div class="alert-info">
            <i class="fas fa-check-circle"></i>
            <p>{{ session('warning') }}</p>
        </div>
        <i class="fas fa-xmark"></i>
    </div>
@elseif (session('error'))
    <div class="alert error">
        <div class="alert-info">
            <i class="fas fa-check-circle"></i>
            <p>{{ session('error') }}</p>
        </div>
        <i class="fas fa-xmark"></i>
    </div>
@endif