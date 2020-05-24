<html>
<head>
	<title>CI Blog</title>

	<style>
		.post-date{
			background: #f4f4f4;
			padding: 4px;
			margin: 3px 0;
			display: block;
		}

		.post-thumb{
			width: 100%;
		}

	</style>

	<script src="http://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
	<link rel="stylesheet"  type="text/css" href="/ciblog/css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "/ciblog/css/style.css">
<!--	<link rel="stylesheet"  type="text/css" href="/ciblog/assets/css/style.css">-->
</head>
<body>
<nav class="navbar navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a href="/ciblog/" class="navbar-brand">ciBlog</a>
		</div>
		<div id="navbar">
			<ul class="nav navbar-nav">
				<li><a href="/ciblog/">Home</a></li>
				<li><a href="/ciblog/about">About</a></li>
				<li><a href="/ciblog/categories">Categories</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
				<li><a href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="container">


