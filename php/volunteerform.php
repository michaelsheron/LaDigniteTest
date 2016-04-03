  <p>&nbsp;</p>
  <p>Thank you for contacting <em>La Dignite</em>. We will revise your information and let you know what the next steps will be.</p>
  <p>&nbsp;</p>
  <!-- Alignment -->
  <div class="col-md-12 well">
      <!-- Form itself -->
      <form name="contact" id="contact" validate method="POST" ENCTYPE="text/plain" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <legend>Contact Form</legend>
        <div class="col-md-6">
            <div class="control-group">
              <div class="controls">
                <input type="text" class="form-control" placeholder="First Name" name="fname" id="fname" />
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="text" class="form-control" placeholder="Organization" name="org" id="org" />
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="text" class="form-control" placeholder="City" name="city" id="city" />
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="text" class="form-control" placeholder="Country" name="country" id="country" />
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="text" class="form-control" placeholder="Phone" name="ph" id="ph" />
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="text" class="form-control" placeholder="Interests" name="interests" id="interests" />
                <p class="help-block"></p>
              </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="control-group">
              <div class="controls">
                <input type="text" class="form-control" placeholder="Last Name" name="lname" id="lname" />
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="text" class="form-control" placeholder="Address" name="address" id="address" />
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="text" class="form-control" placeholder="State" name="state" id="state" />
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="text" class="form-control" placeholder="Zip" name="zip" id="zip" />
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="email" class="form-control" placeholder="Email" name="email" id="email"  required data-validation-required-message="Please enter your email" />
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <input type="text" class="form-control" placeholder="Skills" name="skills" id="skills" />
                <p class="help-block"></p>
              </div>
            </div>
         </div>
         <div class="col-md-12">             
            <div class="control-group">
              <div class="controls">
                <textarea rows="6" cols="100" class="form-control" placeholder="Message" name="message" id="message" style="resize:none" required data-validation-required-message="Please enter a message"></textarea><!--required 
                data-validation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters" 
                maxlength="999" style="resize:none"></textarea>-->
                <p class="help-block"></p>
              </div>
            </div>
            <!-- For success/fail messages -->
            <div id="success"></div>
        </div>
        <button type="submit" class="btn btn-primary pull-right orange" id="submit">Send</button>
        <button type="reset" class="btn btn-default pull-right orange" id="res">Reset</button>
        <br />
      </form>
  </div>

