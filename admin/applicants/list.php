<?php
	 if(!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?> 
	<div class="row">
    <div class="col-lg-12">
            <h1 class="page-header">Lista de Candidatos</h1>
       		</div>
        	<!-- /.col-lg-12 -->
   		 </div>
                
 
						<form class="wow fadeInDownaction" action="controller.php?action=delete" Method="POST">   		
							<table id="dash-table" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">

							  <thead>
							  	<tr>
									<th>Candidato</th>
                                    <th>Cargo</th>
                                    <th>Empresa</th>
                                    <th>Data de aplicação</th>
                                    <th>Observações</th>
                                    <th width = "14%">Ação</th>
							  	</tr>	
							  </thead> 
							  <tbody>
							  	<?php   
							  		// $mydb->setQuery("SELECT * 
											// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
							  		$mydb->setQuery("SELECT * FROM `tblcompany` c  , `tbljobregistration` j, `tbljob` j2, `tblapplicants` a WHERE c.`COMPANYID`=j.`COMPANYID` AND  j.`JOBID`=j2.`JOBID` AND j.`APPLICANTID`=a.`APPLICANTID` ");
							  		$cur = $mydb->loadResultList();

									foreach ($cur as $result) { 
							  		echo '<tr>';
							  		// echo '<td width="5%" align="center"></td>';
							  		echo '<td>'. $result->CANDIDATO.'</td>';
							  		echo '<td>' . $result->TÍTULODEOCUPAÇÃO.'</a></td>';
							  		echo '<td>' . $result->NOMEDAEMPRESA.'</a></td>'; 
							  		echo '<td>'. $result->DATADEREGISTRO.'</td>';
							  		echo '<td>'. $result->OBSERVAÇÕES.'</td>';  
					  				echo '<td align="center" >    
					  		             <a title="View" href="index.php?view=view&id='.$result->IDDOREGISTRO.'"  class="btn btn-info btn-xs  ">
					  		             <span class="fa fa-info fw-fa"></span> View</a> 
					  		             <a title="Remove" href="controller.php?action=delete&id='.$result->IDDOREGISTRO.'"  class="btn btn-danger btn-xs  ">
					  		             <span class="fa fa-trash-o fw-fa"></span> Remover</a> 
					  					 </td>';
							  		echo '</tr>';
							  	} 
							  	?>
							  </tbody>
								
							</table>
 
							 
							</form>
       
                 
 
