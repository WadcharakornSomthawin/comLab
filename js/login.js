function checkvalue()
{//=========== ตรวจสอบค่าว่าง
		if(document.all.rdiuser.value == ""){
		alert('กรุณากรอก Username');
		document.getElementById("rdiuser").focus();
		return false;
		}else if(document.all.password.value == ""){
		document.getElementById("password").focus();
		alert('กรุณากรอก Password');
		return false;
		}
}