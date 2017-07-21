<link href="css/bootstrap.css" rel="stylesheet">  

<style type="text/css">  

body {  

padding-top: 40px;  

padding-bottom: 40px;  

background-color: #ffffff;  

}  

  

  

.form-signin {  

	max-width: 400px;  

	padding: 19px 29px 29px;  

	margin: 0 auto 20px;  

	background-color: #fff;  

	border: 1px solid #e5e5e5;  

	-webkit-border-radius: 5px;  

	-moz-border-radius: 5px;  

	border-radius: 5px;  

	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);  

	-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);  

	box-shadow: 0 1px 2px rgba(0,0,0,.05);  

	text-align: center;  

	font-size: small;  

}  

.form-signin .form-signin-heading,  

.form-signin .checkbox {  

	margin-bottom: 10px;  

	font-family: "Comic Sans MS", cursive;  

	color: #00F;  

	font-size: large;  

}  

.form-signin input[type="text"],  

.form-signin input[type="password"]  

.select2-container {  

font-size: 16px;  

height: auto;  

margin-bottom: 15px;  

padding: 7px 9px;  

}  

  

</style>  

<link href="css/bootstrap-responsive.css" rel="stylesheet">  

<link href="select2.css" rel="stylesheet"/>  

  

</head>  

<body>  

   

<div class="container">  

<form class="form-signin" method="get" action="">  

  

<select name="country" id="e1" style="width:100%;max-width:250px;" class="input-block-level">  

<option value="">Mexico</option><option value="001">USA</option> 

</select>  

  

<input type="text" name="tel" onKeyPress="return isNumberKey(event)" class="input-block-level" placeholder="N. de Telefono">  

<div><input type="text" name="msg" id="msg" class="input-block-level" placeholder="Mensaje" maxlength="140"></div>  

  

<center><button class="btn btn-large btn-primary" type="submit" name="enviar" onclick="FuncionJAVASCRIPT();" >Enviar SMS</button>   

  </center>  

</form>  

</div> <!-- /container -->  

<style>  

.select2-container {  

	margin-bottom: 15px;  

}  

</style>  





<script>  

$(document).ready(function() {  

	$("#e1").select2({  

		minimumInputLength: 2  

	});  

	$('input[maxlength]').maxlength({alwaysShow: true});  

});  

  

function isNumberKey(evt) {  

	 var charCode = (evt.which) ? evt.which : event.keyCode  

	 if (charCode > 31 && (charCode < 48 || charCode > 57))  

		return false;  

  

	 return true;  

  }  

</script>  

  

    

  

  

  

	
