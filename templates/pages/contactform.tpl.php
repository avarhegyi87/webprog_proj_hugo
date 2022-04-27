<header>
    <h1 class="entry-title">Contact Us</h1>
</header>
<form name="contact-form" action="?page=yourmsg" onsubmit="return sendContact();" method="POST">
    <div>
        <p><b>Enter your name *</b></p>
        <input type="text" name="fname" placeholder="Enter your first name" id="firstName" />
        <input type="text" name="lname" placeholder="Enter your last name" id="lastName" />
        <br><br>
        <p><b>Select your gender *</b></p>
        <input type="radio" id="male" name="gender" value="male"> Male
        <br>
        <input type="radio" id="female" name="gender" value="female"> Female
        <br>
        <input type="radio" id="other" name="gender" value="other"> Other / Rather not disclose
        <br><br>
        <p><b>Enter your email address *</b></p>
        <input type="email" name="email" placeholder="Enter your email" id="email" />
        <input type="checkbox" id="newsletter" name="newsletter" />Send me monthly newsletter
        <br><br>
        <span><b>What is your question? *</b></span>
        <br>
        <textarea id="question" name="question" rows="4"></textarea>
        <br><br>
        <button id="sendform" type="submit">Send Message</button>
        <p class="form-note">* marks the mandatory fields</p>
    </div>
</form>