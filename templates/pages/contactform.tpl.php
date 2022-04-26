<header>
    <h1 class="entry-title">2022 Hugo Award Finalists Announced</h1>
</header>
<form name="contact-form" action="?page=yourmsg" onsubmit="return sendContact();" method="POST">
    <div>
        <input type="text" placeholder="Enter your first name" id="firstName" />
        <input type="text" placeholder="Enter your last name" id="lastName" />
        <br><br>
        <input type="radio" id="male" name="gender" value="male"> Male
        <input type="radio" id="female" name="gender" value="female"> Female
        <br><br>
        <input type="email" placeholder="Enter your email" id="email" />
        <input type="checkbox" id="newsletter" />Send me monthly newsletter
        <br><br>
        <span>What is your question?</span>
        <br>
        <textarea id="question" rows="4"></textarea>
        <br><br>
        <button id="sendform" type="submit">Send Message</button>
    </div>
</form>