<?php
if(isset($_POST["name"])){
    echo $_POST["name"]."|".time();
    exit -1;
}
?>
<!DOCTYPE html>
<html>

<head>
  <link href="static/css/bootstrap.css" rel="stylesheet" />
  <style type="text/css">
    body {
	padding-top: 60px;
	padding-bottom: 40px;
    }
  </style>
</head>

<body>
  <div class="row"><div class="offset2 span8">
  <h1>Example Page</h1>
  <h2>PHP Version <?php echo phpversion(); ?></h2>
  This page is an example that demonstrates AJAX, Web backend, CSS, and Javascript.
  Names can be entered in the form. These names will be sent to the server, and the server will respond with a timestamp. The name and timestamp pair are written into a database and then these values populate a table below the form.
  </div></div>
  <br />

  <div class="row">
  <div class="offset1 span5">
    <h3>Form Description</h3>
    Enter an example username here. Click the submit button and the name will be sent to the server in the form of an HTTP POST request. This is an example of sending an AJAX request.
  </div>
  <div class="offset1 span5">
    <h3>Input Form</h3>
      <form id="userForm" style="background-color: #E0E0E0; border-radius: 15px; text-align: center;" action="#" class="form-horizontal">
	<label for="name_box">Username: </label>
	<input type="text" id="nameBox"></input>
	<button id="userbtn" type="submit" class="btn btn-primary">Send Username</button>
	<br />
	<br />
      </form>
  </div>
  </div>

  <div class="row">
  <div class="offset1 span5">
    <h3>Table Description</h3>
    Responses from the server will be displayed in this table. The server returns a timestamp and the original username string passed to it. This is an example of processing the response of an AJAX request.
  </div>
  <div class="offset1 span5">
    <h3>Response Table</h3>
    <table style="border-radius: 8px; background-color: #E0E0E0" class="table">
      <thead>
	<tr>
	  <th>#</th>
	  <th>Username</th>
	  <th>Timestamp</th>
	</tr>
      </thead>
      <tbody id="tableBody">
	<tr>
	  <td>1</td>
	  <td>Example</td>
	  <td>0</td>
	</tr>
      </tbody>
    </table>
  </div>
  </div>

  <script type="text/javascript" src="static/js/jquery.min.js"></script>
  <script type="text/javascript" src="static/js/user_prompt.js" /></script>
</body>

</html>
