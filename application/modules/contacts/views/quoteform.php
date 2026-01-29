<div class="contact-form">
    <div class="contact-form-header">
        <div class="row">
            <div class="col-12">
                <h5><small style="font-weight:400;font-size:13px;">Request a Free Quote Today!</small> <a href="<?= $phonehtml ?>" style='color:white;float:right;'><i class="far fa-phone-volume"></i> <?= $phone ?></a></h5>
            </div>
        </div>
    </div>
    <form method="post" id="quoteform" onsubmit="return false">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-icon">
                        <i class="far fa-user-tie"></i>
                        <input type="text" class="form-control" name="name" placeholder="Your Name">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="form-icon">
                        <i class="fa-solid fa-phone"></i>
                        <input type="tel" class="form-control" name="phone" placeholder="Mobile Number">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <div class="form-icon">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" class="form-control" name="email" placeholder="Your Email">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <div class="form-icon">
                        <i class="fa-solid fa-briefcase"></i>
                        <select class="form-control" name="service_type">
                            <option value="">Select Service</option>
                            <option value="web-development">Website Development</option>
                            <option value="app-development">Mobile App Development</option>
                            <option value="seo-services">SEO Services</option>
                            <option value="crm-erp">CRM/ERP Solutions</option>
                            <option value="lead-generation">Lead Generation</option>
                            <option value="hosting-domain">Hosting & Domain</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <div class="form-icon">
                        <i class="fa-solid fa-calendar"></i>
                        <input type="text" class="form-control" name="timeline" placeholder="Project Timeline">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <div class="form-icon">
                        <i class="fa-solid fa-dollar-sign"></i>
                        <input type="text" class="form-control" name="budget" placeholder="Budget Range">
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-icon">
                <i class="far fa-comment-lines"></i>
                <textarea name="message" cols="30" rows="5" class="form-control"
                    placeholder="Describe your project requirements"></textarea>
            </div>
        </div>
        <div id="resultquotefrom"></div>
        <button id="submitbquoteform" type="submit" class="theme-btn" style="background-color:#FBA707;">Submit <i class="far fa-paper-plane"></i></button>
        <button onclick="$('#resultquotefrom').html('');" type="reset" class="theme-btn" style="background-color:white;color:#A0A0A0;">Clear <i class="far fa-trash-alt"></i></button>
    </form>
</div>
<script type="text/javascript">
    $(function() {
        $('#submitbquoteform').click(function() {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('contacts/booking') ?>",
                data: $("#quoteform").serialize(),
                beforeSend: function() {
                    $('#resultquotefrom').html('<p style="color:red">Please wait...</p>');
                },
                success: function(data) {
                    $('#resultquotefrom').empty();
                    if (data == '1') {
                        data = "<div class='alert alert-success'><p style='color:green;'>Thank you! Your quote request successfully submitted. We'll respond soon.</p></div>";
                        $("#quoteform").trigger('reset');
                        // Event snippet for Phone call lead conversion page
                        gtag('event', 'conversion', {
                            'send_to': 'AW-16778879117/JlJPCPjgvOwZEI3B5cA-'
                        });
                    }
                    $('#resultquotefrom').html(data);
                }
            });
        });
    });
</script>