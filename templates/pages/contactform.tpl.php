    <header>
        <h1 id="form-title" class="entry-title">Contact Us</h1>
    </header>
    <form name="contact-form" action="?page=yourmsg" onsubmit="return sendContact();" method="POST">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <p><b>Enter your name <span class="asteriks">*</span></b></p>
                <input type="text" name="fname" placeholder="Enter your first name" id="firstName" />
                <input type="text" name="lname" placeholder="Enter your last name" id="lastName" />
                <br><br>
                <p><b>Select your gender <span class="asteriks">*</span></b></p>
                <input type="radio" id="male" name="gender" value="male"> Male
                <br>
                <input type="radio" id="female" name="gender" value="female"> Female
                <br>
                <input type="radio" id="other" name="gender" value="other"> Other / Rather not disclose
                <br><br>
            </div>
            <div class="col-md-12 col-lg-6">
                <p><b>Enter your email address <span class="asteriks">*</span></b></p>
                <input type="email" name="email" placeholder="Enter your email" id="email" />
                <input type="checkbox" id="newsletter" name="newsletter" />Send me monthly newsletter
                <br><br>
                <span><b>What is your question? <span class="asteriks">*</span></b></span>
                <br>
                <textarea id="question" name="question" rows="4"></textarea>
                <br><br>
            </div>
            <button id="sendform" type="submit">Send Message</button>
            <p class="form-note">* - mandatory fields</p>
        </div>
    </form>