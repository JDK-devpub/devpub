<?php

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="stylesheet" type="text/css" href="./plugin/lib/codemirror.css">
  <link rel="stylesheet" type="text/css" href="./plugin/addon/hint/show-hint.css">
  <link rel="stylesheet" type="text/css" href="./plugin/theme/material.css">
  <link rel="stylesheet" type="text/css" href="./plugin/theme/the-matrix.css">
  <link rel="stylesheet" type="text/css" href="./plugin/theme/neo.css">
  <link rel="stylesheet" type="text/css" href="./plugin/addon/fold/foldgutter.css">
  <link rel="stylesheet" type="text/css" href="./plugin/addon/display/fullscreen.css">
  <link rel="stylesheet" type="text/css" href="./plugin/doc/docs.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

				<script type="text/javascript" src="./plugin/addon/display/fullscreen.js"></script>
				<script type="text/javascript" src="./plugin/addon/wrap/hardwrap.js"></script>
   				<script type="text/javascript" src="./plugin/mode/css/css.js"></script>
				<script type="text/javascript" src="./plugin/addon/edit/closebrackets.js"></script>
				<script type="text/javascript" src="./plugin/mode/javascript/javascript.js"></script>
				<script type="text/javascript" src="./js/jquery.min.js"></script>
				<script type="text/javascript" src="./js/editor.js"></script>
				<script type="text/javascript" src="./plugin/addon/edit/matchbrackets.js"></script>
				<script type="text/javascript" src="./plugin/lib/codemirror.js"></script>
				<script type="text/javascript" src="./plugin/addon/hint/show-hint.js"></script>
				<script type="text/javascript" src="./plugin/addon/hint/javascript-hint.js"></script>
				<script type="text/javascript" src="./plugin/addon/hint/css-hint.js"></script>
				<script type="text/javascript" src="./plugin/addon/fold/brace-fold.js"></script>
				<script type="text/javascript" src="./plugin/addon/fold/foldcode.js"></script>
				<script type="text/javascript" src="./plugin/addon/fold/foldgutter.js"></script>
				<script type="text/javascript" src="./plugin/addon/fold/xml-fold.js"></script>
				<script type="text/javascript" src="./plugin/addon/fold/comment-fold.js"></script>
				<script type="text/javascript" src="./plugin/mode/xml/xml.js"></script>
				<script type="text/javascript">
						 window.onload = function() {
							CodeMirror.commands.autocomplete = function(cm) {
								CodeMirror.showHint(cm, CodeMirror.hint.javascript);
						}
          }
				</script>
  <title>Devpub Compiler</title>
  <style>
  		textarea{height: 100px; width: 200px;}
		textarea:focus{height:100px;}
		textarea:focus ~ button{display:block}
		.clear{clear:both;}
		button{display:none;}
  </style>
</head>
<body style="background-color:lightblue">
				<form action="compile.php" method="post" id="form">
					Select Language of Interest:
						<select name="language" id="language">
							<option value="c">C</option>
							<option value="cpp">C++</option>
							<option value="java">Java</option>
						</select>
					<br />
					<strong>Enter Your code here:<br/></strong>

                    <textarea class="codemirror-textarea" name="code" onkeydown=insertTab(this,event) id="code"></textarea>

					<span id="errorCode" class="error"></span><br/><br/>
                    <strong>Sample Input please:<br/></strong>
					<textarea style="width:100%" name="input" rows=7 cols=100 id="input"></textarea><br/><br/>
					<input style="margin-left:600px;" type="submit" class="btn btn-info btn-lg" data-target="#myModal" value="Execute" id="submit">
					<input style="margin-left:600px" type="reset" class="btn btn-info btn-lg" value="Reset"><br/>


  <input type="button" class="btn btn-info btn-lg" value="Open Modal" data-toggle="modal" data-target="#myModal">

  <!-- Modal -->
  <div class="modal fade"  id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>


				</form>
				<!-- javascript -->


</body>
</html>
