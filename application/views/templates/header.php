<html>
<head>
	<title>CI Blog</title>

	<style>
		.post-date {
			background: #f4f4f4;
			padding: 4px;
			margin: 3px 0;
			display: block;
		}

		.post-thumb {
			width: 100%;
		}

	</style>

	<script src="http://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="/ciblog/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/ciblog/css/style.css">
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
				<?php if (!$this->session->userdata('logged_in')) : ?>
					<li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
					<li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
				<?php endif; ?>

				<?php if ($this->session->userdata('logged_in')) : ?>
					<li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
					<li><a href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
					<li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
				<?php endif; ?>


			</ul>
		</div>
	</div>
</nav>

<div class="container">
	<!--	flash message-->
	<?php if ($this->session->flashdata('user_registered')): ?>
		<?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_registered') . '</p>'; ?>
	<?php endif; ?>
	<?php if ($this->session->flashdata('post_created')): ?>
		<?php echo '<p class="alert alert-success">' . $this->session->flashdata('post_created') . '</p>'; ?>
	<?php endif; ?>
	<?php if ($this->session->flashdata('post_updated')): ?>
		<?php echo '<p class="alert alert-success">' . $this->session->flashdata('post_updated') . '</p>'; ?>
	<?php endif; ?>
	<?php if ($this->session->flashdata('category_created')): ?>
		<?php echo '<p class="alert alert-success">' . $this->session->flashdata('category_created') . '</p>'; ?>
	<?php endif; ?>
	<?php if ($this->session->flashdata('category_deleted')): ?>
		<?php echo '<p class="alert alert-success">' . $this->session->flashdata('category_deleted') . '</p>'; ?>
	<?php endif; ?>
	<?php if ($this->session->flashdata('login_failed')): ?>
		<?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '</p>'; ?>
	<?php endif; ?>
	<?php if ($this->session->flashdata('user_loggedin')): ?>
		<?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedin') . '</p>'; ?>
	<?php endif; ?>
	<?php if ($this->session->flashdata('user_loggedout')): ?>
		<?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedout') . '</p>'; ?>
	<?php endif; ?>

