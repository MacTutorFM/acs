<div class="col-sm-12">

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>User ID</label>
            <input datafld="ignore" type="text" name="bd_user_name" id="bd_user_name" class="form-control required"  value="<?php if(isset($data['user']['data'][0]['bd_user_name'])) print $data['user']['data'][0]['bd_user_name'];?>" />
            <input datafld="ignore" type="hidden" name="id" id="id" class="form-control"  value="<?php if(isset($data['user']['data'][0]['RecordID'])) print $data['user']['data'][0]['RecordID'];?>" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Salutation</label>
            <input datafld="ignore" type="text" name="bd_Salutation" id="bd_Salutation" class="form-control required"  value="<?php if(isset($data['user']['data'][0]['bd_Salutation'])) print $data['user']['data'][0]['bd_Salutation'];?>" />
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>First Name</label>
            <input datafld="ignore" type="text" name="bd_FirstName" id="bd_FirstName" class="form-control required"  value="<?php if(isset($data['user']['data'][0]['bd_FirstName'])) print $data['user']['data'][0]['bd_FirstName'];?>" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Middle Name (Initial)</label>
            <input datafld="ignore" type="text" name="bd_MiddleInitial" id="bd_MiddleInitial" class="form-control"  value="<?php if(isset($data['user']['data'][0]['bd_MiddleInitial'])) print $data['user']['data'][0]['bd_MiddleInitial'];?>" />
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Last Name</label>
            <input datafld="ignore" type="text" name="bd_LastName" id="bd_LastName" class="form-control required" value="<?php if(isset($data['user']['data'][0]['bd_LastName'])) print $data['user']['data'][0]['bd_LastName'];?>" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Email address</label>
            <input datafld="ignore" type="email" name="bd_user_email" id="bd_user_email" class="form-control required"  value="<?php if(isset($data['user']['data'][0]['bd_user_email'])) print $data['user']['data'][0]['bd_user_email'];?>" />
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Date of Birth</label>
            <input datafld="ignore" type="text" name="bd_DateOfBirth" id="bd_DateOfBirth" class="form-control required"  value="<?php if(isset($data['user']['data'][0]['bd_DateOfBirth'])) print $data['user']['data'][0]['bd_DateOfBirth'];?>" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Phone</label>
            <input datafld="ignore" type="text" name="bd_Phone" id="bd_Phone" class="form-control required"  value="<?php if(isset($data['user']['data'][0]['bd_Phone'])) print $data['user']['data'][0]['bd_Phone'];?>" />
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Cell</label>
            <input datafld="ignore" type="text" name="bd_Cell" id="bd_Cell" class="form-control required"  value="<?php if(isset($data['user']['data'][0]['bd_Cell'])) print $data['user']['data'][0]['bd_Cell'];?>" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Address 1</label>
            <input datafld="ignore" type="text" name="bd_Address1" id="bd_Address1" class="form-control required"  value="<?php if(isset($data['user']['data'][0]['bd_Address1'])) print $data['user']['data'][0]['bd_Address1'];?>" />
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Address 2</label>
            <input datafld="ignore" type="text" name="bd_Address2" id="bd_Address2" class="form-control"  value="<?php if(isset($data['user']['data'][0]['bd_Address2'])) print $data['user']['data'][0]['bd_Address2'];?>" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>City</label>
            <input datafld="ignore" type="text" name="bd_City" id="bd_City" class="form-control required"  value="<?php if(isset($data['user']['data'][0]['bd_City'])) print $data['user']['data'][0]['bd_City'];?>" />
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>State</label>
            <input datafld="ignore" type="text" name="bd_State" id="bd_State" class="form-control required"  value="<?php if(isset($data['user']['data'][0]['bd_State'])) print $data['user']['data'][0]['bd_State'];?>" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Country</label>
            <input datafld="ignore" type="text" name="bd_Country" id="bd_Country" class="form-control required"  value="<?php if(isset($data['user']['data'][0]['bd_Country'])) print $data['user']['data'][0]['bd_Country'];?>" />
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Zip Code</label>
            <input datafld="ignore" type="text" name="bd_ZipCode" id="bd_ZipCode" class="form-control required"  value="<?php if(isset($data['user']['data'][0]['bd_ZipCode'])) print $data['user']['data'][0]['bd_ZipCode'];?>" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Social Security</label>
            <input datafld="ignore" type="text" name="bd_SocialSecurity" id="bd_SocialSecurity" class="form-control"  value="<?php if(isset($data['user']['data'][0]['bd_SocialSecurity'])) print $data['user']['data'][0]['bd_SocialSecurity'];?>" />
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <fieldset id="fieldset_contact" class="myfieldset" style="margin-top: 0px;">
                <legend id="legend_contact" class="mylegend">Best manner to be reached</legend>

                <label><input datafld="ignore" type="checkbox" name="bd_PreferredReminderContact_Type_1" id="bd_PreferredReminderContact_Type_1" class="cbx_contact" value="phone_mobile" <?php if(isset($data['user']['data'][0]['bd_PreferredReminderContact_Type']) && $data['user']['data'][0]['bd_PreferredReminderContact_Type']=='phone_mobile') print 'checked';?>/> Cell Phone</label><br>
                <label><input datafld="ignore" type="checkbox" name="bd_PreferredReminderContact_Type_2" id="bd_PreferredReminderContact_Type_2" class="cbx_contact" value="phone_home" <?php if(isset($data['user']['data'][0]['bd_PreferredReminderContact_Type']) && $data['user']['data'][0]['bd_PreferredReminderContact_Type']=='phone_home') print 'checked';?>/> Home Phone</label><br>
                <label><input datafld="ignore" type="checkbox" name="bd_PreferredReminderContact_Type_3" id="bd_PreferredReminderContact_Type_3" class="cbx_contact" value="phone_work" <?php if(isset($data['user']['data'][0]['bd_PreferredReminderContact_Type']) && $data['user']['data'][0]['bd_PreferredReminderContact_Type']=='phone_work') print 'checked';?>/> Work Phone</label><br>
                <label><input datafld="ignore" type="checkbox" name="bd_PreferredReminderContact_Type_4" id="bd_PreferredReminderContact_Type_4" class="cbx_contact" value="sms_text" <?php if(isset($data['user']['data'][0]['bd_PreferredReminderContact_Type']) && $data['user']['data'][0]['bd_PreferredReminderContact_Type']=='sms_text') print 'checked';?>/> Text Message</label><br>
                <label><input datafld="ignore" type="checkbox" name="bd_PreferredReminderContact_Type_5" id="bd_PreferredReminderContact_Type_5" class="cbx_contact" value="email_primary" <?php if(isset($data['user']['data'][0]['bd_PreferredReminderContact_Type']) && $data['user']['data'][0]['bd_PreferredReminderContact_Type']=='email_primary') print 'checked';?>/> E-mail Address</label><br>
                <label><input datafld="ignore" type="checkbox" name="bd_PreferredReminderContact_Type_6" id="bd_PreferredReminderContact_Type_6" class="cbx_contact" value="no" <?php if(isset($data['user']['data'][0]['bd_PreferredReminderContact_Type']) && $data['user']['data'][0]['bd_PreferredReminderContact_Type']=='no') print 'checked';?>/> Do Not Contact me</label><br>

            </fieldset>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <fieldset class="myfieldset myfieldset_child" style="margin-top: 0px;">
                <legend class="mylegend mylegend_child">Marital Status</legend>

                <label><input datafld="ignore" type="radio" name="bd_MaritalStatus" class="required" value="S" <?php if(isset($data['user']['data'][0]['bd_MaritalStatus']) && $data['user']['data'][0]['bd_MaritalStatus']=='S') print 'checked';?>/> Single</label><br>
                <label><input datafld="ignore" type="radio" name="bd_MaritalStatus" value="M" <?php if(isset($data['user']['data'][0]['bd_MaritalStatus']) && $data['user']['data'][0]['bd_MaritalStatus']=='M') print 'checked';?>/> Married</label><br>
                <label><input datafld="ignore" type="radio" name="bd_MaritalStatus" value="D" <?php if(isset($data['user']['data'][0]['bd_MaritalStatus']) && $data['user']['data'][0]['bd_MaritalStatus']=='D') print 'checked';?>/> Divorced</label><br>
                <label><input datafld="ignore" type="radio" name="bd_MaritalStatus" value="W" <?php if(isset($data['user']['data'][0]['bd_MaritalStatus']) && $data['user']['data'][0]['bd_MaritalStatus']=='W') print 'checked';?>/> Widowed</label><br>
                <label><input datafld="ignore" type="radio" name="bd_MaritalStatus" value="O" <?php if(isset($data['user']['data'][0]['bd_MaritalStatus']) && $data['user']['data'][0]['bd_MaritalStatus']=='O') print 'checked';?>/> Other</label><br>

            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <fieldset class="myfieldset myfieldset_child" style="margin-top: 0px;">
                <legend class="mylegend mylegend_child">Gender</legend>

                <label><input datafld="ignore" type="radio" name="bd_Sex" class="required" value="M" <?php if(isset($data['user']['data'][0]['bd_Sex']) && $data['user']['data'][0]['bd_Sex']=='M') print 'checked';?>/> Male</label><br>
                <label><input datafld="ignore" type="radio" name="bd_Sex" value="F" <?php if(isset($data['user']['data'][0]['bd_Sex']) && $data['user']['data'][0]['bd_Sex']=='F') print 'checked';?>/> Female</label><br>

            </fieldset>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <fieldset class="myfieldset myfieldset_child" style="margin-top: 0px;">
                <legend class="mylegend mylegend_child">Employment Status</legend>

                <label><input datafld="ignore" type="radio" name="bd_EmployStatus" class="required" value="F" <?php if(isset($data['user']['data'][0]['bd_EmployStatus']) && $data['user']['data'][0]['bd_EmployStatus']=='F') print 'checked';?>/> Full-time</label><br>
                <label><input datafld="ignore" type="radio" name="bd_EmployStatus" value="P" <?php if(isset($data['user']['data'][0]['bd_EmployStatus']) && $data['user']['data'][0]['bd_EmployStatus']=='P') print 'checked';?>/> Part-time</label><br>
                <label><input datafld="ignore" type="radio" name="bd_EmployStatus" value="N" <?php if(isset($data['user']['data'][0]['bd_EmployStatus']) && $data['user']['data'][0]['bd_EmployStatus']=='N') print 'checked';?>/> Not Employed outside the home</label><br>

            </fieldset>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Employer Name</label>
            <input datafld="ignore" type="text" name="bd_Wrk_Name" id="bd_Wrk_Name" class="form-control" value="<?php if(isset($data['user']['data'][0]['bd_Wrk_Name'])) print $data['user']['data'][0]['bd_Wrk_Name'];?>" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Employer Address</label>
            <input datafld="ignore" type="text" name="bd_Wrk_Address" id="bd_Wrk_Address" class="form-control" value="<?php if(isset($data['user']['data'][0]['bd_Wrk_Address'])) print $data['user']['data'][0]['bd_Wrk_Address'];?>" />
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Employer Zip Code</label>
            <input datafld="ignore" type="text" name="bd_Wrk_ZipCode" id="bd_Wrk_ZipCode" class="form-control" value="<?php if(isset($data['user']['data'][0]['bd_Wrk_ZipCode'])) print $data['user']['data'][0]['bd_Wrk_ZipCode'];?>" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Employer City</label>
            <input datafld="ignore" type="text" name="bd_Wrk_City" id="bd_Wrk_City" class="form-control" value="<?php if(isset($data['user']['data'][0]['bd_Wrk_City'])) print $data['user']['data'][0]['bd_Wrk_City'];?>" />
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Employer Country</label>
            <input datafld="ignore" type="text" name="bd_Wrk_Country" id="bd_Wrk_Country" class="form-control" value="<?php if(isset($data['user']['data'][0]['bd_Wrk_Country'])) print $data['user']['data'][0]['bd_Wrk_Country'];?>" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Employer Phone</label>
            <input datafld="ignore" type="text" name="bd_Wrk_Phone" id="bd_Wrk_Phone" class="form-control" value="<?php if(isset($data['user']['data'][0]['bd_Wrk_Phone'])) print $data['user']['data'][0]['bd_Wrk_Phone'];?>" />
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Whom may we thank for your referral?</label>
            <input datafld="ignore" type="text" name="bd_PatientReferral" id="bd_PatientReferral" class="form-control" value="<?php if(isset($data['user']['data'][0]['bd_PatientReferral'])) print $data['user']['data'][0]['bd_PatientReferral'];?>" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <fieldset class="myfieldset myfieldset_child" style="margin-top: 0px;">
                <legend class="mylegend mylegend_child">Student Status</legend>

                <label><input datafld="ignore" type="radio" name="bd_StudentStatus" id="bd_StudentStatus" class="required" value="F" <?php if(isset($data['user']['data'][0]['bd_StudentStatus']) && $data['user']['data'][0]['bd_StudentStatus']=='F') print 'checked';?>/> Full-time</label><br>
                <label><input datafld="ignore" type="radio" name="bd_StudentStatus" id="bd_StudentStatus" value="P" <?php if(isset($data['user']['data'][0]['bd_StudentStatus']) && $data['user']['data'][0]['bd_StudentStatus']=='P') print 'checked';?>/> Part-time</label><br>
                <label><input datafld="ignore" type="radio" name="bd_StudentStatus" id="bd_StudentStatus" value="N" <?php if(isset($data['user']['data'][0]['bd_StudentStatus']) && $data['user']['data'][0]['bd_StudentStatus']=='N') print 'checked';?>/> Non-Student</label><br>

            </fieldset>
        </div>

    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Emergency Contact Name</label>
            <input datafld="ignore" type="text" name="bd_ICE_Name1" id="bd_ICE_Name1" class="form-control required"  value="<?php if(isset($data['user']['data'][0]['bd_ICE_Name1'])) print $data['user']['data'][0]['bd_ICE_Name1'];?>" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Emergency Contact Relationship</label>
            <input datafld="ignore" type="text" name="bd_ICE_Relationship1" id="bd_ICE_Relationship1" class="form-control required"  value="<?php if(isset($data['user']['data'][0]['bd_ICE_Relationship1'])) print $data['user']['data'][0]['bd_ICE_Relationship1'];?>" />
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 form-group">
            <label>Emergency Contact Phone</label>
            <input datafld="ignore" type="text" name="bd_ICE_Phone1" id="bd_ICE_Phone1" class="form-control required"  value="<?php if(isset($data['user']['data'][0]['bd_ICE_Phone1'])) print $data['user']['data'][0]['bd_ICE_Phone1'];?>" />
        </div>
    </div>



</div>

<script type="text/javascript">
    $(document).ready(function()
    {
        $(".my_select2").select2();

        $('.cbx_contact').on('click', function () {
            $('#fieldset_contact').css('border','1px solid #d7d7d7');
            $('#legend_contact').css('color','#000');
            $('#em_contact').remove();

        });

        $('body').on('change', '.my_select2', function () {
            $(this).valid();
        });
    });
</script>