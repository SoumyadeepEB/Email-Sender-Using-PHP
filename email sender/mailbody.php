<!DOCTYPE html>
<html>
<head>
<title>My Email Sender</title>
<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="margin: 7%;">
    <div class="w3-light-gray w3-border">
    <div class="w3-black w3-text-blue w3-padding w3-center w3-wide w3-xlarge"><h2 style="font-weight: 900">My Email Sender</h2></div>
    <div class="w3-margin">
        <form action="email.php" method="post">
            <p>
            <label><b>From:</b></label>
            <input type="email" name="sender" class="w3-border w3-input w3-padding w3-pale-yellow" value="soumyadeepghosh22@gmail.com" readonly>
            </p>
            <p>
            <label><b>To:</b></label>
            <input type="email" name="recipient" class="w3-border w3-input w3-padding" placeholder="type recipient id">
            </p>
            <p>
            <label><b>Subject</b></label>
            <input type="text" name="subject" class="w3-border w3-input w3-padding" placeholder="enter topic...">
            </p>
            <p>
            <label class="w3-block"><b>Message</b></label>
            <textarea name="message" class="w3-padding" placeholder="email body..." cols="100" rows="10"></textarea>
            </p>
            <p class="w3-center">
            <input type="submit" name="send" class="w3-btn w3-pale-green w3-padding" value="Send Email">
            </p>
        </form>
    </div>
    </div>
</body>
</html>