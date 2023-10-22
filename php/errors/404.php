<!DOCTYPE html>
<html>
    <head>
        <title>404 Not found</title>
        <?php 
        if (!isset($domain)) {
            include '../include/head.php';
        } else {
            include 'php/include/head.php';
        }?>
    </head>
    <body>
        <?php 
        if (!isset($domain)) {
            include '../include/header.php';
        } else {
            include 'php/include/header.php';
        }?>
        <main>
            <article>
                <h4>404 Not found</h4>
                <p>Sorry, the page you are looking for is currently unavailable.<br/>
                Please try again later.</p>
                <p>If you are the system administrator of this resource then you should check
                the error log for details.</p>
                <p><em>Faithfully yours, nginx.</em></p>
            </article>
        </main>
        <?php 
        if (!isset($domain)) {
            include '../include/footer.php';
        } else {
            include 'php/include/footer.php';
        }?>
    </body>
</html>
