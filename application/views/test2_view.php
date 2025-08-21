<html>

<head>
    <title>Basic HTML</title>
</head>

<body>
    <h1>Basic HTML</h1>

    <!-- Array Helper -->
    <!-- <p><b>Quote:</b> <?php echo $quote; ?></p> -->

    <!-- Form Helper -->
    <!-- <?php echo form_open() ?>
    <?php echo form_input("email", "ram@mail.com"); ?>
    <input type="text" name="uname">
    <?php echo form_submit("save", "Save"); ?>
    <input type="submit" name="save" value="Save">
    <?php echo form_close() ?> -->

    <?php echo form_open() ?>
    <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="uname"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo form_input("email"); ?></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="text" name="mobile"></td>
        </tr>
        <tr>
            <td>Message</td>
            <td><textarea name="message"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Send"></td>
        </tr>
    </table>
    <?php echo form_close() ?>
</body>

</html>