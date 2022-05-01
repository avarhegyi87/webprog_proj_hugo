<?php
if (
    isset($_POST['fname']) && isset($_POST['lname']) &&
    isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['question'])
) {
?>
    <div class="col-md-6 mx-auto">
        <div id="msg-display">
            <?php
            $re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
            $formerr = '';
            if (strlen($_POST['fname']) == 0) {
                $formerr = $formerr . 'ERROR: Missing first name. ';
            }
            if (strlen($_POST['lname']) == 0) {
                $formerr = $formerr . 'ERROR: Missing last name. ';
            }
            if (!preg_match($re, $_POST['email'])) {
                $formerr = $formerr . 'ERROR: Invalid email address. ';
            }
            if (strlen($_POST['question']) == 0) {
                $formerr = $formerr . 'ERROR: Missing message. ';
            }

            if (!$formerr == '') {
                echo '<div class="error-note">';
                echo '<p class="error-note">';
                echo $formerr;
                echo '<br>';
                echo 'The received results';
                echo "<pre>";
                var_dump($_POST);
                echo "</pre>";
                echo '</p>';
                echo '</div>';
            }
            ?>
            <table>
                <tbody>
                    <tr>
                        <th>Your name:</th>
                        <td><?= $_POST['fname'] . ' ' . $_POST['lname'] ?></td>
                    </tr>
                    <tr>
                        <th>Your gender:</th>
                        <td>
                            <?php
                            switch ($_POST['gender']) {
                                case 'male':
                                    echo 'Male';
                                    break;
                                case 'female':
                                    echo 'Female';
                                    break;
                                case 'other':
                                    echo 'Other / Rather not disclose';
                                    break;
                                default:
                                    echo 'not provided';
                                    break;
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <th>Your email address:</th>
                        <td><?= $_POST['email'] ?></td>
                    </tr>
                    <tr>
                        <th>Signed up to newsletter?</th>
                        <td><?= (isset($_POST['newsletter'])) ? 'Yes' : 'No'; ?></td>
                    </tr>
                    <tr>
                        <th>Your message to us</th>
                        <td><?= $_POST['question'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
<?php
} else { ?>
    <div class="error-note">
        <p>
            There is no message to display.
            <br>
            You can send us a message <a href="?page=contactform">HERE</a>.
        </p>
    </div>
<?php } ?>