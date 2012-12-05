<table  width="100%" style="border:1px #ffffff solid; padding-right:5px;" cellpadding="0" cellspacing="0" border="0"> 
<tr class="grey11b" style="color:#FFFFFF;" bgcolor="#FF9900"> 
<td height="20"><a href="index.php?islem=dersler" class="grey11b" style="color:#FFFFFF;">DERSLER</a> > <a href="index.php?islem=bilgi" class="grey11b" style="color:#FFFFFF;">Bilgi </a>></td> 
</tr> 
 <tr> 
 <td height="8"></td>
</tr>
</table>

<table width="100%"  height="450" border="1" cellspacing="1" cellpadding="1" style="border-collapse: collapse" bordercolor="#AAAAAA"> 
 <tr> 
<td valign="top" width="200">&Ouml;zel Mesaj <br>
  Haberler<br>Anket<br>
  &#304;leti&#351;im<br>
  Meslek Tan&#305;t&#305;mlar&#305; </td>
<td valign="top" > 
 <? 
 if (isset($_GET['bilgi_islem'])) 
 { 
 switch ($_GET['bilgi_islem'])	{ 
case "bilgi_ana"	 : include("bilgi_anasayfa.php"); break; 

default			  	 : include("bilgi_anasayfa.php"); 
} 
 } 
 else 
include("bilgi_anasayfa.php");
?></td></tr></table>