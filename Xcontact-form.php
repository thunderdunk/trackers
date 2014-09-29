<div id="contact-popup">
  <form method="post" action="forms/contact-send.php">
    <div>
      <label>Email*</label>
      <input type="text" name="email" size="40" />
    </div>
    
    <div>
      <label>Phone</label>
      <input type="text" name="phone" size="40" />
    </div>

    <div>
      <label>Subject</label>
      <input type="text" name="subject" size="40" />
    </div>
    
    <div>
      <label>Message</label>
      <textarea name="information" cols="77" rows="10" id="information"></textarea>
    </div>
    
    <div>
      <p>I would like to receive updates for the following Trackers programs...</p>

        <ul class="radio">
          <li>
            <input name="youth" type="checkbox" id="youth" value="yes-updates" />
            <label for="radio-choice">Portland Youth Camps</label>
          </li>
          
          <li>
            <input name="adult" type="checkbox" id="adult" value="yes-updates" />
            <label for="radio-choice">Portland Adult Programs</label>
          </li>
        </ul>
    </div>

    <input name="submit" type="submit" value="Send Message" />

  </form>
</div><!--#test-popup-->