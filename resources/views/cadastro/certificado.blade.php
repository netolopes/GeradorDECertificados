<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
</head>
<body>
	<div style="width:100%; height:600px; padding:20px; text-align:center; border: 10px solid #787878;background:#EEEEEE">
<div style="width:95%; height:550px; padding:20px; text-align:center; border: 5px solid #787878">
       <span style="font-size:50px; font-weight:bold">Certificado de Conclusão de Curso</span>
       <br><br>
       <span style="font-size:25px"><i>Certificamos que:</i></span>
       <br><br>
       <span style="font-size:30px"><b><?php  echo $_GET['nome'];  ?></b></span><br/><br/>
       <span style="font-size:25px"><i>completou o curso de </i></span> <br/><br/>
       <span style="font-size:30px"><?php  echo $_GET['curso'];  ?></span> <br/><br/>
       <span style="font-size:20px">com o total de <b><?php  echo $_GET['ch'];  ?></b></span> <br/><br/><br/><br/>
       <span style="font-size:25px"><i>Concluído em</i></span><br>
      <?php  echo  date('d/m/Y',strtotime($_GET['dt']));  ?>
     
</div>
</div>
</body>
</html>