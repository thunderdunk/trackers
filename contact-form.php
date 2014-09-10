<form method="post" action="forms/contact-send.php">
          <p><strong>Email*<br />
          </strong>
            <input type="text" name="email" size="40" />
            <br />
            <strong>Phone<br />
            </strong>
            <input type="text" name="phone" size="40" />
            <br />
            <strong>Subject</strong> <br />
            <input type="text" name="subject" size="40" />
            <br />
            <strong>Message</strong><br />
            <textarea name="information" cols="77" rows="10" id="information"></textarea>
          </p>
          <p><em>I would like to receive updates for the following Trackers programs...</em>          </p>
          <p>
            <input name="youth" type="checkbox" id="youth" value="yes-updates" />
            <strong>Portland</strong> Youth Camps<br />
<input name="adult" type="checkbox" id="adult" value="yes-updates" />
<strong>Portland</strong> Adult Programs          </p><br />
          <p>
            <input name="submit" type="submit" value="Send Message" />
          </p>
      </form>