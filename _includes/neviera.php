<script type="text/javascript">
function parseGetVars()
{
  var args = new Array();
  var query = window.location.search.substring(1);
  if (query)
  {
    var strList = query.split('&');
    for(str in strList)
    {
      var parts = strList[str].split('=');
      args[unescape(parts[0])] = unescape(parts[1]);
    }
  }
  return args;
};

var get = parseGetVars();
var neviera = get['neviera'];
document.write('var neviera: ' + neviera);

// original script begins
function getData ()
  {
	$.ajax({
	  method: "GET",  
	  url: "https:nevieredisicilia.github.io/neviere/Neviere_di_Sicilia.csv",
	  dataType: "text",
      async:false,      
	  success: function(response)  
	  {
		tutto = $.csv.toArrays(response);
		var i;
		for (i = 0; i < tutto.length; i++) {
		    var curr_neviera = tutto[i];	  
            if (curr_neviera[2] === neviera) {
			datac = curr_neviera;
		    }		
		//generateHtmlTable(data);
		//return datac;
		alert ("ramo ok!");	
	    }   
	  },
	  error: function(err)
	  {
				alert(err)
	  }
	 
	});
  };
  
  var data = getData();
  
// original script ends


  // sent a GET request to retrieve the CSV file contents
  var datass = $.get("https:nevieredisicilia.github.io/neviere/Current_Neviera.csv", function(CSVdata) {
     // CSVdata is populated with the file contents
     // ready to be converted into an Array
      datas = $.csv.toArrays(CSVdata);
     // console.log(data);
	 //document.write('var data1: ' + datas);
  });
  
  document.write('\r\n var datass: ' + datass);
  document.write('\r\n datass[0]: ' + datass[0]);
  document.write('\r\n datass[1]: ' + datass[1]);
  
/*  
var data =
	$.ajax({
	  type: 'GET',  
	  url: 'https:nevieredisicilia.github.io/neviere/Neviere_di_Sicilia.csv',
	  dataType: 'text',
      async:false,      
	  success: function(response)  
	  {
		var tutto = $.csv.toArrays(response);
		var curr_neviera;
		//var data;
		var i;
		for (i = 0; i < tutto.length; i++) {
		    curr_neviera = tutto[i];	  
            if (curr_neviera[2] === neviera) {
				datac = curr_neviera;
		    }		
		//generateHtmlTable(data);
	    }   
	  }
	});*/
</script>
<script>
/*
function getData(data) {
  return $.ajax({
    url: "https:nevieredisicilia.github.io/neviere/Neviere_di_Sicilia.csv",
    method: "GET",
    dataType: "text",
    //async: true,  //default async call
    data: {action: "get", id: data },
    success: function(response) {
    {
		tutto = $.csv.toArrays(response);
		var i;
		for (i = 0; i < tutto.length; i++) {
		    var curr_neviera = tutto[i];	  
            if (curr_neviera[2] === neviera) {
			data = curr_neviera;
		    }		
		//generateHtmlTable(data);
	    }   
	  }
    })
  });
}

$.when(getData(data)).done(function(response){
    //access response data here
	return data;
});
*/
</script>

{% comment %}
{% assign row = site.data.Neviere_di_Sicilia[0] %}
{{ row | inspect }}
{% endcomment %}

{% for element in site.data.Neviere_di_Sicilia %}
{% capture number %}{{ forloop.length }}{% endcapture %}
{% endfor %}
<p>n. neviere censite: {{ number }}</p>

{% capture neviera_l %} {{ neviera }} {% endcapture %}
<p>neviera_l: {{ neviera_l }}</p>



{% for member in site.data.Current_Neviera %}
	{% assign data = member.current_neviera %}
	{{ data }}
{% endfor %}
	{{ data }}

{% comment %}
{% for member in site.data.Neviere_di_Sicilia %}
  {% if member.name == "Amormino" %}
    {% assign data = member %}
	{% for pair in data %}
     {{ pair | inspect }}
    {% endfor %}
  {% endif %}
{% endfor %}
{% endcomment %}

{% comment %}
{% assign groups = site.data.Neviere_di_Sicilia %}
<ul>
{% for g in groups %}
{% assign leads = g.items | where: neviera %}
<li>name : {{ g.name }}</li>
{% endfor %}
</ul>
{% endcomment %}
<?php
$var=$_GET['neviera'];
echo $var;
?>

<table style="width: 100%; margin:auto; border: none;" >
    <tr style="border: none;" >
	<td style="border: none;" >
	  <script>if (data[20]){
		      javascript:document.write("<a href=" + data[20] + " target='_blank' ><img src=" + data[20] + " width='75%' /></a>");
                  };	  
	  </script>
	</td>
	<td style="border: none;" >
	    <script>if (data[24]){
		      javascript:document.write("<a href=" + data[24] + " target='_blank' >Vedi l'Album Fotografico</a>");
                  };	  
	    </script>
	</td> 
     </tr>
</table>
<table style="width: 100%; margin:auto;" >
    <tr>
	    <td>Nome Neviera</td><td><script>document.write(data[2]);</script></td>
    </tr>
    <tr>
	<td>Comune di</td><td><script>document.write(data[4]);</script> (<script>document.write(data[5]);</script>)</td>	
    </tr>
   <tr>
	<td>Località</td><td><script>document.write(data[3]);</script></td>
    </tr>
    <tr>
	<td>Coordinate Geografiche (lat/lon)</td>
	<!-- <td><script>document.write(data[6]);</script>/<script>document.write(data[7]);</script></td> -->
	<td><script>javascript:document.write("<a href='http://www.openstreetmap.org/?mlat=" + data[6] + "&mlon=" + data[7] + "&zoom=14' target='_blank' >" + data[6] + "/" + data[7] + "</a>");</script></td>
    </tr>
    <tr>
	<td>Altitudine s.l.m. m.</td><td><script>document.write(data[8]);</script></td>
    </tr>	
    <tr>
	<td>Descrizione</td><td><script>document.write(data[17]);</script></td>
    </tr>
    <tr>
	<td>Stato di Conservazione</td><td><script>document.write(data[18]);</script></td>
    </tr>
    <tr>
	<td>Epoca di Costruzione</td><td><script>document.write(data[19]);</script></td>
    </tr>
    <tr>
	<td>Indicazioni per raggiungerla</td><td><script>document.write(data[22]);</script></td>
    </tr>
   <tr>
	<td>Lunghezza lato nord m.</td><td><script>document.write(data[9]);</script></td>
    </tr>
    <tr>
	<td>Lunghezza lato est m.</td><td><script>document.write(data[10]);</script></td>
    </tr>
    <tr>
	<td>Lunghezza lato sud m.</td><td><script>document.write(data[11]);</script></td>
    </tr>
    <tr>
	<td>Lunghezza lato ovest m.</td><td><script>document.write(data[12]);</script></td>
    </tr>
    <tr>
	<td>Altezza fuori terra m.</td><td><script>document.write(data[15]);</script></td>
    </tr>
    <tr>
	<td>Diametro m.</td><td><script>document.write(data[13]);</script></td>
    </tr>
    <tr>
	<td>Profondità m.</td><td><script>document.write(data[23]);</script></td>
    </tr>
    <tr>
	<td>Spessore dei muri m.</td><td><script>document.write(data[14]);</script></td>
    </tr>
    <tr>
	<td>Pianta Neviera</td>
	<td>
	    <script>if (data[16]){
		      javascript:document.write("<a href=" + data[16] + " target='_blank' ><img src=" + data[16] + " height='320' /></a>");
                  };  
	    </script>
	</td>
    </tr>
    <tr>
	<td>Rilevatore</td><td><script>document.write(data[21]);</script></td>
    </tr>
</table>
