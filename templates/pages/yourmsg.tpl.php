<?php
if (
    isset($_POST['fname']) && isset($_POST['lname']) &&
    isset($_POST['gender']) && isset($_POST['email']) && isset($_POST['question'])
) {
?>
    <div class="msg-display">
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
                    <td><?= ($_POST['newsletter'] == 'on') ? 'Yes' : 'No'; ?></td>
                </tr>
                <tr>
                    <th>Your message to us</th>
                    <td><?= $_POST['question'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php
} else { ?>
    <p class="error-note">
        There is no message to display.
        <br>
        You can send us a message <a href="?page=contactform">HERE</a>.
    </p>
<?php } ?>