@if (session()->has('error'))
    <div class="alert alert-danger" id="flash-message">
        {{ session('error') }}
    </div>
@endif
<script>
    // Wait for DOM to fully load
    document.addEventListener('DOMContentLoaded', function () {
        // Automatically hide the flash message after 3 seconds
        setTimeout(function() {
            var flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                // Use Bootstrap's fade out functionality
                flashMessage.classList.remove('show');
                flashMessage.classList.add('fade');
            }
        }, 1500); // 3 seconds
    });
</script>
