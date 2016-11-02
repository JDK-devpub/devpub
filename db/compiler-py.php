<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>DevPub</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

 <style type="text/css">
		  html {font:normal 76% verdana, arial, san serif;}
          body{
              height:200%;
          }
      #editContent{ 
          margin-left:30px;
          padding-left:3px;
          width:600px; 
          height:200px;
          border:1px solid #666;
      } 
     .textAreaWithLines{ 
         display:block;
         margin:0;
         border:1px solid #666;
         border-right:none;
         background:#aaa;
      } 
   #codeTextarea{
      width:500px;
      height:400px;
   }
   .textAreaWithLines{
      font-family:consolas;      
      border:1px solid #F00;
      
   }
   .textAreaWithLines textarea,.textAreaWithLines div{
      border:0px;
      line-height:120%;
      font-size:12px;
   }
   .lineObj{
      color:red;
   }
   </style>
   
   <script type="text/javascript">
   
   var lineObjOffsetTop = 2;
   
   function createTextAreaWithLines(id)
   {
      var el = document.createElement('DIV');
      var ta = document.getElementById(id);
      ta.parentNode.insertBefore(el,ta);
      el.appendChild(ta);
      
      el.className='textAreaWithLines';
      el.style.width = (ta.offsetWidth + 30) + 'px';
      ta.style.position = 'absolute';
      ta.style.left = '30px';
      el.style.height = (ta.offsetHeight + 2) + 'px';
      el.style.overflow='hidden';
      el.style.position = 'relative';
      el.style.width = (ta.offsetWidth + 30) + 'px';
      var lineObj = document.createElement('DIV');
      lineObj.style.position = 'absolute';
      lineObj.style.top = lineObjOffsetTop + 'px';
      lineObj.style.left = '0px';
      lineObj.style.width = '27px';
      el.insertBefore(lineObj,ta);
      lineObj.style.textAlign = 'right';
      lineObj.className='lineObj';
      var string = '';
      for(var no=1;no<200;no++){
         if(string.length>0)string = string + '<br>';
         string = string + no;
      }
      
       ta.onkeydown    = function() { setLine(); }
        ta.onmousedown  = function() { setLine(); move=true; }
        ta.onmouseup    = function() { setLine(); move=false; }
        ta.onmousemove  = function() { if(move){setLine();} } 
      ta.onscroll = function() { positionLineObj(lineObj,ta); };
      ta.onblur = function() { positionLineObj(lineObj,ta); };
      ta.onfocus = function() { positionLineObj(lineObj,ta); };
      ta.onmouseover = function() { positionLineObj(lineObj,ta); };
      lineObj.innerHTML = string;
      
   }
   
   function positionLineObj(obj,ta)
   {
      obj.style.top = (ta.scrollTop * -1 + lineObjOffsetTop) + 'px';   
   
      
   } function setLine(){
       el.scrollTop   = ta.scrollTop; 
       el.style.top   = (ta.offsetTop) + "px";
        el.style.left  = (ta.offsetLeft - 27) + "px";
     }
   
   </script>

</head>

<body>

	<!-- header 
   ================================================== -->
   <header class="main-header">
   	<div class="row">
   		<div class="logo">
	         Say Hell to Python!
	      </div>   		
   	</div>   
	
   </header> <!-- /header -->


	<!-- main content
   ================================================== -->
   <main id="main-404-content" class="main-content-particle-js">

   	<div class="content-wrap">

		   <div class="shadow-overlay"></div>
		   <div class="main-content">
		   	<div class="row">
		   		<div class="col-twelve">
                            <!-- Repl.it -->
		<script src="https://repl.it/lib/api.js"></script>
		<script>
			TOKEN   = { time_created: 1477985093000,
				msg_mac: 'CD+8987C5gq4CFwl7AtQxs/nFH2QMNef8LqxFRaSxkM=' }

				var repl = new ReplitClient('api.repl.it', '80', 'python', TOKEN);

				repl.connect().then(
					function() {
						document.querySelector('.status').innerHTML = 'connected';
						start();
					},
					function() {
						document.querySelector('.status').innerHTML = 'failed';
					}
				);

				function start() {
					
					document.querySelector('button').onclick = function() {
						repl.evaluate(
							document.querySelector('textarea').value,
							{    
								stdout: function(str) {
									document.querySelector('.out').innerHTML +='\n' + str;
								}
							}
						).then(
							function(result) {
								document.querySelector('.result').innerHTML += '\n' + (result.error || result.data);
							},
							function(err) {
								console.error(err);
							}
						);
					};
				}
		</script>
		<div class="status">connecting..</div>

			<textarea id = "codeTextarea" class="" style="padding:30dp;width:1000px;height:400px;background-color:white;color:lime"cols="10" ></textarea>
		
		<br><button>Execute</button></br><br>

		<table style="width:100%">
		  <tr>
		    <th><textarea style="width:550px;height:200px;color:green;" class="result">Terminal Ouput</textarea></th>
		    <th><textarea style="width:550px;height:200px;color:green;" class="out">Program Output</textarea></th>
		  </tr>
		</table>

		<!-- javascript -->
		<script type="text/javascript">
		createTextAreaWithLines('codeTextarea');
		</script>	
		<script type="text/javascript" src="js/jsrepl/jsrepl.js"></script>
			  					
			   	</div> <!-- /twelve --> 		   			
		   	</div> <!-- /row -->    		 		
		   </div> <!-- /main-content --> 

		   <footer>
		   	<div class="row">   			
		  			<div class="col-five tab-full bottom-links">
			   		<ul class="links">
				   		<li><a href="../index.php">Home</a></li>		                    
				   	</ul>
			   	</div>   		   		

		   	</div> <!-- /row -->    		  		
		   </footer>

		</div> <!-- /content-wrap -->
   
   </main> <!-- /main-404-content -->

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>