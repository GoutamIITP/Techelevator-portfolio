<div class="contact-form-card container">

    <div class="contact-form-header mb-4">
        <p class="contact-subtitle">
            Share your requirements and our team will contact you shortly.
        </p>
    </div>

    <form method="post" id="quoteform" onsubmit="return false">

        <div class="row">

            <div class="col-md-12 mb-3">
                <div class="form-icon">
                     
                    <input type="text" class="form-control" name="name" placeholder="Full Name">
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <div class="form-icon">
                     
                    <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <div class="form-icon">
                     
                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                </div>
            </div>

            <div class="col-md-12 mb-3">
                <div class="form-icon">
                     
                    <input type="text" class="form-control" name="city" placeholder="City">
                </div>
            </div>

            <div class="col-12 mb-3">
                <div class="form-icon">
                     
                    <textarea name="message" rows="4" class="form-control"
                        placeholder="Project Requirements"></textarea>
                </div>
            </div>

        </div>

        <div id="resultquotefrom" class="mb-3"></div>

        <button id="submitbquoteform" type="submit" class="btn btn-primary w-100">
            Submit Request
        </button>

    </form>

</div>



<style>
 
/* Header */
.contact-form-header h4 {
    font-weight: 700;
    color: #111827;
}

.contact-subtitle {
    font-size: 0.95rem;
    color: #6b7280;
    margin-top: 4px;
}

.contact-phone {
    font-size: 0.9rem;
    color: #2563eb;
    text-decoration: none;
    font-weight: 500;
}

/* Input with icon */
.form-icon {
    position: relative;
}

.form-icon i {
    position: absolute;
    top: 50%;
    left: 14px;
    transform: translateY(-50%);
    color: #6b7280;
    font-size: 0.95rem;
}

.form-icon .form-control {
    padding-left: 42px;
    height: 46px;
    border-radius: 6px;
    border: 1px solid #d1d5db;
    font-size: 0.95rem;
}

.form-icon textarea.form-control {
    height: auto;
    padding-top: 10px;
}

.form-control:focus {
    border-color: #2563eb;
    box-shadow: none;
}

/* Button */
.btn-primary {
    background-color: #2563eb;
    border-color: #2563eb;
    font-weight: 600;
    padding: 12px;
    border-radius: 6px;
}

.btn-primary:hover {
    background-color: #1e40af;
    border-color: #1e40af;
}

</style>


<script>
$(function () {
    $('#submitbquoteform').click(function () {
        $.ajax({
            type: "POST",
            url: "<?= site_url('contacts/booking') ?>",
            data: $("#quoteform").serialize(),
            beforeSend: function () {
                $('#resultquotefrom').html(
                    '<div class="alert alert-info">Submitting request...</div>'
                );
            },
            success: function (data) {
                if (data == '1') {
                    $('#resultquotefrom').html(
                        '<div class="alert alert-success">Your request has been submitted successfully.</div>'
                    );
                    $("#quoteform").trigger('reset');
                } else {
                    $('#resultquotefrom').html(data);
                }
            }
        });
    });
});
</script>
