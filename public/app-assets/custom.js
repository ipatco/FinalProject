function addEligibility() {
    $('.addEligibility').append('<div class="controls mb-1"><input type = "text" name = "text[]" class= "form-control" required></div>')
}


function addWhatYouWillLearn() {
    $('.addWhatYouWillLearn').append('<div class="controls mb-1"><input type = "text" name = "text[]" class= "form-control" required></div>')
}


function addSkill() {
    $('.addSkill').append('<div class="controls mb-1"><input type = "text" name = "text[]" class= "form-control" required></div>')
}


function addTools() {
    $('.addTools').append('<div class="controls mb-1"><input type = "file" name = "file[]" class= "form-control" required></div>')
}


function addFaq() {
    $('.addFaq').append('<div class="col-lg-12 col-md-12 myCard mb-3">\
        <div div class= "form-group" >\
                <h5>Question<span class="required">*</span></h5>\
                <div class="controls mb-1">\
                    <input type="text" name="question[]" class="form-control" required data-validation-required-message="This field is required">\
                </div>\
            </div>\
            <input type="hidden" name="id[]">\
            <div class="form-group">\
                <h5>Answer <span class="required">*</span></h5>\
                <div class="controls mb-1">\
                    <textarea name="answer[]" class="form-control" required data-validation-required-message="This field is required"></textarea>\
                </div>\
            </div>\
        </div>')
}

function editBenifit(id, title, type, img) {
    $('#editBenifitTitle').val(title);
    $('#editBenifitType').val(type);
    $('#editBenifitId').val(id);
    $('#editBenifitImg').val(img);
}


function addModule() {
    $('.addModule').append('<div class="col-lg-12 col-md-12 myCard mb-3">\
        <div div class= "form-group" >\
                <h5>Title<span class="required">*</span></h5>\
                <div class="controls mb-1">\
                    <input type="text" name="question[]" class="form-control" required data-validation-required-message="This field is required">\
                </div>\
            </div>\
            <input type="hidden" name="id[]">\
            <div class="form-group">\
                <h5>Description <span class="required">*</span></h5>\
                <div class="controls mb-1">\
                    <textarea name="answer[]" class="form-control" required data-validation-required-message="This field is required"></textarea>\
                </div>\
            </div>\
            <div class="form-group">\
                <h5> File <span class= "required" >*</span></h5>\
                <div class="controls mb-1">\
                    <input type="file" name="userfile[]" class="form-control" required data-validation-required-message="This field is required">\
                    <input type ="hidden" name="file_old[]" class ="form-control" required data-validation-required-message="This field is required" value="{{ $module->file }}">\
                </div>\
            </div>\
        </div>')
}


function addFee() {
    $('.addFee').append('<div class="col-lg-12 col-md-12 myCard mb-3">\
    <div class="form-group">\
        <h5>Date<span class="required">*</span></h5>\
        <div class="controls mb-1">\
            <input type="text" name="date[]" class="form-control" required data-validation-required-message="This field is required">\
            <input type ="hidden" name="id[]">\
            </div>\
        </div>\
        <div class="form-group">\
            <h5>Schedule<span class="required">*</span></h5>\
            <div class="controls mb-1">\
                <input type="text" name="session[]" class="form-control" required data-validation-required-message="This field is required">\
            </div>\
        </div>\
        <div class="form-group">\
            <h5>Weekday<span class="required">*</span></h5>\
            <div class="controls mb-1">\
                <input type="text" name="weekday[]" class="form-control" required data-validation-required-message="This field is required">\
            </div>\
        </div>\
    </div>')
}


function gotoUrl(url) {
    location.href = url;
}
