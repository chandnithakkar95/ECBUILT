function delete_record(table,id,row_id)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
		document.getElementById("row_id"+id).innerHTML = '';
		}
	  }
		alert(table+id+row_id);
	xmlhttp.open("GET","ajax_query.php?action=delete_record&table1="+table+"&id1="+id+"&rowname="+row_id,true);
	xmlhttp.send();

}

function change_status(table,id)
{
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {
	  	xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			//alert(xmlhttp.responseText);
			if(xmlhttp.responseText == 0)
			{
				document.getElementById('status_'+id).innerHTML = "Inactive";
			}
			if(xmlhttp.responseText == 1)
			{
				document.getElementById('status_'+id).innerHTML = "Active";
			}
		}
	  }
	xmlhttp.open("GET","ajax_query.php?action=change_status&table="+table+"&id=" + id,true);
	xmlhttp.send();

}

function order_status(table,id)
{ //alert();
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {
	  	xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			//alert(xmlhttp.responseText);
			if(xmlhttp.responseText == 0)
			{
				document.getElementById('status_'+id).innerHTML = "Pending";
			}
			if(xmlhttp.responseText == 1)
			{
				document.getElementById('status_'+id).innerHTML = "Approved";
			}
			if(xmlhttp.responseText == 2)
			{
				document.getElementById('status_'+id).innerHTML = "Completed";
			}
		}
	  }
	xmlhttp.open("GET","ajax_query.php?action=order_status&table="+table+"&id=" + id,true);
	xmlhttp.send();
}
function fetch_sub_category(id)
{
	//alert();
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {

	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			//alert(xmlhttp.responseText);

		document.getElementById("sub_category").innerHTML = xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_query.php?action=fetch_sub_category&id="+id,true);
	xmlhttp.send();


}

function fetch_brand(id)
{
	//alert();
	var xmlhttp;
	if (window.XMLHttpRequest)
	  {
	  xmlhttp=new XMLHttpRequest();
	  }
	else
	  {
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	  }
	xmlhttp.onreadystatechange=function()
	  {

	  if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			//alert(xmlhttp.responseText);
		document.getElementById("product_brand").innerHTML = xmlhttp.responseText;
		}
	  }
	xmlhttp.open("GET","ajax_query.php?action=fetch_brand&id="+id,true);
	xmlhttp.send();

}

function show_hide_field(type)
{
	if(type == "item")
	{
		document.getElementById('weight_type').style.display = "none";
		document.getElementById('weight').style.display = "none";
	}
	if(type == "weight")
	{
		document.getElementById('weight_type').style.display = "block";
		document.getElementById('weight').style.display = "block";
	}
}
