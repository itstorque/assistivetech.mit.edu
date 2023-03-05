<!DOCTYPE html>

<html>

  <?php include 'includes/head.php'; ?>

  <body>

    <?php include 'includes/nav.php'; ?>

    <div style="margin: 0; background-color: var(--colorDarker); -webkit-transform:translate3d(0,0,0); height: 80vh; margin-top: 0px; padding-top: 20vh;">

      <center>

      <!--<div class="button loseAnimation" style="margin-bottom: -10px; width: 260px;" onclick="location.href='https://docs.google.com/forms/d/e/1FAIpQLSfYTAeoPAIKOhEMhkcQ4qO5xg0INRs0kh3AiOECHnrgkMPwMg/viewform?usp=sf_link​'"><center>Co-Designer Application</center></div>-->
      <br>
      <div class="button loseAnimation" style="margin-bottom: -10px; width: 260px;" onclick="location.href='https://docs.google.com/forms/d/e/1FAIpQLSeN9-AOi3jkfyRY5Y9TtWm5XZozCSTZbLfFXqSTtBl-fcZioQ/viewform?usp=sf_link'"><center>Member Interest Form</center></div>
  
    </div>

    <!--

    <div style="margin: 0; background-color: var(--colorMain); -webkit-transform:translate3d(0,0,0); height: auto; margin-top: 0px;">

      <h2 style="font-family: 'Raleway', sans-serif; padding-top: 110px; color: var(--colorDark); margin-left: 20%">Your Application</h2>

      <h2 style="font-family: 'Raleway', sans-serif; font-size: 20px; color: var(--colorDark); margin-left: 22%">All fields are required unless otherwise noted</h2>

        <div style="width:100%;height:10px"></div>

        <div class="" style="margin-left: 20%; width: 60%">

          <p class="fieldLabel" style="margin-bottom: 8px;">Apply to be a</p>


          <div class="flight-types">
            <input type="radio" name="appType" value="hacker" id="hacker" checked />
            <label for="hacker">
                Hacker
            </label>

            <input type="radio" name="appType" value="cod" id="cod" />
            <label for="cod">
                Co-Designer
            </label>

            <script>

            function removeErr() {

              errorBox.className = "hidden"

            }

            function raiseError(errTitle, errMsg, anim) {

              errorBox.className = ""

              if (anim) {

                $([document.documentElement, document.body]).animate({

                    scrollTop: $("#errorBox").offset().top - 84

                }, 200);

              }

              document.getElementById('errorTitle').innerHTML = "Error - " + errTitle

              if (errTitle == "Success") {

                document.getElementById('errorTitle').innerHTML = "Success"

              }

              document.getElementById('errorMsg').innerHTML = errMsg

            }

            $('input[name=appType]').change(function(){

              var value = $( 'input[name=appType]:checked' ).val();

              removeErr()

              if (value == "cod") {

                document.getElementById('CodApp').className = ""

                document.getElementById('hackApp').className = "hidden"

              } else if (value == "hacker") {

                raiseError("Application Not Online", "Only the Co-Designer Applications are live, come back to check on the hacker applications.", false)

                document.getElementById('CodApp').className = "hidden"

                document.getElementById('hackApp').className = ""

              }

            });

            </script>

          </div>

        </div>

          <div style="background-color: var(--colorDark); margin-top: 40px;" id="errorBox" class="hidden">

            <h2 style="font-family: 'Raleway', sans-serif; color: var(--colorW); margin-left: 20%; font-size: 30px; padding-top: 20px;" id="errorTitle">Error - Application Not Online</h2>

            <h2 style="font-family: 'Raleway', sans-serif; font-size: 18px; color: var(--colorW); margin-left: 22%; padding-bottom: 20px;" id="errorMsg">Only the Co-Designer Applications are live, come back to check on the hacker applications.</h2>

          </div>

        <div class="" id="hackApp" style="margin-left: 20%; width: 60%">

          <br>
          <br>

          <label class="fieldLabel" for="name">Name</label>

          <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input hackField" placeholder="Name" id="name" style="padding: 13px 13px 13px 54px;"/>

          <br>
          <br>

          <label class="fieldLabel" for="school">School</label>

          <input name="school" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input hackField" placeholder="School Name" id="school" style="padding: 13px 13px 13px 54px;"/>

          <br>
          <br>

          <label class="fieldLabel" for="major">Major/Department</label>

          <div class="help-tip">
              <p>AT projects are interdisciplinary! We're not looking for one major only.</p>
          </div>

          <input name="major" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input hackField" placeholder="Major" id="major" style="padding: 13px 13px 13px 54px;"/>

          <br>
          <br>

          <label class="fieldLabel" for="classPicker">Class Year</label>

          <div class="help-tip">
              <p>Your status if you are an undergrad, otherwise choose graduate student or specify MIT affiliate.</p>
          </div>

          <script>

            function toggleOtherClassYear() {

              let picker = document.getElementById("classPicker")

              if (picker.options[picker.selectedIndex].value == "0") {

                document.getElementById("otherClassYearContainer").classList.replace("hidden", "show")

              } else {

                document.getElementById("otherClassYearContainer").classList.replace("show", "hidden")

              }

            }

          </script>

          <select class="dropdown hackField" name="classPicker" style="text-align: left; margin-bottom:10px;" id="classPicker" onchange="toggleOtherClassYear()">
  					  <option value="">Class Year</option>
  					  <option value="1">Freshman</option>
  						<option value="2">Sophomore</option>
  						<option value="3">Junior</option>
  						<option value="4">Senior</option>
  						<option value="5">Graduate</option>
  						<option value="0">Other</option>
  				</select>

          <br>

          <div id="otherClassYearContainer" class="hidden">

            <br>

            <label class="fieldLabel" for="otherClassYear">Class Year - Other</label>

            <input name="otherClassYear" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input hackField" placeholder="Explain Other Class Year" id="otherClassYear" style="padding: 13px 13px 13px 54px;"/>

          </div>

          <br>

          <label class="fieldLabel" for="email">School Email</label>

          <input name="email" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input hackField" placeholder="Email" id="email" style="padding: 13px 13px 13px 54px;"/>

          <br>
          <br>

          <label class="fieldLabel" for="availablePicker1">Can you attend the dinner on Feb. 11 at 7:00 PM at the Microsoft NERD Center?</label>

          <div class="help-tip">
              <p>Explain any partial conflicts in "Other"</p>
          </div>

          <script>

            function toggleOtherAvailableStudent1() {

              let picker = document.getElementById("availablePicker1")

              if (picker.options[picker.selectedIndex].value == "3") {

                document.getElementById("halfS1Container").classList.replace("hidden", "show")

              } else {

                document.getElementById("halfS1Container").classList.replace("show", "hidden")

              }

            }
          </script>

          <select class="dropdown hackField" name="availablePicker1" style="text-align: left; margin-bottom:10px;" id="availablePicker1" onchange="toggleOtherAvailableStudent1()">
  					  <option value="">Pick Availablity</option>
  					  <option value="1">Yes</option>
  						<option value="0">No</option>
  						<option value="3">Other (Partial Conflict)</option>
  				</select>

          <br>

          <div id="halfS1Container" class="hidden">

            <br>

            <label class="fieldLabel" for="halfS1">Other Attendance</label>

            <input name="halfS1" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input hackField" placeholder="Explain Other Attendance" id="halfS1" style="padding: 13px 13px 13px 54px;"/>

          </div>

          <br>

          <label class="fieldLabel" for="availablePicker2">Can you attend the hackathon on Saturday March 2 at Beaverworks (Kendall Sq./MIT)?</label>

          <div class="help-tip">
              <p>Explain any partial conflicts in "Other"</p>
          </div>

          <script>

            function toggleOtherAvailableStudent2() {

              let picker = document.getElementById("availablePicker2")

              if (picker.options[picker.selectedIndex].value == "3") {

                document.getElementById("halfS2Container").classList.replace("hidden", "show")

              } else {

                document.getElementById("halfS2Container").classList.replace("show", "hidden")

              }

            }
          </script>

          <select class="dropdown hackField" name="availablePicker1" style="text-align: left; margin-bottom:10px;" id="availablePicker2" onchange="toggleOtherAvailableStudent2()">
  					  <option value="">Pick Availablity</option>
  					  <option value="1">Yes</option>
  						<option value="0">No</option>
  						<option value="3">Other (Partial Conflict)</option>
  				</select>


          <br>

          <div id="halfS2Container" class="hidden">

            <br>

            <label class="fieldLabel" for="halfS2">Other Attendance</label>

            <input name="halfS2" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input hackField" placeholder="Explain Other Attendance" id="halfS2" style="padding: 13px 13px 13px 54px;"/>

          </div>

          <br>

          <label class="fieldLabel" for="member1">(Optional) List your team members</label>

          <div class="help-tip">
              <p>You will also have a chance to modify/join a team later. MAKE SURE ALL MEMBERS OF YOUR TEAM REGISTER!!!</p>
          </div>

          <script>

            function checkmember(index) {

              base = "member"

              if (document.getElementById(base+index).value.replace(/ /g,"") == "") {

                for (i = index+1; i < 5; i++) {
                  document.getElementById(base+i).className = "validate[required,custom[onlyLetter],length[0,100]] feedback-input hackField hidden"
                  document.getElementById(base+i).value = ""
                }

              } else {

                document.getElementById(base+(index+1)).className = "validate[required,custom[onlyLetter],length[0,100]] feedback-input hackField"

              }

            }

            function composeHackApp() {

              removeErr()

              elements = document.getElementsByClassName("hackField")

              targets = Array.prototype.map.call(elements,
                      element =>
                      ({
                          val: element.value,
                          name: element.id
                      })
                  );

              name = targets.filter(flag => flag.name == "name")[0].val

              school = targets.filter(flag => flag.name == "school")[0].val

              major = targets.filter(flag => flag.name == "major")[0].val

              classVal = targets.filter(flag => flag.name == "classPicker")[0].val

              classOther = targets.filter(flag => flag.name == "otherClassYear")[0].val

              email = targets.filter(flag => flag.name == "email")[0].val

              av1 = targets.filter(flag => flag.name == "availablePicker1")[0].val

              av2 = targets.filter(flag => flag.name == "availablePicker2")[0].val

              av1other = targets.filter(flag => flag.name == "halfS1")[0].val

              av2other = targets.filter(flag => flag.name == "halfS2")[0].val

              members = [targets.filter(flag => flag.name == "member1")[0].val, targets.filter(flag => flag.name == "member2")[0].val, targets.filter(flag => flag.name == "member3")[0].val, targets.filter(flag => flag.name == "member4")[0].val]

              interest = targets.filter(flag => flag.name == "interest")[0].val

              if (/^[a-zA-Z][a-zA-Z\s]+$/.test(name) == false) {

                raiseError("Name Invalid", "Names should be entered in alphabet characters only (A-Z)", true)

                return

              }

              if (school.replace(/ /g,"") == "") {

                raiseError("School Empty", "You did not provide your school name", true)

                return

              }

              if (major.replace(/ /g,"") == "") {

                raiseError("Major Empty", "You did not provide a major", true)

                return

              }

              if (classVal.replace(/ /g,"") == "") {

                raiseError("Form Incomplete", "You did not select your Class Year", true)

                return

              }

              if (classVal == 0) {

                if (classOther.replace(/ /g,"") == "") {

                  raiseError("Form Incomplete", "You did not describe your Class Year in Other", true)

                  return

                }

              }

              if ((/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) == false) {

                raiseError("Email Invalid", "Make sure you input an actual school email address (e.g. kerberos@mit.edu)", true)

                return

              }

              if (av1.replace(/ /g,"") == "") {

                raiseError("Form Incomplete", "You did not specify your availability for Feb. 11 at 7:00 PM", true)

                return

              }

              if (av2.replace(/ /g,"") == "") {

                raiseError("Form Incomplete", "You did not specify your availability for Saturday March 2", true)

                return

              }

              if (av1 == 3) {

                if (av1other.replace(/ /g,"") == "") {

                  raiseError("Form Incomplete", "You did not describe other attendance for Feb. 11", true)

                  return

                }

              }

              if (av2 == 3) {

                if (av2other.replace(/ /g,"") == "") {

                  raiseError("Form Incomplete", "You did not describe other attendance for Saturday March 2", true)

                  return

                }

              }

              if (interest.replace(/ /g,"") == "") {

                raiseError("Form Incomplete", "You did not explain why you are interested in participating in ATHack 2019", true)

                return

              }

              var filteredMembers = members.filter(function (el) {
                return el != "";
              });

              //"]{Name}{school*,*major*,*(1:freshman,2:Sophomore,3..4..5:Grad,0:Other)*,*Other}{email*,*Av1*,*Other1*,*Av2*,*Other2}{Team Member1%Team Member2}{Interest Question}"

              var data = "]{" + name + "}{"

              data = data + school + "*,*" + major + "*,*" + classVal + "*,*" + classOther + "}{"

              data = data + email + "*,*" + av1 + "*,*" + av1other+ "*,*" + av2 + "*,*" + av2other + "}{"

              data = data + filteredMembers.toString() + "}{"

              data = data + interest + "}"

              $.post("<?php echo $applicationDir; ?>" + "stuApp.txt", function( oldData ) {

                      data = data + "\n" + oldData;

                    }).always(function() {

                        $.post('./postApplication.php', { type: "stuApp", data: data }).fail(function() {

                            raiseError("A Problem Was Encountered", "Recording your application failed with error code 24, if the problem persists contact <a href='mailto:tareq@mit.edu'>tareq@mit.edu</a>", true)

                        }).done(function() {

                          raiseError("Success", "Yay! Your applicaion was recorded.", true)

                        });
                    });

            }

          </script>

          <input name="member1" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input hackField" placeholder="(Optional) Name" id="member1" style="padding: 13px 13px 13px 54px;" onchange="checkmember(1)" onkeydown="checkmember(1)"/>
          <input name="member2" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input hackField hidden" placeholder="(Optional) Name" id="member2" style="padding: 13px 13px 13px 54px;" onchange="checkmember(2)" onkeydown="checkmember(2)"/>
          <input name="member3" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input hackField hidden" placeholder="(Optional) Name" id="member3" style="padding: 13px 13px 13px 54px;" onchange="checkmember(3)" onkeydown="checkmember(3)"/>
          <input name="member4" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input hackField hidden" placeholder="(Optional) Name" id="member4" style="padding: 13px 13px 13px 54px;" onchange="checkmember(4)" onkeydown="checkmember(4)"/>

          <br>
          <br>

          <label class="fieldLabel" for="interest">Why are you interested in participating in ATHack 2019?</label>

          <textarea name="interest" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input hackField" placeholder="Explain your interest" id="interest" style="padding: 13px 13px 13px 54px;"></textarea>

          <br>
          <br>

          <center>

          <div class="button loseAnimation" onclick="composeHackApp()">Submit Application</div>
        </center>

            <br>

            <br>

        </div>

        <div class="hidden" id="CodApp" style="margin-left: 20%; width: 60%">

          <br>
          <br>

          <label class="fieldLabel" for="name">Name</label>

          <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input codAppField" placeholder="Name" id="name" style="padding: 13px 13px 13px 54px;"/>

          <br>
          <br>

          <label class="fieldLabel" for="email">Email</label>

          <input name="email" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input codAppField" placeholder="Email" id="email" style="padding: 13px 13px 13px 54px;"/>

          <br>
          <br>

          <label class="fieldLabel" for="school">Phone</label>

          <input name="phone" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input codAppField" placeholder="Phone Number" id="phone" style="padding: 13px 13px 13px 54px;"/>

          <br>
          <br>

          <label class="fieldLabel" for="contactPicker">How would you like us to contact you?</label>

          <select class="dropdown codAppField" name="contactPicker" style="text-align: left; margin-bottom:10px;" id="contactPicker" onchange="toggleOther()">
  					  <option value="">Preferred Method Of Contact</option>
  					  <option value="1">Phone</option>
  						<option value="0">Email</option>
  						<option value="2">Both</option>
  				</select>

          <br>
          <br>

          <label class="fieldLabel" for="classPicker">Are you available on March 2, 2019 and on February 12, 2019 to attend an event at MIT?</label>

          <script>

            function toggleOther() {

              let picker = document.getElementById("availablePicker")

              if (picker.options[picker.selectedIndex].value == "3") {

                document.getElementById("half").classList.replace("hidden", "show")

              } else {

                document.getElementById("half").classList.replace("show", "hidden")

              }

            }

            function composeCodApp() {

              removeErr()

              elements = document.getElementsByClassName("codAppField")

              targets = Array.prototype.map.call(elements,
                      element =>
                      ({
                          val: element.value,
                          name: element.id
                      })
                  );

              name = targets.filter(flag => flag.name == "name")[0].val

              prefIndex = targets.filter(flag => flag.name == "contactPicker")[0].val

              email = targets.filter(flag => flag.name == "email")[0].val

              phone = targets.filter(flag => flag.name == "phone")[0].val

              available = targets.filter(flag => flag.name == "availablePicker")[0].val

              otherText = targets.filter(flag => flag.name == "more")[0].val

              disability = targets.filter(flag => flag.name == "describe")[0].val

              problem = targets.filter(flag => flag.name == "problem")[0].val

              solution = targets.filter(flag => flag.name == "solution")[0].val

              extraInfo = targets.filter(flag => flag.name == "addInfo")[0].val

              if (/^[a-zA-Z][a-zA-Z\s]+$/.test(name) == false) {

                raiseError("Name Invalid", "Names should be entered in alphabet characters only (A-Z)", true)

                return

              }

              if ((/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) == false) {

                raiseError("Email Invalid", "Make sure you input an actual email address", true)

                return

              }

              if (/^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$/.test(phone) == false) {

                raiseError("Phone Invalid", "Make sure the phone number entered is a valid US number", true)

                return

              }

              if (prefIndex.replace(/ /g,"") == "") {

                raiseError("No Contact Method Provided", "You did not specify how you would like us to contact you", true)

                return

              }

              if (available.replace(/ /g,"") == "") {

                raiseError("Availability Not Specified", "You did not specify what dates of the event you can attend", true)

                return

              }

              if (disability.replace(/ /g,"") == "") {

                raiseError("Form Incomplete", "You did not describe yourself and your disability", true)

                return

              }

              if (problem.replace(/ /g,"") == "") {

                raiseError("Form Incomplete", "You did not describe a problem you face", true)

                return

              }

              var data = "]{" + name + "}{"

              data = data + prefIndex + "," + email + "," + phone + "}{"

              data = data + available + "," + otherText + "}{"

              data = data + disability + "}{"

              data = data + problem + "}{"

              data = data + solution + "}{"

              data = data + extraInfo + "}"

              $.post("<?php echo $applicationDir; ?>" + "codApp.txt", function( oldData ) {

                      data = data + "\n" + oldData;

                    }).always(function() {

                        $.post('./postApplication.php', { type: "codApp", data: data }).fail(function() {

                            raiseError("A Problem Was Encountered", "Recording your application failed with error code 24, if the problem persists contact <a href='mailto:tareq@mit.edu'>tareq@mit.edu</a>", true)

                        }).done(function() {

                          raiseError("Success", "Yay! Your applicaion was recorded.", true)

                        });
                    });

              //let data = "]{Name}{prefIndex(0:email, 1: phone, 2: both),email,phone}{Availabile, Other Text}{disability}{problem}{solution}{extra info}"

            }

          </script>

          <select class="dropdown codAppField" name="availablePicker" style="text-align: left; margin-bottom:10px;" id="availablePicker" onchange="toggleOther()">
  					  <option value="">Pick Availablity</option>
  					  <option value="1">Available For Both Dates</option>
  						<option value="2">Not Sure</option>
  						<option value="0">Not Available</option>
  						<option value="3">Other</option>
  				</select>

          <br>

          <div id="half" class="hidden">

            <br>

            <label class="fieldLabel" for="more">Other Attendance</label>

            <input name="more" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input codAppField" placeholder="Which Date Are You Available On" id="more" style="padding: 13px 13px 13px 54px;"/>

          </div>

          <br>

          <label class="fieldLabel" for="describe">Describe yourself and your disability</label>

          <div class="help-tip">
              <p>Include which school you attend if you are a student.</p>
          </div>

          <textarea name="describe" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input codAppField" placeholder="Description of yourself and your disability" id="describe" style="padding: 13px 13px 13px 54px;"></textarea>

          <br>
          <br>

          <label class="fieldLabel" for="problem">Describe a problem you face</label>

          <div class="help-tip">
              <p>In the past, problems have included having trouble spreading cream cheese on bagels, navigating stores, turning pages of music, etc</p>
          </div>

          <textarea name="problem" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input codAppField" placeholder="Description of a problem" id="problem" style="padding: 13px 13px 13px 54px;"></textarea>

          <br>
          <br>

          <label class="fieldLabel" for="solution">(Optional) If you have a solution in mind to the problem, describe it to us!</label>

          <div class="help-tip">
              <p>We are not expecting you to have a solution -- the teams will work with you to think of a potential solution!</p>
          </div>

          <textarea name="solution" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input codAppField" placeholder="Description of a solution" id="solution" style="padding: 13px 13px 13px 54px;"></textarea>

          <br>
          <br>

          <label class="fieldLabel" for="addInfo">(Optional) Additional Information, Questions or Comments</label>

          <textarea name="addInfo" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input codAppField" placeholder="Additional Information, Questions and Comments" id="addInfo" style="padding: 13px 13px 13px 54px;"></textarea>

          <br>
          <br>

          <br>
          <center>

          <div class="button loseAnimation" onclick="composeCodApp()">Submit Application</div>
        </center>

            <br>

            <br>

        </div>

    </div>-->

    <?php include 'includes/footer.php' ?>

  </body>

</html>
