<div class="container">
    <!-- Progress Bar -->
    <ul class="progressbar">
        <li class="active" id="step1">Country</li>
        <li id="step2">Plan</li>
        <li id="step3">User Details</li>
        <li id="step4">Documents</li>
        <li id="step5">Referral</li>
        <li id="step6">Completed</li>
    </ul>

    <!-- Country form -->
    <form id="form1" class="step-form" onsubmit="return false" style="display:none;">
        <label class="text-white">Select Country:</label>
        <!-- <select id="country" name="country" class="form-control">
            <option value="India">India</option>
            <option value="UAE">UAE</option>
        </select> -->
        <input id="country" name="country" class="form-control" hidden>
        <div class="row mt-2">
            <div class="col-12 col-lg-4">
                <img src="<?= base_url('assets/images/country/india.jfif') ?>"
                    alt="India" class="country-img"
                    data-country="India" role="button" tabindex="0" aria-pressed="false">
            </div>
            <div class="col-12 col-lg-4">
                <img src="<?= base_url('assets/images/country/uae.jfif') ?>"
                    alt="UAE" class="country-img"
                    data-country="UAE" role="button" tabindex="0" aria-pressed="false">
            </div>
        </div>


        <div id="result1" class="mt-2"></div>
        <?php if ($this->session->userdata('edit') == 0) { ?>
            <button type="submit" id="submitbtn1" class="btn btn-primary mt-2">Next</button>
        <?php } else { ?>
            <button type="submit" id="submitbtn1" class="btn btn-primary mt-2">Save</button>
        <?php } ?>
    </form>

    <!-- Plan Selection -->
    <form id="form2" class="step-form" onsubmit="return false" style="display:none;">
        <label class="text-white">Select Plan:</label>
        <div id="planContainer" class="form-group">
            <!-- Checkboxes will be injected here -->
        </div>

        <div id="result2" class="mt-2"></div>
        <?php if ($this->session->userdata('edit') == 0) { ?>
            <button type="submit" id="backbtn2" class="btn btn-primary mt-2">Back</button>
            <button type="submit" id="submitbtn2" class="btn btn-primary mt-2">Next</button>
        <?php } else { ?>
            <button type="submit" id="submitbtn2" class="btn btn-primary mt-2">Save</button>
        <?php } ?>
    </form>

    <!-- User Details -->
    <form id="form3" class="step-form" onsubmit="return false" style="display:none;">
        <div class="row">
            <div class="mt-3 col-md-6 col-12">
                <label class="text-white">Name:<span class="color-red">*</span></label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="mt-3 col-md-6 col-12">
                <label class="text-white">Email:<span class="color-red">*</span></label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
            <div class="mt-3 col-md-6 col-12">
                <label class="text-white">Phone:<span class="color-red">*</span></label>
                <input type="text" id="phone" name="phone" class="form-control">
            </div>
            <div class="mt-3 col-md-6 col-12">
                <label class="text-white">Company Name:<span class="color-red">*</span></label>
                <input type="text" id="company_email" name="company_name" class="form-control">
            </div>
            <div class="mt-3 col-md-6 col-12">
                <label class="text-white">Company Website:<span class="color-red">*</span></label>
                <input type="text" id="website" name="website" class="form-control">
            </div>
            <div class="mt-3 col-md-6 col-12">
                <label class="text-white">Office Address:<span class="color-red">*</span></label>
                <textarea name="office_add" id="office_add" class="form-control"></textarea>
            </div>
            <div class="mt-3 col-md-6 col-12">
                <label class="text-white">PAN No.:<span class="color-red">*</span></label>
                <input type="text" id="pan_no" name="pan_no" class="form-control">
            </div>
            <div class="mt-3 col-md-6 col-12">
                <label class="text-white">GST No.:<span class="color-red">*</span></label>
                <input type="text" id="gst_no" name="gst_no" class="form-control">
            </div>
            <div class="mt-3 col-md-6 col-12">
                <label class="text-white">City:<span class="color-red">*</span></label>
                <input type="text" id="city" name="city" class="form-control">
            </div>
            <div class="mt-3 col-md-6 col-12">
                <label class="text-white">Total Years of Establishment <small class="small-text">(in years)</small></label>
                <input type="text" id="total_years" name="total_years" class="form-control">
            </div>
            <div class="mt-3 col-md-6 col-12">
                <label class="text-white">Company's Yearly Turnover <small class="small-text">(range in lakhs)</small></label>
                <!-- <input type="text" id="turnover" name="turnover" class="form-control"> -->
                <select name="turnover" id="turnover" class="form-control">
                    <option value="" selected disabled>Select</option>
                    <option value="1">Less than 1 Lakhs</option>
                    <option value="2">1-10 Lakhs</option>
                    <option value="3">10-25 Lakhs</option>
                    <option value="4">25-50 Lakhs</option>
                    <option value="5">50-75 Lakhs</option>
                    <option value="6">75-100 Lakhs</option>
                    <option value="7">More than 1 Crore</option>
                </select>
            </div>
        </div>
        <div class="col-12">
            <div id="result3" class="mt-2"></div>
        </div>
        <div class="col-12">
            <?php if ($this->session->userdata('edit') == 0) { ?>
                <button type="submit" id="backbtn3" class="btn btn-primary mt-2">Back</button>
                <button type="submit" id="submitbtn3" class="btn btn-primary mt-2">Next</button>
            <?php } else { ?>
                <button type="submit" id="submitbtn3" class="btn btn-primary mt-2">Save</button>
            <?php } ?>
        </div>
    </form>

    <form id="form4" class="step-form" onsubmit="return false" enctype="multipart/form-data" style="display:none;">
        <label class="text-white">Upload Profile:<span class="color-red">*</span></label>
        <input type="file" name="image" class="form-control">
        <input type="text" name="old_image" id="old_image" hidden>

        <label class="text-white">Upload Company Logo:<span class="color-red">*</span></label>
        <input type="file" name="company_logo" class="form-control">
        <input type="text" name="old_company_logo" id="old_company_logo" hidden>

        <label class="text-white">Upload GST Certificate:<span class="color-red">*</span></label>
        <input type="file" name="gst_certificate" class="form-control">
        <input type="text" name="old_gst" id="old_gst" hidden>

        <div id="result4" class="mt-2"></div>
        <?php if ($this->session->userdata('edit') == 0) { ?>
            <button type="submit" id="backbtn4" class="btn btn-primary mt-2">Back</button>
            <button type="submit" id="submitbtn4" class="btn btn-primary mt-2">Next</button>
        <?php } else { ?>
            <button type="submit" id="submitbtn4" class="btn btn-primary mt-2">Save</button>
        <?php } ?>

    </form>

    <form id="form5" class="step-form" onsubmit="return false" style="display:none;">

        <label class="text-white">Referrer's Name:(Optional)</label>
        <input type="text" id="r_name" name="r_name" class="form-control">

        <label class="text-white">Referrer's Contact No.:(Optional)</Obj></label>
        <input type="text" id="r_phone" name="r_phone" class="form-control">

        <div id="result5" class="mt-2"></div>
        <?php if ($this->session->userdata('edit') == 0) { ?>
            <button type="submit" id="backbtn5" class="btn btn-primary mt-2">Back</button>
            <button type="submit" id="submitbtn5" class="mt-2 btn btn-primary">Submit</button>
        <?php } else { ?>
            <button type="submit" id="submitbtn5" class="mt-2 btn btn-primary">Save</button>
        <?php } ?>
    </form>

    <div id="form6" class="step-form" onsubmit="return false" style="display:none;">
        <div class="container review-container">
            <h2 class="text-center">Review Your Details</h2>

            <!-- Country -->
            <div class="card review-section">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Country</h4>
                    <button class="btn btn-sm btn-info edit-btn" data-step="1">Edit</button>
                </div>
                <div class="card-body">
                    <p class="text-white"><strong class="text-white">Selected Country:</strong> <span id="review_country"></span></p>
                </div>
            </div>

            <!-- Plan -->
            <div class="card review-section">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Plan Selection</h4>
                    <button class="btn btn-sm btn-info edit-btn" data-step="2">Edit</button>
                </div>
                <div class="card-body">
                    <p class="text-white"><strong class="text-white">Selected Plans:</strong> <span id="review_plans"></span></p>
                </div>
            </div>

            <!-- User Details -->
            <div class="card review-section">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">User Details</h4>
                    <button class="btn btn-sm btn-info edit-btn" data-step="3">Edit</button>
                </div>
                <div class="card-body row">
                    <div class="col-md-6 text-white"><strong class="text-white">Name:</strong> <span id="review_name"></span></div>
                    <div class="col-md-6 text-white"><strong class="text-white">Email:</strong> <span id="review_email"></span></div>
                    <div class="col-md-6 text-white"><strong class="text-white">Phone:</strong> <span id="review_phone"></span></div>
                    <div class="col-md-6 text-white"><strong class="text-white">Company Name:</strong> <span id="review_company_name"></span></div>
                    <div class="col-md-6 text-white"><strong class="text-white">Website:</strong> <span id="review_website"></span></div>
                    <div class="col-md-6 text-white"><strong class="text-white">Office Address:</strong> <span id="review_office_add"></span></div>
                    <div class="col-md-6 text-white"><strong class="text-white">PAN No.:</strong> <span id="review_pan_no"></span></div>
                    <div class="col-md-6 text-white"><strong class="text-white">GST No.:</strong> <span id="review_gst_no"></span></div>
                    <div class="col-md-6 text-white"><strong class="text-white">City:</strong> <span id="review_city"></span></div>
                    <div class="col-md-6 text-white"><strong class="text-white">Total Years of Establishment:</strong> <span id="review_total_years">5</span></div>
                    <div class="col-md-6 text-white"><strong class="text-white">Company's Yearly Turnover:</strong> <span id="review_turnover"></span></div>
                </div>
            </div>

            <!-- Documents -->
            <div class="card review-section">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Documents</h4>
                    <button class="btn btn-sm btn-info edit-btn" data-step="4">Edit</button>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <p class="text-white"><strong class="text-white">Profile:</strong></p>
                            <img id="review_profile" src="" alt="Profile" class="img-fluid" style="max-width:150px; height:auto;">
                        </div>
                        <div class="col-md-4">
                            <p class="text-white"><strong class="text-white">Company Logo:</strong></p>
                            <img id="review_company_logo" src="" alt="Company Logo" class="img-fluid" style="max-width:150px; height:auto;">
                        </div>
                        <div class="col-md-4">
                            <p class="text-white"><strong class="text-white">GST Certificate:</strong></p>
                            <img id="review_gst_certificate" src="" alt="Gst Certificate" class="img-fluid" style="max-width:150px; height:auto;">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Referrer -->
            <div class="card review-section">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Referrer Details</h4>
                    <button class="btn btn-sm btn-info edit-btn" data-step="5">Edit</button>
                </div>
                <div class="card-body">
                    <p class="text-white"><strong class="text-white">Referrer Name:</strong> <span id="review_r_name"></span></p>
                    <p class="text-white"><strong class="text-white">Referrer Contact No.:</strong> <span id="review_r_phone"></span></p>
                </div>
            </div>

            <!-- Final Submit -->
            <div class="text-center">
                <button class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#confirmModal">Confirm & Submit</button>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="confirmModalLabel">Confirm Submission</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to submit the details?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                <button type="button" class="btn btn-primary" id="confirmSubmit">Yes</button>
            </div>
        </div>
    </div>
</div>


<style>
    .small-text {
        font-size: 1rem;
    }

    .color-red {
        color: red;
    }

    .step-form label {
        font-weight: 600;
        color: #333;
        margin-bottom: 6px;
        display: block;
    }

    .step-form input,
    .step-form textarea,
    .step-form select {
        border-radius: 6px;
        padding: 5px 10px;
        font-size: 14px;
        border: 1px solid #ccc;
        transition: all 0.2s ease-in-out;
        background-color: #fff;
    }

    .step-form input:focus,
    .step-form textarea:focus,
    .step-form select:focus {
        border-color: #4CAF50;
        outline: none;
        box-shadow: 0 0 5px rgba(76, 175, 80, 0.3);
    }

    .step-form textarea {
        resize: vertical;
    }

    .progressbar {
        counter-reset: step;
        display: flex;
        justify-content: space-between;
        list-style: none;
        margin: 20px 0 30px;
        padding-left: 0;
        position: relative;
    }

    .progressbar li {
        counter-increment: step;
        width: 100%;
        text-align: center;
        position: relative;
        color: #bbb;
        font-weight: 500;
    }

    .progressbar li::before {
        content: counter(step);
        width: 35px;
        height: 35px;
        border: 2px solid #bbb;
        display: block;
        text-align: center;
        margin: 0 auto 10px;
        border-radius: 50%;
        background: #464646ff;
        font-weight: bold;
        line-height: 30px;
        transition: all 0.3s ease;
    }

    .progressbar li.active {
        color: #4CAF50;
    }

    .progressbar li.active::before {
        border-color: #4CAF50;
        background-color: #4CAF50;
        color: white;
    }

    .progressbar li::after {
        content: '';
        position: absolute;
        width: calc(100% - 35px);
        height: 2px;
        background-color: #bbb;
        top: 15px;
        left: 50%;
        z-index: -1;
    }

    .progressbar li:last-child::after {
        display: none;
    }

    .progressbar li.active::after {
        background-color: #4CAF50;
    }

    .country-img {
        width: 100%;
        max-width: 200px;
        cursor: pointer;
        border-radius: 8px;
        transition: 0.3s;
    }

    .country-img.selected {
        box-shadow: 0 0 15px 4px rgba(0, 123, 255, 0.6);
        border: 2px solid #007bff;
    }

    .review-container {
        margin-top: 30px;
        margin-bottom: 50px;
    }

    .review-section {
        margin-bottom: 20px;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #eee;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        background-color: transparent;
    }

    .review-section .card-header {
        background-color: transparent;
        padding: 10px 15px;
        border-bottom: 1px solid #eee;
    }

    .review-section .card-header h4 {
        font-size: 16px;
        margin: 0;
        font-weight: 600;
    }

    .review-section .card-body {
        padding: 15px;
    }

    .review-section p,
    .review-section div {
        margin-bottom: 8px;
        font-size: 14px;
    }

    .review-section strong {
        color: #333;
    }

    .review-section img {
        border: 1px solid #ddd;
        padding: 4px;
        border-radius: 5px;
        max-width: 100%;
    }


    .step-form {
        display: none;
        animation: fadeIn 0.4s ease-in-out;
    }

    .step-form.active {
        display: block;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        .progressbar li::after {
            width: calc(100% - 20px);
        }
    }
</style>

<script>
    $(function() {
        const $input = $('#country');

        // Click/keyboard select (delegated so it always works)
        $(document).on('click keydown', '.country-img', function(e) {
            if (e.type === 'keydown' && e.key !== 'Enter' && e.key !== ' ') return;

            const country = ($(this).data('country') || this.alt || '').trim();
            if (!country) return;

            $input.val(country).trigger('input');

            // Visual selection
            $('.country-img').removeClass('selected').attr('aria-pressed', 'false');
            $(this).addClass('selected').attr('aria-pressed', 'true');
        });

        // If editing and input already has a value, reflect it on the images
        const preset = ($input.val() || '').trim().toLowerCase();
        if (preset) {
            $('.country-img').each(function() {
                const name = (($(this).data('country') || this.alt || '')).trim().toLowerCase();
                if (name === preset) {
                    $(this).addClass('selected').attr('aria-pressed', 'true');
                }
            });
        }
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        var currentStep = <?php echo (int)$step; ?>;
        var edit_mode = <?php echo (int)$edit; ?>;
        var user_id = <?php echo (int)$user_id; ?>;
        var back = <?php echo (int)$back; ?>;
        console.log("currentStep " + currentStep);
        console.log("edit_mode " + edit_mode);
        console.log("user_id " + user_id);
        console.log("back " + back);
        $('#form1, #form2, #form3, #form4, #form5, #form6').hide();
        document.getElementById('form' + currentStep).style.display = 'block';

        for (let i = 1; i < currentStep; i++) {
            document.getElementById('form' + i).style.display = 'none';
        }
        document.getElementById('form' + currentStep).style.display = 'block';

        for (let i = 1; i <= 6; i++) {
            const stepEl = document.getElementById('step' + i);
            if (stepEl) {
                if (i <= currentStep) {
                    stepEl.classList.add('active');
                } else {
                    stepEl.classList.remove('active');
                }
            }
        }

        if (currentStep == 2) {
            loadPlans();
        }

        $('#backbtn2').click(function(event) {
            event.preventDefault();
            console.log("back button called");

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('details/back_button') ?>",
                data: {
                    back_step: 1
                },
                success: function() {
                    setTimeout(function() {
                        location.reload();
                    }, 100);
                }
            });
        });
        $('#backbtn3').click(function(event) {
            event.preventDefault();
            console.log("back button called");

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('details/back_button') ?>",
                data: {
                    back_step: 2
                },
                success: function() {
                    setTimeout(function() {
                        location.reload();
                    }, 100);
                }
            });
        });
        $('#backbtn4').click(function(event) {
            event.preventDefault();
            console.log("back button called");

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('details/back_button') ?>",
                data: {
                    back_step: 3
                },
                success: function() {
                    setTimeout(function() {
                        location.reload();
                    }, 100);
                }
            });
        });
        $('#backbtn5').click(function(event) {
            event.preventDefault();
            console.log("back button called");

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('details/back_button') ?>",
                data: {
                    back_step: 4
                },
                success: function() {
                    setTimeout(function() {
                        location.reload();
                    }, 100);
                }
            });
        });


        function loadPlans() {
            $.ajax({
                url: "<?php echo site_url('details/fetch_plans'); ?>",
                type: "GET",
                dataType: "json",
                success: function(plans) {
                    var $container = $('#planContainer');
                    $container.empty();

                    if (plans && plans.length > 0) {
                        $.each(plans, function(i, plan) {
                            var planName = plan.name;
                            var planPrice = plan.price;
                            var planDescription = plan.description || "";

                            var inputId = "plan_" + plan.plan_id;

                            var radioHtml = `
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="plan" id="${inputId}" value="${plan.plan_id}">
                    <label class="form-check-label" for="${inputId}">
                        <strong>${planName}</strong> - <em>${planPrice}</em><br>
                        <small>${planDescription}</small>
                    </label>
                </div>
            `;
                            $container.append(radioHtml);
                        });
                    } else {
                        $container.html('<div>No plans available</div>');
                    }
                },
                error: function() {
                    $('#result2').html('<div class="alert alert-danger">Failed to load plans. Please try again.</div>');
                }
            });
        }
        if (user_id != null) {

            if (currentStep === 1 && (edit_mode == 1 || back > 0)) {
                $.ajax({
                    url: "<?php echo site_url('details/fetch_user_details'); ?>",
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        if (data.length > 0) {
                            var data1 = data[0];

                            $('#country').val(data1.country);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error fetching review data:", error);
                    }
                });
            }
            if (currentStep === 2 && (edit_mode == 1 || back > 0)) {
                // loadPlans();
                $.ajax({
                    url: "<?php echo site_url('details/fetch_user_details'); ?>",
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        var savedPlanId = data[0].plan;

                        var tries = 0;
                        var maxTries = 12;
                        var tryCheck = function() {
                            tries++;
                            var $radio = $('#planContainer').find('input[type=radio][name="plan"][value="' + savedPlanId + '"]');
                            if ($radio.length) {
                                $radio.prop('checked', true).trigger('change');
                            } else if (tries < maxTries) {
                                setTimeout(tryCheck, 100);
                            } else {
                                console.warn('Could not preselect plan id', savedPlanId);
                            }
                        };
                        tryCheck();
                    },
                    error: function(xhr, status, error) {
                        console.error("Error fetching review data:", error);
                    }
                });
            }
            if (currentStep === 3 && (edit_mode == 1 || back > 0)) {
                $.ajax({
                    url: "<?php echo site_url('details/fetch_user_details'); ?>",
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        if (data.length > 0) {
                            var data3 = data[0];

                            $('#name').val(data3.name);
                            $('#email').val(data3.email);
                            $('#phone').val(data3.phone);
                            $('#company_email').val(data3.company_name);
                            $('#website').val(data3.website);
                            $('#office_add').val(data3.office_add);
                            $('#pan_no').val(data3.pan_no);
                            $('#gst_no').val(data3.gst_no);
                            $('#city').val(data3.city);
                            $('#total_years').val(data3.total_years);
                            $('#turnover').val(data3.turnover);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error fetching review data:", error);
                    }
                });
            }
            if (currentStep === 4 && (edit_mode == 1 || back > 0)) {
                $.ajax({
                    url: "<?php echo site_url('details/fetch_user_details'); ?>",
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        if (data.length > 0) {
                            var data4 = data[0];

                            $('#old_image').val(data4.image);
                            $('#old_company_logo').val(data4.company_logo);
                            $('#old_gst').val(data4.gst_certificate);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error fetching review data:", error);
                    }
                });
            }

        }
        if (currentStep === 5 && (edit_mode == 1 || back > 0)) {
            $.ajax({
                url: "<?php echo site_url('details/fetch_user_details'); ?>",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    if (data.length > 0) {
                        var data3 = data[0];

                        $('#r_name').val(data3.r_name);
                        $('#r_phone').val(data3.r_phone);
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching review data:", error);
                }
            });
        }

        if (currentStep === 6) {
            $.ajax({
                url: "<?php echo site_url('details/fetch_user_details'); ?>",
                type: "GET",
                dataType: "json",
                success: function(data) {
                    if (data.length > 0) {
                        var user = data[0];

                        $('#review_country').text(user.country);
                        $('#review_plans').text(user.plan_name + ' - ' + user.plan_price);
                        $('#review_name').text(user.name);
                        $('#review_email').text(user.email);
                        $('#review_phone').text(user.phone);
                        $('#review_company_name').text(user.company_name);
                        $('#review_website').text(user.website);
                        $('#review_office_add').text(user.office_add);
                        $('#review_pan_no').text(user.pan_no);
                        $('#review_gst_no').text(user.gst_no);
                        $('#review_city').text(user.city);
                        $('#review_total_years').text(user.total_years);

                        const turnoverMap = {
                            "1": "Less than 1 Lakhs",
                            "2": "1-10 Lakhs",
                            "3": "10-25 Lakhs",
                            "4": "25-50 Lakhs",
                            "5": "50-75 Lakhs",
                            "6": "75-100 Lakhs",
                            "7": "More than 1 Crore"
                        };
                        let turnoverValue = user.turnover;
                        let turnoverText = turnoverMap[turnoverValue] || "N/A";
                        $('#review_turnover').text(turnoverText);

                        $('#review_profile').text(user.image);
                        $('#review_profile').attr('src', '<?php echo base_url("assets/uploads/documents/profile_pic/thumb/") ?>' + user.image);
                        $('#review_company_logo').attr('src', '<?php echo base_url("assets/uploads/documents/logo/thumb/") ?>' + user.company_logo);
                        $('#review_gst_certificate').attr('src', '<?php echo base_url("assets/uploads/documents/gst/thumb/") ?>' + user.gst_certificate);

                        $('#review_r_name').text(user.r_name || 'N/A');
                        $('#review_r_phone').text(user.r_phone || 'N/A');
                    }
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching review data:", error);
                }
            });
        }


        $('#confirmSubmit').click(function() {
            $('#confirmModal').modal('hide');

            $.ajax({
                url: "<?php echo site_url('details/update_user_status'); ?>",
                type: "POST",
                success: function(data) {
                    if (data == 1) {
                        window.location.href = "<?php echo site_url('details/thank_you'); ?>";
                    }
                },
                error: function() {
                    alert('Error submitting details. Please try again.');
                }
            });
        });

        $('.edit-btn').click(function(event) {
            event.preventDefault();

            var step = $(this).data('step');

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('details/set_edit_mode') ?>",
                data: {
                    current_step: step
                },
                success: function() {
                    setTimeout(function() {
                        location.reload();
                    }, 400);
                }
            });
        });

        // === Save Country ===
        $('#submitbtn1').click(function(event) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('details/save_country') ?>",
                data: $('#form1').serialize(),
                beforeSend: function() {
                    $('#result1').html('<div class="alert alert-info">Submitting...</div>');
                    $('#submitbtn1').prop('disabled', true);
                },
                success: function(data) {
                    $('#result1').empty();
                    if (data === '1') {
                        $('#result1').html("<div class='alert alert-success'>Country selected successfully</div>");

                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else if (data === '0') {
                        $('#result1').html("<div class='alert alert-danger'>Country selection failed</div>");
                        $('#submitbtn1').prop('disabled', false);
                    } else {
                        $('#result1').html("<div class='alert alert-warning'>" + data + "</div>");
                        $('#submitbtn1').prop('disabled', false);
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    $('#result1').html('<div class="alert alert-danger">Submission failed. Please try again.</div>');
                    $('#submitbtn1').prop('disabled', false);
                }
            });
        });

        // === Save Plan ===
        $('#submitbtn2').click(function(event) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('details/save_plan') ?>",
                data: $('#form2').serialize(),
                beforeSend: function() {
                    $('#result2').html('<div class="alert alert-info">Submitting...</div>');
                    $('#submitbtn2').prop('disabled', true);
                },
                success: function(data) {
                    $('#result2').empty();
                    if (data == 1) {
                        $('#result2').html("<div class='alert alert-success'>Plan selected successfully</div>");
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else if (data == 0) {
                        $('#result2').html("<div class='alert alert-danger'>Plan selection failed</div>");
                        $('#submitbtn2').prop('disabled', false);
                    } else {
                        $('#result2').html("<div class='alert alert-warning'>" + data + "</div>");
                        $('#submitbtn2').prop('disabled', false);
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    $('#result2').html('<div class="alert alert-danger">Submission failed. Please try again.</div>');
                    $('#submitbtn2').prop('disabled', false);
                }
            });
        });

        // === Save User Details ===
        $('#submitbtn3').click(function(event) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('details/save_user_details') ?>",
                data: $('#form3').serialize(),
                beforeSend: function() {
                    $('#result3').html('<div class="alert alert-info">Submitting...</div>');
                    $('#submitbtn3').prop('disabled', true);
                },
                success: function(data) {
                    $('#result3').empty();
                    if (data == 1) {
                        $('#result3').html("<div class='alert alert-success'>User details submitted successfully</div>");
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else if (data == 0) {
                        $('#result3').html("<div class='alert alert-danger'>Details submission failed</div>");
                        $('#submitbtn3').prop('disabled', false);
                    } else {
                        $('#result3').html("<div class='alert alert-warning'>" + data + "</div>");
                        $('#submitbtn3').prop('disabled', false);
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    $('#result3').html('<div class="alert alert-danger">Submission failed. Please try again.</div>');
                    $('#submitbtn3').prop('disabled', false);
                }
            });
        });

        // === Save Documents ===
        $('#submitbtn4').click(function(event) {
            event.preventDefault();
            var formData = new FormData($('#form4')[0]);
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('details/save_documents') ?>",
                data: formData,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('#result4').html('<div class="alert alert-info">Submitting...</div>');
                    $('#submitbtn4').prop('disabled', true);
                },
                success: function(data) {
                    $('#result4').empty();
                    if (data == 1) {
                        $('#result4').html("<div class='alert alert-success'>Documents uploaded successfully</div>");
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else if (data == 0) {
                        $('#result4').html("<div class='alert alert-danger'>Documents submission failed</div>");
                        $('#submitbtn4').prop('disabled', false);
                    } else if (data == 2) {
                        $('#result4').html("<div class='alert alert-warning'>All required files must be uploaded</div>");
                        $('#submitbtn4').prop('disabled', false);
                    } else {
                        $('#result4').html("<div class='alert alert-warning'>" + data + "</div>");
                        $('#submitbtn4').prop('disabled', false);
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    $('#result4').html('<div class="alert alert-danger">Submission failed. Please try again.</div>');
                    $('#submitbtn4').prop('disabled', false);
                }
            });
        });

        // === Save Referral ===
        $('#submitbtn5').click(function(event) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('details/save_referral') ?>",
                data: $('#form5').serialize(),
                beforeSend: function() {
                    $('#result5').html('<div class="alert alert-info">Submitting your referral...</div>');
                    $('#submitbtn5').prop('disabled', true);
                },
                success: function(data) {
                    $('#result5').empty();
                    if (data == 1) {
                        $('#result5').html("<div class='alert alert-success'>Referral submitted successfully</div>");
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    } else if (data == 0) {
                        $('#result5').html("<div class='alert alert-danger'>Referral submission failed</div>");
                        $('#submitbtn5').prop('disabled', false);
                    } else {
                        $('#result5').html("<div class='alert alert-warning'>" + data + "</div>");
                        $('#submitbtn5').prop('disabled', false);
                    }
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                    $('#result5').html('<div class="alert alert-danger">Submission failed. Please try again.</div>');
                    $('#submitbtn5').prop('disabled', false);
                }
            });
        });
    });
</script>