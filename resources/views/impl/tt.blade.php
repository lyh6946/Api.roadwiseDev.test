<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<title>API TEST</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" language="javascript">
<!--
    // DOM이 모두 준비되면
    $(document).ready(function () {
        $.ajax({
            type: "GET",
			url: "http://api.roadwisedev.test/orm/datalist",
			//data: "siteCode=00009&mem_seq=10&conUnit_seq=1881496&result_seq=0",
			dataType: "json",
            cache: false,            
            crossDomain: false,
            success: function (retVal) {
                console.log(retVal);
            },
            error: function (x, o, e) {
                alert("처리중 오류가 발생했습니다.\n\n(" + x.status + " : " + o + " : " + e + ")");
            },
            complete: function () {
                $('#lblResult').text('Complete');
            }
        });
    }); // ready:End
//-->
</script>
</head>
<body>
    API TEST <label id="lblResult"></label>
</body>
</html>