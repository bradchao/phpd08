<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function checkAccount(){
        $('#mesg').load('checkAccount.php?account=' + $('#account').val());
    }

</script>

<form action="brad46.php" method="post"
    enctype="multipart/form-data">
    Account: <input name="account" id="account" onblur="checkAccount()"/>
    <span id="mesg"></span><br />
    Password: <input name="passwd" /><br />
    Name: <input name="name" /><br />
    Icon: <input type="file" name="icon" /><br />
    <input type="submit" value="Register" /><br />
</form>