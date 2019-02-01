@extends('layouts.master')

@section('title')
    FAQ
@endsection

@section('content')
    <script>

        $(document).ready(function(){
            $('[data-toggle="popover"]').popover({html: true});
        });


        function toggleFAQ(id)
        {

            $('[id^=answer]').hide(0);
            $('#answer_'+id).show(0);
            $('[class^=qa]').css('background-color','#fff');
            $('.qa_'+id).css('background-color','#eee');
        }// ---- end toggleFAQ

    </script>

    <div class='container'>
        <h2>FAQ<br><small>Below is a list of frequently asked questions.</small></h2>

        <table class='table table-striped table-hover'>
            <tr class='qa_3'>
                <td id='question_3' style='font-weight: bold;'><a href='javascript:toggleFAQ(3);'>I registered but did not get a confirmation email (or can't find it).</a></td>
            </tr>
            <tr class='qa_3'>
                <td id='answer_3' style='display: none;'>First things first - check your <em>junk</em> and/or <em>spam</em> filter for an email from noreply@zippyreg2.com (or the name of the race for which you registered, since sometimes this will appear in the "from" field.) If you find it, mark it as "safe" in your email program so you will get future emails.
                    <br><br>
                    If you don't find anything from either email address, send us an email at <a href='mailto:info@zippyreg.com' target='blank'>info@zippyreg.com</a> with the words "[Event Name] Confirmation Email needed" in the subject line (replace "Event Name" with the name of the event in question) and we will re-send the email to you from an account managed by one of our human beings.
                    <p></td>
            </tr>
            <tr class='qa_1'>
                <td id='question_1' style='font-weight: bold;'><a href='javascript:toggleFAQ(1);'>How do I update my personal information on my completed registration? (i.e. spelling, address/name change, etc.)</a></td>
            </tr>
            <tr class='qa_1'>
                <td id='answer_1' style='display: none;'>To update your information, you will need your confirmation code. Your confirmation code was sent to you via email when you completed and paid for your registration.
                    <br><br>
                    Go to <a href='http://www.zippyreg.com/zippy/index.php?view=confirm' target='blank'>www.ZippyReg2.com</a> and enter your code when prompted. This will bring you to your personal registration page where you can update certain fields in your registration. For anything you are unable to change, just click on <a href='https://www.zippyreg2.com/online_reg/reg_inquiry.php?' target='blank'>Request a Personal Data Change/Contact Us</a> and let us know what needs to be updated. You will receive a response from the ZippyReg team once the update has been made, or if additional information is needed.
                    <p></td>
            </tr>
            <tr class='qa_2'>
                <td id='question_2' style='font-weight: bold;'><a href='javascript:toggleFAQ(2);'>I have tried multiple times to register but can never get to the payment screen. Help!</a></td>
            </tr>
            <tr class='qa_2'>
                <td id='answer_2' style='display: none;'>How frustrating! We're here to help. The best thing to do is contact us directly so we can see exactly what issue you are having. Send us an email (screenshots are incredibly helpful!) to  <a href='mailto:info@zippyreg2.com' target='blank'>info@zippyreg2.com</a> or give us a call between 8:30 am and 4:30 pm ET at (518) 320-8648.
                    <p></td>
            </tr><tr class='qa_6'>
                <td id='question_6' style='font-weight: bold;'><a href='javascript:toggleFAQ(6);'>Where can I find my confirmation code?</a></td>
            </tr>
            <tr class='qa_6'>
                <td id='answer_6' style='display: none;'>Your confirmation code was sent to you via email when you completed and paid for your registration. If you are unable to find that email, fill out a <a href='https://www.zippyreg2.com/online_reg/reg_inquiry.php' target='blank'>Registration Inquiry </a>and the ZippyReg team will respond with your confirmation code.
                    <p></td>
            </tr><tr class='qa_4'>
                <td id='question_4' style='font-weight: bold;'><a href='javascript:toggleFAQ(4);'>Where do I find race-day information?</a></td>
            </tr>
            <tr class='qa_4'>
                <td id='answer_4' style='display: none;'>Everything you need to know about your event is going to be on the event website (if there is one). <a href='http://www.zippyreg2.com/zippy/index.php?view=register' target='blank'>Go here</a> to see all events using ZippyReg for online registration (or Google the event name).
                    <p></td>
            </tr><tr class='qa_5'>
                <td id='question_5' style='font-weight: bold;'><a href='javascript:toggleFAQ(5);'>How do I confirm that I am registered?</a></td>
            </tr>
            <tr class='qa_5'>
                <td id='answer_5' style='display: none;'>When you completed and paid for your registration you should have received an email confirmation. Check your inbox and spam/junk folder for an email with the email extension "@zippyreg2.com" or the name of the event.
                    <br><br>
                    You can also visit the <strong>Confirmed Entrants</strong> page for your event (linked at the bottom of the registration page for each event OR by going to <a href='http://www.zippyreg2.com/zippy/index.php?view=confirm' target='blank'>www.zippyreg2.com</a> and searching for the event by date.) Type your last name into the appropriate search box, and then click <b>Search</b> - if your name appears, you're all set!
                    <br><br>
                    If you don't see your name, it could mean that there was a spelling error (i.e. you accidentally typed "Smiith" on your registration) or you inadvertently entered your name as "Smith John" instead of "John Smith". Or, it could be that when you were completing the registration form that you only got part-way through the registration process, but never submitted payment. In either case, fill out a <a href='https://www.zippyreg.com/online_reg/reg_inquiry.php' target='blank'>Registration Inquiry</a> and the ZippyReg team will respond to confirm your registration (and/or fix any errors) or send you a link to submit payment.
                    <p></td>
            </tr><tr class='qa_7'>
                <td id='question_7' style='font-weight: bold;'><a href='javascript:toggleFAQ(7);'>I registered and paid my entry fee but now I'm unable to participate.</a></td>
            </tr>
            <tr class='qa_7'>
                <td id='answer_7' style='display: none;'><b>Can I get a refund?</b>
                    <br>As indicated at the time of registration prior to completing payment, entry fees are non-refundable. Please see the <a href='https://www.zippyreg2.com/online_reg/policies/reg_race_policy.php' target='blank'>ZippyReg Online Registration Policy</a> for more information.
                    <br><br>
                    <b>Can I defer to next year?</b>
                    <br>Most events do not offer deferrals; however, if deferrals are offered you will see the option to do so on your personal confirmation page (to get to this page, go to <a href='http://www.zippyreg2.com/zippy/index.php?view=confirm' target='blank'>www.ZippyReg2.com</a> and enter your confirmation code).
                    <br><br>
                    <b>Can I give my bib to a friend?</b>
                    <br>No. Per the <a href='https://www.zippyreg2.com/online_reg/policies/reg_race_policy.php' target='blank'>ZippyReg Online Registration Policy</a>, this is not allowed. You must complete the transfer process.
                    <p></td>
            </tr><tr class='qa_11'>
                <td id='question_11' style='font-weight: bold;'><a href='javascript:toggleFAQ(11);'>How do I defer my entry?</a></td>
            </tr>
            <tr class='qa_11'>
                <td id='answer_11' style='display: none;'><strong>Not all events allow deferrals. If your event allows deferrals, you can complete your deferral by following the instructions below.</strong>
                    <br><br>

                    1. Go to your personal confirmation
                    page (to do this go to <a href='http://www.zippyreg2.com/zippy/index.php?view=confirm' target='blank'>www.ZippyReg2.com</a> and enter your confirmation code) and click on <b>DEFER YOUR ENTRY,</b> at the top of the page.
                    <br><br>
                    2. Follow the instructions to process the deferral.
                    <br><br>
                    3. You must pay the deferral fee, dictated by the event in order to complete the deferral.
                    <br><br>
                    <u>PLEASE NOTE</u>: When you defer your registration you fully void your entry for the current year event. When online registration opens for the following year, you will receive a deferral code, which can be used to register without having to pay the registration fee.
                    <p></td>
            </tr><tr class='qa_10'>
                <td id='question_10' style='font-weight: bold;'><a href='javascript:toggleFAQ(10);'>How do I transfer my entry?</a></td>
            </tr>
            <tr class='qa_10'>
                <td id='answer_10' style='display: none;'>1. Go to your personal confirmation page (to do this go to <a href='http://www.zippyreg.com/zippy/index.php?view=confirm' target='blank'>www.ZippyReg.com</a> and enter your confirmation code) and click on <b>TRANSFER YOUR REGISTRATION</b> at the top of the page.
                    <br><br>
                    2. Follow the instructions to process the transfer.
                    <br><br>
                    3. You will receive a coupon code that you will need to give to the person taking your spot. The code is unique and valid only for the event you registered for (ie. 5k, 10k, etc). The person to whom you are transferring your entry must pay the transfer fee.
                    <br><br>
                    <u>PLEASE NOTE</u>::
                    <br><br>
                    - All transfers must be completed online prior to the posted cut-off time/date.
                    <br>
                    - All associated costs are NON-REFUNDABLE. If you desire reimbursement for your initial entry fee, this is solely achieved through your own arrangement with the person to whom you are transferring your registration. ZippyReg accepts no responsibility for third party transactions.
                    <br>
                    - When you transfer your registration to another person you fully void your registration and completely give up your right to participate in the event, even if the code is never used.
                    <br>
                    - The coupon code only transfers your entry fee. Any additional items, if applicable, are NOT transferred and must be purchased by the new entrant.
                    <p></td>
            </tr><tr class='qa_9'>
                <td id='question_9' style='font-weight: bold;'><a href='javascript:toggleFAQ(9);'>I received a transfer code that I want to use. What is the process?</a></td>
            </tr>
            <tr class='qa_9'>
                <td id='answer_9' style='display: none;'>1. Go to the <b>Online Registration Page</b>, click on <b>Participate</b> and enter the transfer code in the <b>Discount Code</b> box next to the desired event (remember, this must be the same event as the person whose transferred entry you are redeeming).
                    <br><br>
                    2. Complete the form and follow all prompts until you reach the payment screen. You must pay the transfer fee in order to complete your registration.
                    <br><br>
                    <u>PLEASE NOTE</u>: the entry fee will appear at the top of your registration form until you reach the final payment page, at which point the system will indicate that the discount code was accepted and you only owe the transfer fee.
                    <p></td>
            </tr><tr class='qa_8'>
                <td id='question_8' style='font-weight: bold;'><a href='javascript:toggleFAQ(8);'>My event offers two (or more) race distance options. Can I change races?</a></td>
            </tr>
            <tr class='qa_8'>
                <td id='answer_8' style='display: none;'>If the event allows race changes, you will see the option to do so on your personal confirmation page. Here's what you do:
                    <br><br>
                    1. Go to your personal confirmation page (to do this go to <a href='http://www.zippyreg.com/zippy/index.php?view=confirm' target='blank'>www.zippyreg.com</a> and enter your confirmation code) and click on <b>CHANGE YOUR RACE</b> at the top of the page.
                    <br><br>
                    2. Follow the instructions to select the desired race distance.
                    <br><br>
                    <u>PLEASE NOTE</u>: There are <b>NO REFUNDS</b> for any difference in entry fees; however, you will be prompted to pay the difference for any entry fees owed.
                    <p></td>
            </tr><tr class='qa_12'>
                <td id='question_12' style='font-weight: bold;'><a href='javascript:toggleFAQ(12);'>How do I create a team?</a></td>
            </tr>
            <tr class='qa_12'>
                <td id='answer_12' style='display: none;'>1. Go to the Online Registration Page and click on <b>CREATE TEAM</b>.
                    <br><br>
                    2. Enter a Team Name (please, keep it clean!) and select a Team Password (the password is only for you to access the Team Management page, the rest of your team does not need it to join). Select your Team Type and click <b>CONTINUE</b>.
                    <br><br>
                    3. A new window will open where you can complete the registration page for yourself. The event specific message will confirm whether you will be paying only for your own entry (i.e. your teammates will pay for themselves) or if you have the option to pay for your entire team.
                    <br><br>
                    Once you have completed and paid for your registration you will receive a confirmation email. At this point, you may invite others to join your team. Tell them to go to the Online Registration Page and click on <b>JOIN A TEAM</b> select your team name, and follow the steps.
                    <p></td>
            </tr><tr class='qa_13'>
                <td id='question_13' style='font-weight: bold;'><a href='javascript:toggleFAQ(13);'>I am the team captain. How can I see who has joined my team?</a></td>
            </tr>
            <tr class='qa_13'>
                <td id='answer_13' style='display: none;'>You will receive an email every time someone joins your team. Additionally, the password you created will allow you to access your Team Management page. There are two ways to get here:
                    <br><br>
                    1. Go to <a href='http://www.zippyreg.com/zippy/index.php?view=teams' target='blank'>www.ZippyReg.com</a>. Login using the password you made up when you created the team.
                    <br><br>
                    2. Go to your personal confirmation page and click on Team Management Page under the section called <b>BASIC PERSONAL DATA</b>. Login using the password you made up when you created the team.
                    <p></td>
            </tr><tr class='qa_14'>
                <td id='question_14' style='font-weight: bold;'><a href='javascript:toggleFAQ(14);'>I am the team captain. How do I add a person to my team who is already registered as an individual?</a></td>
            </tr>
            <tr class='qa_14'>
                <td id='answer_14' style='display: none;'>Go to your Team Management page and click the button that says <b>Add someone who is already registered</b>. When the dialogue box opens, enter their first AND last name and click <b>Find this person</b>. When you see the person's name, click <b>Add to Team</b>
                    <br><br>
                    <u>PLEASE NOTE</u>: If the person you wish to add to your team is already on another team, have that person complete a <a href='https://www.zippyreg.com/online_reg/reg_inquiry.php' target='blank'>Registration Inquiry</a> and indicate the team name they are on, and which team they want to join (i.e. your team). They must be removed from the original team before they can be added to yours.
                    <p></td>
            </tr><tr class='qa_15'>
                <td id='question_15' style='font-weight: bold;'><a href='javascript:toggleFAQ(15);'>I already registered as an individual. Can I be added to a team?</a></td>
            </tr>
            <tr class='qa_15'>
                <td id='answer_15' style='display: none;'>You sure can! Just ask the captain of the team you wish to join to add you through their Team Management Page. Be sure to let them know that you have already registered as an individual.
                    <br><br>
                    Once they have successfully added you, go to your personal confirmation page and look at the <b>Team Competition</b> field under <b>Basic Personal Data</b> to ensure you were added correctly.
                    <br><br>
                    <u>PLEASE NOTE</u>: If you are already registered for a team and want to switch to another team, complete a <a href='https://www.zippyreg.com/online_reg/reg_inquiry.php' target='blank'>Registration Inquiry</a> and indicate the team name you are currently on, and which team you want to join. You must be removed from a team before you can be added to a new one.
                    <p></td>
            </tr><tr class='qa_16'>
                <td id='question_16' style='font-weight: bold;'><a href='javascript:toggleFAQ(16);'>My friend created a team for an event. How do I join? </a></td>
            </tr>
            <tr class='qa_16'>
                <td id='answer_16' style='display: none;'>Go to the Online Registration Page, click on <b>JOIN A TEAM</b> and select your Team Name. Follow the steps to complete the registration for yourself. Remember, you will need to pay for your own entry fee.
                    <p></td>
            </tr><tr class='qa_17'>
                <td id='question_17' style='font-weight: bold;'><a href='javascript:toggleFAQ(17);'>How can I tell if I am on a team?</a></td>
            </tr>
            <tr class='qa_17'>
                <td id='answer_17' style='display: none;'>There are two ways to check:
                    <br><br>
                    1. Go to your personal confirmation page and scroll to the section called <b>Basic Personal Data</b>. If you see your team next to the <b>Team Competition</b> field, you're on the team!
                    <br><br>
                    2. Go to the Confirmed Entrants page and type your last name into the appropriate search box, and then click <b>Search</b>. When you see your name, if there is a team name inside a set of brackets [Team Name Here] then you are on a team!
                    <p></td>
            </tr><tr class='qa_18'>
                <td id='question_18' style='font-weight: bold;'><a href='javascript:toggleFAQ(18);'>I registered as an Individual but now want to create a team with other runners. How do I do that?</a></td>
            </tr>
            <tr class='qa_18'>
                <td id='answer_18' style='display: none;'>You can create a team from your personal confirmation page:
                    <br><br>
                    1. Scroll to the section titled <b>Basic Personal Data</b> and look for the grey bar called <b>Team Competition</b>.
                    <br><br>
                    2. Click the link to create the team (please note you will have to confirm that you want to create a team by clicking the yellow button) and complete the fields in the dialogue box.
                    <p></td>
            </tr><tr class='qa_19'>
                <td id='question_19' style='font-weight: bold;'><a href='javascript:toggleFAQ(19);'>I created a team and registered myself as the captain, but my team name does not appear on the drop-down (or when I type in the name, it says the team is already full).</a></td>
            </tr>
            <tr class='qa_19'>
                <td id='answer_19' style='display: none;'>It's possible that your entry is incomplete due to a lack of payment (or an entry that you started but then cancelled, after creating a team). No worries! Just send us an email at <a href='mailto:info@zippyreg.com' target='blank'>info@zippyreg.com </a> with the specifics (your name, your team name, and the exact nature of the issue) and someone from the ZippyReg team will provide you with assistance.
                    <p></td>
            </tr></table></div>
@endsection