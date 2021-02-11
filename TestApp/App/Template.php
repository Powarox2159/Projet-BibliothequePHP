<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $this->title ?></title>

        <link rel="stylesheet" href="App/Css/Template.css"/>
    	<link rel="stylesheet" href="App/Css/Responsive.css"/>

    	<script defer src="App/Js/Upload.js"></script>
        <script defer src="App/Js/Actions.js"></script>
        <script defer src="App/Js/CustomElements/Component.js"></script>

    	<script src="https://kit.fontawesome.com/646143606b.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <h1><?php echo $this->title ?></h1>
        </header>

        <main>
            <?php echo $this->content ?>
        </main>

        <footer>
            <p>Test application of Librairie Php metadata</p>
        </footer>
    </body>
</html>
