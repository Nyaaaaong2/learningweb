<html>

<head>

<title>

Welcome to Funshop^^

</title>

<script>

function nameCheck( )

{

var form1 = document.form1;

if(form1.m_name.value==""){

alert("이름칸이 비어있습니다. 입력해주세요");

}

else{

// alert("입력한 이름: "+form1.m_name.value);

form1.submit();

}

}

</script>

</head>



<body>

<form name=form1 method=post action=joinus.php>

id: <input type=text name=m_id>

pass: <input type=text name=m_pw>

name: <input type=text name=m_name>

address: <input type=text name=m_addr>

<input type=button value="가입하기" onclick="nameCheck();">

</form>

</body>

</html> 
