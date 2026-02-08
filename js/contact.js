$(document).ready(function() {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault();
        
        var form = $(this);
        var btn = form.find('button[type="submit"]');
        var statusDiv = $('#formStatus');
        
        // Reset validation
        form.find('.form-control').removeClass('is-invalid');
        var isValid = true;

        // Simplify validation loop
        form.find('.form-control').each(function() {
            if($(this).val().trim() === '') {
                $(this).addClass('is-invalid');
                isValid = false;
            }
        });

        var contactInput = $('#contact');
        var contactVal = contactInput.val().trim();
        // Check if it looks like an email but is invalid
        if(contactVal.includes('@')) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if(!emailRegex.test(contactVal)) {
                 contactInput.addClass('is-invalid');
                 contactInput.siblings('.invalid-feedback').text('Please enter a valid email format.');
                 isValid = false;
            } else {
                 // Reset message if valid
                 contactInput.siblings('.invalid-feedback').text('Please enter a valid phone or email.');
            }
        }

        if(!isValid) {
            return;
        }

        // Disable button
        btn.prop('disabled', true).html('Serving... <i class="fa fa-spinner fa-spin"></i>');
        statusDiv.html('');

        $.ajax({
            url: 'send_contact.php',
            type: 'POST',
            data: form.serialize(),
            dataType: 'json',
            success: function(response) {
                if(response.status === 'success') {
                    // Success Animation
                    $('.contact-form').fadeOut(500, function() {
                        $('#successAnimation').fadeIn(100);
                        $('.paper-plane').addClass('fly');
                        $('.success-message').addClass('show');
                    });

                    // Reset form after animation
                    setTimeout(function() {
                        $('.paper-plane').removeClass('fly');
                        $('.success-message').removeClass('show');
                        $('#successAnimation').fadeOut(500, function() {
                            $('.contact-form').fadeIn(500);
                            form[0].reset();
                            statusDiv.html(''); 
                        });
                    }, 4000);
                    
                } else {
                    statusDiv.html('<div class="alert alert-danger">' + response.message + '</div>');
                }
            },
            error: function() {
                statusDiv.html('<div class="alert alert-danger">Something went wrong. Please try again later.</div>');
            },
            complete: function() {
                btn.prop('disabled', false).html('Send Message <i class="fa fa-paper-plane"></i>');
                
                // Clear success message after 5 seconds
                setTimeout(function() {
                    statusDiv.html('');
                }, 5000);
            }
        });
    });
});
