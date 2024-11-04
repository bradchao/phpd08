<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function search(){
        $.get('brad53.php?orderId=' + $('#orderId').val(), 
            function(data, status){
                if (status == 'success'){
                    console.log(data);
                }
            });
    }


</script>
<h1>Brad Big Company</h1>
<hr />
Order ID: <input id="orderId" />
<input type="button" onclick="search()" value="Search" />
<hr />
Employee ID: <span id="eid"></span><br />
Customer ID: <span id="cid"></span><br />
Date: <span id="date"></span>
<table id="table" width="100%" border="1">
</table>