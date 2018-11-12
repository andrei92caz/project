<html>

<head>
    <title>Andrew's Blog</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">


    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
    <script src="http://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-dark bg-primary navbar-expand-sm">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?= base_url(); ?>">Andrew's Blog</a>
            </div>
            <div id="navbar">
                <ul class="list-inline-mb-0">
                    <li class="list-inline-item"><a href="<?= base_url(); ?>">Home</a></li>
                    <li class="list-inline-item"><a href="<?= base_url(); ?>about">About</a></li>
                    <li class="list-inline-item"><a href="<?= base_url(); ?>posts">Blog</a></li>
                    <li class="list-inline-item"><a href="<?= base_url(); ?>categories">Categories</a></li>
                </ul>
                <ul class="list-inline">
                    <?php if(!$this->session->userdata('logged_in')) : ?>
                    <li class="list-inline-item"><a href="<?= base_url(); ?>users/login">Login</a></li>
                    <li class="list-inline-item"><a href="<?= base_url(); ?>users/register">Register</a></li>

                    <?php endif; ?>

                    <?php if($this->session->userdata('logged_in')) : ?>
                    <li class="list-inline-item"><a href="<?= base_url(); ?>posts/create">Create Post</a></li>
                    <li class="list-inline-item"><a href="<?= base_url(); ?>categories/create">Create Category</a></li>
                    <li class="list-inline-item"><a href="<?= base_url(); ?>users/logout">Logout</a></li>
                    <?php endif;?>
                </ul>
            </div>
        </div>
    </nav>
    <div class='container'>

        <!-- Flash message -->

        <?php if($this->session->flashdata('user_registered')) : ?>

        <?= "<p class='alert alert-success'>".$this->session->flashdata('user_registered')."</p>" ; ?>

        <?php endif ?>

        <?php if($this->session->flashdata('post_updated')) : ?>

        <?= "<p class='alert alert-success'>".$this->session->flashdata('post_updated')."</p>" ; ?>

        <?php endif ?>

        <?php if($this->session->flashdata('post_created')) : ?>

        <?= "<p class='alert alert-success'>".$this->session->flashdata('post_created')."</p>" ; ?>

        <?php endif ?>

        <?php if($this->session->flashdata('category_created')) : ?>

        <?= "<p class='alert alert-success'>".$this->session->flashdata('category_created')."</p>" ; ?>

        <?php endif ?>

        <?php if($this->session->flashdata('post_deleted')) : ?>

        <?= "<p class='alert alert-success'>".$this->session->flashdata('post_deleted')."</p>" ; ?>

        <?php endif ?>

        <?php if($this->session->flashdata('login_failed')) : ?>

        <?= "<p class='alert alert-danger'>".$this->session->flashdata('login_failed')."</p>" ; ?>

        <?php endif ?>

        <?php if($this->session->flashdata('user_loggedin')) : ?>

        <?= "<p class='alert alert-success'>".$this->session->flashdata('user_loggedin')."</p>" ; ?>

        <?php endif ?>

        <?php if($this->session->flashdata('user_logout')) : ?>

        <?= "<p class='alert alert-success'>".$this->session->flashdata('user_logout')."</p>" ; ?>

        <?php endif ?>

        <?php if($this->session->flashdata('category_deleted')) : ?>

        <?= "<p class='alert alert-danger'>".$this->session->flashdata('category_deleted')."</p>" ; ?>

        <?php endif ?>

        