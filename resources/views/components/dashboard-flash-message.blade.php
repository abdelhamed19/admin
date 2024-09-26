<div class="container mt-4">
    <!-- Flash Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="flash-message">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
</div>

<!-- Add this script at the bottom of your Blade file -->
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
