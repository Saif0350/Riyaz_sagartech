<div class="modal-body">
    <form class="elementor-form" method="post" name="New Form">
        <div class="elementor-form-fields-wrapper elementor-labels-above">
            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-50 elementor-field-required">
                <label for="form-field-name" class="elementor-field-label">Personal Details</label>
                <input size="1" type="text" name="name" id="name" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Name" required="required" aria-required="true">
            </div>
            <div class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-field_83b5afd elementor-col-50">
                <label for="form-field-field_83b5afd" class="elementor-field-label">Email</label>
                <input size="1" type="email" name="email" id="email" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Email">
            </div>
            <div class="elementor-field-type-number elementor-field-group elementor-column elementor-field-group-field_f4f463a elementor-col-50">
                <label for="form-field-field_f4f463a" class="elementor-field-label">Phone Number</label>
                <input type="number" name="phone" id="phone" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Phone number" min="" max="">
            </div>
            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_efae453 elementor-col-50">
                <label for="form-field-field_efae453" class="elementor-field-label">Address</label>
                <input size="1" type="text" name="address" id="address" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Type your Address">
            </div>
            <div class="elementor-field-type-upload elementor-field-group elementor-column elementor-field-group-field_65ab18f elementor-col-100">
                <label for="form-field-field_65ab18f" class="elementor-field-label">Upload Your C.V</label>
                <input type="file" name="form_fields[field_65ab18f]" id="form-field-field_65ab18f" class="elementor-field elementor-size-sm  elementor-upload-field">                                                                                                                                             
            </div>
            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_00670f1 elementor-col-50">
                <label for="form-field-field_00670f1" class="elementor-field-label">Passport Details:</label>
                <input size="1" type="text" name="passport" id="passport" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Passport Number">
            </div>
            <div class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-field_e928a31 elementor-col-50">
                <label for="form-field-field_e928a31" class="elementor-field-label">Place of Issue:</label>
                <input size="1" type="text" name="poi" id="poi" class="elementor-field elementor-size-sm  elementor-field-textual" placeholder="Place of Issue">
            </div>
            <div class="elementor-field-type-date elementor-field-group elementor-column elementor-field-group-field_6f13790 elementor-col-50">
                <label for="form-field-field_6f13790" class="elementor-field-label">Date of Birth:</label>                                                                                                                                                                                
                <input type="text" name="dob" id="dob" class="elementor-field elementor-size-sm elementor-field-textual elementor-date-field flatpickr-input active" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
            </div>
            <div class="elementor-field-type-date elementor-field-group elementor-column elementor-field-group-field_3534156 elementor-col-50">
                <label for="form-field-field_3534156" class="elementor-field-label">Date of Issue:</label>                                                                                
                <input type="text" name="doi" id="doi" class="elementor-field elementor-size-sm elementor-field-textual elementor-date-field flatpickr-input" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
            </div>
            <div class="elementor-field-type-date elementor-field-group elementor-column elementor-field-group-field_addd86a elementor-col-50">
                <label for="form-field-field_addd86a" class="elementor-field-label">Date of Expiry:</label>                                                                                
                <input type="text" name="doe" id="doe" class="elementor-field elementor-size-sm elementor-field-textual elementor-date-field flatpickr-input" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
            </div>
            <div class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                <button type="submit" name="submit" class="elementor-button elementor-size-sm">
                    <span>
                        <span class=" elementor-button-icon"></span>
                        <span class="elementor-button-text">Send Mail</span>
                    </span>
                </button>
            </div>
        </div>
    </form>
</div>
    <?php if(!empty($statusMsg)){ ?>
        <p><?php echo $statusMsg; ?></p>
    <?php } ?>
