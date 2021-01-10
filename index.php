<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Security Screen</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <link rel="stylesheet" href="css/print.css">
</head>

<body>


  <!--form start here-->
	<form class="form-wrap">
	  <h6 class="main-title"><span class="text-uppercase">a. Business Information</span> (To be completed by the Designed official)</h6>
	  <div class="form-inner">
		  <div class="textfield-group-wrap">
			  <label><span class="number">1</span> Legal Name</label>
			  <input class="form-control">
		  </div>
		  <div class="textfield-group-wrap">
			  <label><span class="number">2</span> Business Name (if diffrent from legal name)</label>
			  <input class="form-control">
		  </div>
		  <div class="textfield-group-wrap">
			  <label><span class="number">3</span> Civic Address</label>
			  <input class="form-control">
		  </div>
		  <div class="textfield-group-wrap">
			  <label><span class="number">4</span> Mailing Address (if diffrent from civic Address)</label>
			  <input class="form-control">
		  </div>

		  <div class="row">
		  		<div class="col-md-6">
		  			<div class="textfield-group-wrap">
						 <label><span class="number">5</span> Telephone Number</label>
						 <input class="form-control">
					 </div>
		  		</div>	
		  		<div class="col-md-6">
		  			<div class="textfield-group-wrap">
						 <label><span class="number">6</span> Facsimile Number</label>
						 <input class="form-control">
					 </div>
		  		</div>
		  </div>

		  <div class="textfield-group-wrap">
			  <label><span class="number">7</span> Email</label>
			  <input class="form-control">
		  </div>

		  <div class="table-wrap">
		  	  <div class="top-row">	
			 	 <label><span class="number">8</span> Description of the controlled goods the applicant may be required to examine, possess or transfer</label> 
			 	 <text>(Refer to the export control List (ECL))</text>
			  </div>          
			  <table class="table table-bordered">
			    <thead>
			      <tr>
			      	<th>
			        <th>Description of Controlled Goods</th>
			        <th>ECL Group <span>No.</span></th>
			        <th>ECL Item <span>No.</span></th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr>
			        <td>a</td>
			        <td><input class="textfield-style" type="text"></td>
			        <td><input class="textfield-style" type="number"></td>
			        <td><input class="textfield-style" type="number"></td>
			      </tr>
			      <tr>
			      	<td>b</td>
			        <td><input class="textfield-style" type="text"></td>
			        <td><input class="textfield-style" type="number"></td>
			        <td><input class="textfield-style" type="number"></td>
			      </tr>
			      <tr>
			      	<td>c</td>
			        <td><input class="textfield-style" type="text"></td>
			        <td><input class="textfield-style" type="number"></td>
			        <td><input class="textfield-style" type="number"></td>
			      </tr>
			      <tr>
			      	<td>d</td>
			        <td><input class="textfield-style" type="text"></td>
			        <td><input class="textfield-style" type="number"></td>
			        <td><input class="textfield-style" type="number"></td>
			      </tr>
			      <tr>
			      	<td>e</td>
			        <td><input class="textfield-style" type="text"></td>
			        <td><input class="textfield-style" type="number"></td>
			        <td><input class="textfield-style" type="number"></td>
			      </tr>
			    </tbody>
			  </table>
			</div>

		</div>	

		<h6 class="main-title"><span class="text-uppercase">B. Applicant Information</span> (To be completed by the Designed official)</h6>

		<div class="form-inner">
		  <div class="form-check">
		  		<label><span class="number">9</span> Type of Application</label>
				<div class="custom-control custom-radio">
				      <input type="radio" class="custom-control-input" name="customRadio" id="customRadio">
				       <label class="custom-control-label" for="customRadio">New</label>
				</div> 
				      
				<div class="custom-control custom-radio">
				    <input type="radio" class="custom-control-input" name="customRadio" id="customradio2">
				    <label class="custom-control-label" for="customradio2">Re-Assesment</label>
				</div>	
		  </div>

		  <div class="form-check">
		  		<label><span class="number">10</span> Business Title (select all that apply)</label>
				<div class="custom-control custom-checkbox">
				      <input type="checkbox" class="custom-control-input" id="customCheck11">
				       <label class="custom-control-label" for="customCheck11">Owner</label>
				</div> 
				      
				<div class="custom-control custom-checkbox">
				    <input type="checkbox" class="custom-control-input" id="customCheck3">
				    <label class="custom-control-label" for="customCheck3">Authorized Individual</label>
				</div>	

				<div class="custom-control custom-checkbox">
				    <input type="checkbox" class="custom-control-input" id="customCheck4">
				    <label class="custom-control-label" for="customCheck4">Designated Official</label>
				</div>

				<div class="custom-control custom-checkbox">
				    <input type="checkbox" class="custom-control-input" id="customCheck5">
				    <label class="custom-control-label" for="customCheck5">Officer</label>
				</div>

				<div class="custom-control custom-checkbox">
				    <input type="checkbox" class="custom-control-input" id="customCheck6">
				    <label class="custom-control-label" for="customCheck6">Director</label>
				</div>

				<div class="custom-control custom-checkbox">
				    <input type="checkbox" class="custom-control-input" id="customCheck7">
				    <label class="custom-control-label" for="customCheck7">Employee</label>
				</div>
		  </div>

		  <div class="form-check">
		  		<label><span class="number">11</span> Preffer Language of Correspondence</label>
				<div class="custom-control custom-radio">
				      <input type="checkbox" class="custom-control-input" name="customRadio" id="customradio21">
				       <label class="custom-control-label" for="customradio21">English</label>
				</div> 
				      
				<div class="custom-control custom-radio">
				    <input type="checkbox" class="custom-control-input" name="customRadio" id="customradio22">
				    <label class="custom-control-label" for="customradio22">French</label>
				</div>	
		  </div>

		  	 <div class="btn-wrap">
	  			<button class="btn print-btn">Print</button>
	  		</div>
		</div>  
	  

	</form>	
	<!--form end here-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>	
    <script src="js/scripts.js"></script>

</body>
</html>

