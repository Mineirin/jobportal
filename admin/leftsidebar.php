


<div style="width:150px; height:520px; float:left;background-color:#202020;">
<ul class="heading"><li><a href="logout.php"><font color="#00FF00">Sair</font></a></li>
<li><a href="changepassword.php"><font color="#00FF00">Alterar a senha</font></a></li>
</ul>
<hr />




<form action="leftsidebar.php" method="post">
<ul class="heading">PÁGINA ESTÁTICA
<table>
<?php 
include('dbconnection.php');
$nice=mysqli_query("select * from static");
while($way=mysqli_fetch_array($nice))
{
?>
<tr>
<td><a href="page.php?id=<?php echo $way['static_id'];?>" style="font-family:Tahoma, Geneva, sans-serif;text-decoration:none;color:#0F0;" ><?php echo $way['page'];?></a></td>
</tr>
<?php 
}?>
</table>



</form>




<hr />

Seção da galeria
<table>
<tr>
<td class="text">
<a href="addgallery.php"><font color="#00FF00">Adicionar Galeria</font></a></td></tr>
<tr>
<td class="text"><a href="managegallery.php"><font color="#00FF00">Gerenciar galeria</font></a></td>
</tr>
</table>

<hr />
Seção de curso
<table>
<tr>
<td class="text">
<a href="add_course.php"><font color="#00FF00">Adicionar curso</font></a></td></tr>
<tr>
<td class="text"><a href="manage_course.php"><font color="#00FF00">Gerenciar Curso</font></a></td>
</tr>
</table>

<hr />
Afiliação
<table>
<tr>
<td class="text">
<a href="affiliation.php"><font color="#00FF00">Adicionar afiliação</font></a></td></tr>
<tr>
<td class="text"><a href="manage_affiliation.php"><font color="#00FF00">Gerenciar afiliação</font></a></td>
</tr>
</table>


</div>

