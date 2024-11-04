<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function search(){
        $.get('brad53.php?orderId=' + $('#orderId').val(), 
            function(data, status){
                if (status == 'success'){
                    console.log(data);
                    $('#table').empty();
                    $(data).each(function(i, row){
                        $('#table').append(
                            '<tr>' +
                            '<td>' + row.id + '</td>' +
                            '<td>' + row.ename + '</td>' +
                            '<td>' + row.weight + '</td>' +
                            '</tr>'
                        );
                    });


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