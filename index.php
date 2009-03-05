<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<!-- TODO: Fix wrong active tab color on hover -->
	<!-- TODO: Switch Theme box style -->
	<!-- TODO: Notice box (block without header essentially) -->
	<!-- TODO: Pager control -->
	<!-- TODO: IE 6 & 7 alternate stylesheets -->	
	<title>YUI App Theme</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" type="text/css">
	<style type="text/css" media="screen">
		html, body { background-color:#f0f0ee; color:#222; }
		
		/* Make the page full bleed */
		#doc3 { margin:0; }

		/* Header */
		#hd { padding:1.2em 1.5em 0 1.5em; background-color:#7a1818; }
		h1 { font-size:230%; color:#fff; }

		#navigation { margin-top:1.5em; background-color:#262626; }
		#navigation li { float:left; }
		#navigation li a { display:block; color:#fff; text-decoration:none; }
		#navigation li a:hover { text-decoration:underline; }

		#primary-navigation li a { font-size:116%; padding:0.5em 1em; }
		#primary-navigation li.active a { background-color:#f0f0ee; color:#000; }

		#user-navigation { float:right; }
		#user-navigation li a { font-size:93%; padding:0.8em 1em; }

		/* Body */
		#bd { padding:1.5em; }
		
		/* Basic block */
		.block { background-color:#fff; margin-bottom:1.5em; }
		.block .hd { background-color:#7a1818; padding:0.7em 1em; color:#fff; border-bottom:10px solid #262626; }
		.block .bd { padding:1em; }
		.block .bd h2 { font-size:153.9%; color:#7a1818; margin-bottom:0.5em; }
		.block .bd h3 { font-size:153.9%; color:#7a1818; margin-bottom:0.5em; }

		/* Block with tabs */
		.tabs .hd { padding:0; }
		.tabs .hd ul li { float:left; }
		.tabs .hd ul li a { display:block; color:#fff; text-decoration:none; padding:0.5em 1em; }
		.tabs .hd ul li a:hover { background-color:#470E0E; }
		.tabs .hd ul li.active a { background-color:#262626; color:#fff; text-decoration:none; }
		.tabs .hd h2, .tabs .hd h3 { position:absolute; margin-left:-5000px; }
		
		.block hr { background-color:#f0f0ee; color:#f0f0ee; height:1px; border:0; }
		
		/* Tables */
		table { width:100%; }
		table td { padding:0.5em; }
		table thead { background-color:#262626; color:#fff; font-weight:bold; }
		table thead a { text-decoration:none; color:#fff; }
		table thead a:hover { text-decoration:underline; }
		table tbody a { text-decoration:underline; }

		/* Forms */
		form label { font-weight:bold; }
		form label span { font-weight:normal; color:#f00; font-size:85%; }
		form span.info { font-style:italic; color:#aaa; font-size:85%; }
		form .text { display:block; width:99%; border:1px solid #aaa; padding:0.3em; }
		form .column { width:48%; }
		form .left { float:left; }
		form .right { float:right; }

		/* Messages */
		.alert { padding:0.5em; text-align:center; }
		.error { border:2px solid #fbb; background-color:#fdd; }
		.warning { border:2px solid #fffaaa; background-color:#ffc; }
		.notice { border:2px solid #1fdf00; background-color:#bbffb6; }
		
		/* Lists */
		ol.list, ul.list, dl.list { margin-left:2em; margin-bottom:1em; }
		ol.list li { list-style:decimal outside; }
		ul.list li { list-style:disc outside; }
		dl.list dd { margin-left:1em; }
		
		/* Footer */
		#ft { text-align:center; font-size:85%; padding:0.5em 1em; color:#262626; }
				
		/* Generics */
		p { margin-bottom:1em; }
		a { color:#7a1818; }
		strong { font-weight:bold; }
		em { font-style:italic; }
		abbr, acronym { border-bottom:1px dotted #000; cursor:help; }
		
		.small { font-size:85%; }
		.gray { color:#999; }
		.highlight { background-color:#ffffcc; }
		.clear { clear:both; }
		.text-left { text-align:left; }
		.text-right { text-align:right; }
		.text-center { text-align:center; }
	</style>
</head>
<body>
	<div id="doc3" class="yui-t6">

		<div id="hd">
			<h1>YUI App Theme</h1>
			<div id="navigation">
				<ul id="primary-navigation">
					<li><a href="#">Main Page</a></li>
					<li class="active"><a href="#">Active</a></li>
					<li><a href="#">Login</a></li>
					<li><a href="#">Signup</a></li>
				</ul>
				
				<ul id="user-navigation">
					<li><a href="#">Profile</a></li>
					<li><a href="#">Settings</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
				<div class="clear"></div>
			</div>
		</div>

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b"><div class="yui-g">

					<!-- Basic block -->
					<div class="block">
						<div class="hd">
							<h2>Basic Block &larr; This is an H2 or H3</h2>
						</div>
						<div class="bd">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <span class="highlight">Excepteur sint occaecat cupidatat non proident</span>, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
					
					<!-- Basic block with tabs -->
					<div class="block tabs">
						<div class="hd">
							<h2>Fake Header For SEO Purposes</h2>
							<ul>
								<li class="active"><a href="#">Text</a></li>
								<li><a href="#">Tables</a></li>
								<li><a href="#">Forms</a></li>
								<li><a href="#">Messages</a></li>
								<li><a href="#">2 Column Forms</a></li>
								<li><a href="#">Lists</a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="bd">
							<h2>Some H2 Text</h2>
							<h3>Some H3 Text</h3>
							<p>The tabs at the top of this block are made using a &lt;ul&gt;. If you look at the source, you'll also notice that right above them is an &lt;h2&gt; tag which is hidden from view. This lets you define a header for SEO purposes without affecting your layout.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <span class="highlight">Excepteur sint occaecat cupidatat non proident</span>, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p class="small">small text</p>
							<p class="gray">gray text</p>
							<hr>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <span class="highlight">Excepteur sint occaecat cupidatat non proident</span>, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
					
					<!-- Tables -->
					<div class="block tabs">
						<div class="hd">
							<ul>
								<li><a href="#">Text</a></li>
								<li class="active"><a href="#">Tables</a></li>
								<li><a href="#">Forms</a></li>
								<li><a href="#">Messages</a></li>
								<li><a href="#">2 Column Forms</a></li>
								<li><a href="#">Lists</a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="bd">
							<h2>Tables</h2>
							<table>
								<thead>
									<tr>
										<td><input type="checkbox" name="" value="" id=""></td>
										<td>ID</td>
										<td><a href="#">Login</a></td>
										<td><a href="#">First Name</a></td>
										<td><a href="#">Last Name</a></td>
										<td>&nbsp;</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="checkbox" name="" value="" id=""></td>
										<td>1</td>
										<td>susan</td>
										<td>Susan</td>
										<td>Delgado</td>
										<td class="text-right"><a href="#">view</a> | <a href="#">edit</a> | <a href="#">delete</a></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="" value="" id=""></td>
										<td>2</td>
										<td>eddie</td>
										<td>Edward</td>
										<td>Dean</td>
										<td class="text-right"><a href="#">view</a> | <a href="#">edit</a> | <a href="#">delete</a></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="" value="" id=""></td>
										<td>1</td>
										<td>jake</td>
										<td>John</td>
										<td>Chambers</td>
										<td class="text-right"><a href="#">view</a> | <a href="#">edit</a> | <a href="#">delete</a></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="" value="" id=""></td>
										<td>1</td>
										<td>calvin</td>
										<td>Calvin</td>
										<td>Tower</td>
										<td class="text-right"><a href="#">view</a> | <a href="#">edit</a> | <a href="#">delete</a></td>
									</tr>
								</tbody>
							</table>
									
						</div>
					</div>

					<!-- Forms -->
					<div class="block tabs">
						<div class="hd">
							<ul>
								<li><a href="#">Text</a></li>
								<li><a href="#">Tables</a></li>
								<li class="active"><a href="#">Forms</a></li>
								<li><a href="#">Messages</a></li>
								<li><a href="#">2 Column Forms</a></li>
								<li><a href="#">Lists</a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="bd">
							<h2>Forms</h2>
							<form>
								<p><label for="">Text field</label>
									<input type="text" class="text" name="" value="" id="">
									<span class="info">Ex: some text</span>
								</p>
								<p><label for="">Title <span class="validation">must be awesome</span></label>
									<input type="text" class="text" name="" value="Dude, it's like totally awesome." id="">
									<span class="info">Ex: some more text</span>
								</p>
								<p><label for="">Text area</label>
									<textarea class="text" name="" id=""></textarea>
									<span class="info">Lots of text can go in here</span>
								</p>
								<p><input type="submit" name="" value="Submit" id=""> or <a href="#">Cancel</a></p>
							</form>
						</div>
					</div>

					<!-- Messages -->
					<div class="block tabs">
						<div class="hd">
							<ul>
								<li><a href="#">Text</a></li>
								<li><a href="#">Tables</a></li>
								<li><a href="#">Forms</a></li>
								<li class="active"><a href="#">Messages</a></li>
								<li><a href="#">2 Column Forms</a></li>
								<li><a href="#">Lists</a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="bd">
							<h2>Messages</h2>
							<p class="alert error">Error message</p>
							<p class="alert warning">Warning message</p>
							<p class="alert notice">Notice message</p>
						</div>
					</div>

					<!-- Two column forms -->
					<div class="block tabs">
						<div class="hd">
							<ul>
								<li><a href="#">Text</a></li>
								<li><a href="#">Tables</a></li>
								<li><a href="#">Forms</a></li>
								<li><a href="#">Messages</a></li>
								<li class="active"><a href="#">2 Column Forms</a></li>
								<li><a href="#">Lists</a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="bd">
							<h2>2 Column Forms</h2>
							<form>
								<div class="column left">
									<p><label for="">Text field</label>
										<input type="text" class="text" name="" value="" id="">
										<span class="info">Ex: some text</span>
									</p>
									<p><label for="">Title <span class="validation">must be awesome</span></label>
										<input type="text" class="text" name="" value="Dude, it's like totally awesome." id="">
										<span class="info">Ex: some more text</span>
									</p>
									<p><label for="">Text area</label>
										<textarea class="text" name="" id=""></textarea>
										<span class="info">Lots of text can go in here</span>
									</p>
								</div>
								<div class="column right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
								<div class="clear"></div>
								<p><input type="submit" name="" value="Submit" id=""> or <a href="#">Cancel</a></p>
							</form>
						</div>
					</div>					

					<!-- Lists -->
					<div class="block tabs">
						<div class="hd">
							<ul>
								<li><a href="#">Text</a></li>
								<li><a href="#">Tables</a></li>
								<li><a href="#">Forms</a></li>
								<li><a href="#">Messages</a></li>
								<li><a href="#">2 Column Forms</a></li>
								<li class="active"><a href="#">Lists</a></li>
							</ul>
							<div class="clear"></div>
						</div>
						<div class="bd">
							<h2>Lists</h2>
							<p>Unordered List</p>
							<ul class="list">
								<li>Apple</li>
								<li>Pear</li>
								<li>Orange</li>
							</ul>

							<p>Ordered List</p>
							<ol class="list">
								<li>Mars</li>
								<li>Jupiter</li>
								<li>Venus</li>
							</ol>
							
							<p>Dictionary List</p>
							<dl class="list">
								<dt>Hollywood</dt>
								<dd>Academy Awards</dd>
								<dt>Television</dt>
								<dd>Emmys</dd>
								<dt>Broadway</dt>
								<dd>Tonys</dd>
							</dl>
						</div>
					</div>
					
				</div></div>
			</div>
			<div id="sidebar" class="yui-b">

				<div class="block">
					<div class="hd">
						<h2>Sidebar Block  &larr; This is an H2 or H3</h2>
					</div>
					<div class="bd">
						<p>This sidebar block uses the exact same markup as the main body blocks. This lets you move them around easily - as they automatically resize to fit the available space.</p>
						<p><em>Lorem ipsum dolor sit amet</em>, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <strong>Excepteur sint occaecat cupidatat non proident</strong>, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>

			</div>
		</div>

		<div id="ft">
			<p class="inner">Copyright &copy; 2009 Blah Your Website</p>
		</div>

	</div>
</body>
</html>
