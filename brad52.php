<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function search(){
        $.get('brad53.php?orderId=' + $('#orderId').val(), 
            function(data, status){
                if (status == 'success'){
                    console.log(data);
                    
                    $('#cid').html(data.cid);
                    $('#eid').html(data.eid);

                    $('#table').empty();
                    $(data.detail).each(function(i, row){
                        $('#table').append(
                            '<tr>' +
                            '<td>' + row.pname + '</td>' +
                            '<td>' + row.price + '</td>' +
                            '<td>' + row.qty + '</td>' +
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