function chequeaMail(mail)
{
	var filtro=/^[A-Za-z][A-Za-z0-9_.\-]*@[A-Za-z0-9_-]+\.[A-Za-z0-9_.]+[A-za-z]$/;
	if (filtro.test(mail))
		return true;
	else
		return false;
}

function dataForm (form)
{
	var dataString="";
	$("#"+form+" input[type=text], #"+form+" input[type=hidden], #"+form+" textarea, #"+form+" select").each(function(){
		if($(this).attr("name")!="")
			dataString += $(this).attr("name")+"="+$(this).val()+"&"; 
	});
	$("#"+form+" input[type=checkbox]:checked").each(function(){
		if($(this).attr("name")!="")
			dataString += $(this).attr("name")+"="+$(this).val()+"&"; 
	});
	$("#"+form+" input[type=radio]:checked").each(function(){
		if($(this).attr("name")!="")
			dataString += $(this).attr("name")+"="+$(this).val()+"&"; 
	});
	return dataString;
}

function is_int(input){
	return typeof(input)=='number' && parseInt(input)==input;
}
