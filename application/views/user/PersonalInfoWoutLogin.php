<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$page_title = "";
$position='center';
require_once(APPPATH."views/includes/header.php");
ini_set('memory_limit', '2048M');
?>

<link href="<?php print base_url('assets/css/application.css') ?>" rel="stylesheet">

<body>


<?php require_once(VIEW_URL."includes/hidden.php");?>
<div class="container text-center" style="margin-top: 10px;">
    <?php require_once(VIEW_URL."includes/banner.php");?>
</div>


<div class="content-wrapper" id="container" style="position:relative; top: 0px; background-color: #ffffff;">

    <div class="container">
        <div class="row" style="margin: 10px;margin-top: 0px;">

            <div class="col-lg-6 col-lg-offset-3">
                <fieldset style="padding-top: 10px;">
                    <div class="text-center">
                        <a href="<?php print CTR_URL; ?>Authentication" style="color: #428bca;font-size: 14px;">Back to Login</a>
                    </div>
                </fieldset>

                <fieldset class="myfieldset">
                    <legend class="mylegend">Personal Contact Information</legend>

                    <div id="personal_info">

                        <div class="note text-mutted" align="justify">Thank you for completing this form honestly and accurately.  Completing this before your arrival will help save you time and allow us to spend more valuable time with you during your consultation.  We look forward to meeting you soon and are always available at info@351face.com or by phone at (513) 351.3223 (FACE).</div>

                        <section class="col col-12" style="padding: 0px;">

                            <form name='frm' id='frm' action="">
                                <div id="data_personal_info"></div>

                                <div class="col-sm-12">
                                    <?php
                                    //var_dump($personal_info);
                                    $json=stripslashes(html_entity_decode($personal_info['data'][0]['json']));//echo $json;
                                    $arr_question= json_decode($json, true);
                                    ?>
                                    <input type="hidden" datafld="ignore" name="json" id="json" value="<?php echo $json;?>">

                                    <?php
                                    if(!is_array($arr_question))
                                    {echo 'Conection lost or bad ID.';die();}
                                    foreach($arr_question as $key => $value)
                                    {

                                        ?>
                                        <input type="hidden" name="__kp_PERSONAL_INFO_TEMP_ID" id="__kp_PERSONAL_INFO_TEMP_ID" value="<?php echo $personal_info['data'][0]['__kp_PERSONAL_INFO_TEMP_ID'];?>">
                                        <?php

                                        $i = 1;
                                        foreach ($value["Questions"] as $key => $valueQuest)
                                        {
                                            if($i % 2)
                                            print '<div class="row">';
                                            ?>
                                                <div class="col-sm-12 col-md-6 col-lg-6 form-group">


                                                    <?php
                                                    if (empty($valueQuest["Answers"]))
                                                    {
                                                        ?>
                                                        <label><?php echo $valueQuest["Question_Name"]; ?></label><br>
                                                        <input type="text" class="form-control required" name="inp_<?php echo $valueQuest["Question_Id"]; ?>" id="inp_<?php echo $valueQuest["Question_Id"];?>">
                                                        <br>
                                                        <?php
                                                    }
                                                    elseif (!empty($valueQuest["Answers"]))
                                                    {
                                                    ?>
                                                        <fieldset id="fieldset_contact" class="myfieldset" style="margin-top: 0px;">
                                                            <legend id="legend_contact" class="mylegend"><?php echo $valueQuest["Question_Name"]; ?></legend>

                                                            <?php
                                                            $j = 0;
                                                            foreach ($valueQuest["Answers"] as $key_ans => $value_ans)
                                                            {

                                                                if ($valueQuest["Multichoice"] == '2')
                                                                {//echo $valueQuest["multichoice"];
                                                                    ?>
                                                                    <label>
                                                                        <input type="radio" name="rad_<?php echo $valueQuest["Question_Id"];?>" id="rad_<?php echo $valueQuest["Question_Id"];?>" value="<?php echo $value_ans["Answer_Id"];?>" <?php if ($j == 0) echo 'checked'; ?>>
                                                                        <?php echo $value_ans["Answer_Name"]; ?>
                                                                    </label><br>
                                                                    <?php
                                                                }
                                                                else if ($valueQuest["Multichoice"] == '1')
                                                                {
                                                                    ?>
                                                                    <label>
                                                                        <input type="checkbox" name="cbx_<?php echo $valueQuest["Question_Id"].'-'.$value_ans["Answer_Id"];?>" id="cbx_<?php echo $valueQuest["Question_Id"].'-'.$value_ans["Answer_Id"];?>">
                                                                        <?php echo $value_ans["Answer_Name"]; ?>
                                                                    </label><br>
                                                                    <?php
                                                                }
                                                                $j++;


                                                            }
                                                            ?>

                                                        </fieldset>

                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            <?php
                                            $i++;

                                            if($i % 2)
                                            print '</div>';
                                        }
                                    }
                                    ?>
                                </div>

                                <div class="col-sm-12 col-md-6 col-lg-6 form-group pull-right">
                                    <button type="button" datafld="PHP_Patients" datatype="UPDATE" id="btn_save_personal_info" class="btn btn-success">Save</button>
                                </div>
                            </form>

                        </section>

                    </div>

                </fieldset>

                <fieldset style="padding-top: 10px;">
                    <div class="text-center">
                        <a href="<?php print CTR_URL; ?>Authentication" style="color: #428bca;font-size: 14px;">Back to Login</a>
                    </div>
                </fieldset>
            </div>

        </div>
    </div>

</div>

<?php require_once(VIEW_URL."includes/footer_scripts.php");?>
<?php require_once(VIEW_URL."includes/footer.php");?>

<script type="text/javascript">

    /*-------------------DO NOT CHANGE THE CODE-------------------*/

    function SaveContent(url, array_inputs)
    {
        $( '.content-wrapper' ).empty();
        var target = document.getElementById('container');
        var spinner = new Spinner(opts).spin(target);

        $.ajax({
            type: "POST",
            dataType: "html",
            url: url,
            data:array_inputs
        }).done(function(response, textStatus, jqXHR)
        {
            if(response!='1')
            {
                if($.isNumeric(response)){alertify.success('Data Saved.');}
                else{alertify.error('Error: The element could not be Saved. '+ response);}
                spinner.stop();
                LoadContent($('#view').val());
            }
            else
                window.location.replace("Authentication");
        }).fail(function(jqHTR, textStatus, thrown)
        {
            alertify.error('Something wrong with AJAX:' + textStatus);
        });
    }

    /*-------------------DO NOT CHANGE THE CODE-------------------*/

    $(document).ready(function()
    {
        Load();

        function Load()
        {
            LoadDataPersonalInfo();
        }

        function LoadDataPersonalInfo()
        {
            var target = document.getElementById('container');
            var spinner = new Spinner(opts).spin(target);

            $.ajax({
                url: 'GetViewWoutLogin',
                type: 'POST',
                data: {view_url1:'user/InputsAddPersonalInfo',view_url2:'user/InputsAddPersonalInfoScriptWoutLogin'}
            }).done(function(response, textStatus, jqXHR)
            {
                if(response)
                {
                    $('#data_personal_info').html(response);
                    spinner.stop();
                }
            });
        }
    });

</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5a14683d198bd56b8c03c7bd/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>