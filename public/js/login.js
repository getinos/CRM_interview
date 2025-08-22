        // Modal functionality
        const signupBtn = document.getElementById('signupBtn');
        const signupModal = document.getElementById('signupModal');
        const closeModal = document.getElementById('closeModal');
        const loginForm = document.getElementById('loginForm');
        const signupForm = document.getElementById('signupForm');

        // Open modal
        signupBtn.addEventListener('click', function() {
            signupModal.classList.add('active');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        });

        // Close modal
        function closeSignupModal() {
            signupModal.classList.remove('active');
            document.body.style.overflow = 'auto';
            clearSignupForm();
        }

        closeModal.addEventListener('click', closeSignupModal);

        // Close modal when clicking outside
        signupModal.addEventListener('click', function(e) {
            if (e.target === signupModal) {
                closeSignupModal();
            }
        });

        // Close modal with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && signupModal.classList.contains('active')) {
                closeSignupModal();
            }
        });

        // Form validation functions
        function showError(inputId, errorId, message) {
            const input = document.getElementById(inputId);
            const error = document.getElementById(errorId);
            input.classList.add('error');
            error.textContent = message;
            error.classList.add('show');
        }

        function clearError(inputId, errorId) {
            const input = document.getElementById(inputId);
            const error = document.getElementById(errorId);
            input.classList.remove('error');
            error.classList.remove('show');
        }

        function clearAllErrors() {
            const inputs = document.querySelectorAll('input');
            const errors = document.querySelectorAll('.error-message');
            inputs.forEach(input => input.classList.remove('error'));
            errors.forEach(error => error.classList.remove('show'));
        }

        function clearSignupForm() {
            signupForm.reset();
            clearAllErrors();
        }

        // Login form validation


        // Signup form validation
    
        // Clear errors on input
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('input', function() {
                if (this.classList.contains('error')) {
                    const errorId = this.id + 'Error';
                    clearError(this.id, errorId);
                }
            });
        });
