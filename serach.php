<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iDiscuss Forum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<style>
#cont {
    min-height: 100vh;
}
</style>

<body>
    <?php

    //Database-connection include
    include './Partials/_Db-connect.php';
    // Header include
    require './navbar/_header.php';


    ?>

    <!-- serach-logic -->


    <div class="container my-4" id="cont">
        <h1>Search Result for <?php echo $_GET['search'] ?></h1>


        <?php
        $noresult = true;
        if (isset($_GET['search'])) {
            $querry = $_GET['search'];
        
        $sql = "SELECT * FROM `thread` WHERE MATCH(`thread_title`,`thread_desc`) AGAINST ('$querry')";
        $result = mysqli_query($conn, $sql);
        //mysqli_fetch_assoc ya function array ko fetch karna ka lia hai 
        while ($row = mysqli_fetch_assoc($result)) {
            $title = $row['thread_title'];
            $desc = $row['thread_desc'];
            $thread_id = $row['thread_id'];
            $url = "thread.php?threadid=" . $thread_id;

            $url = "http://localhost/Forum2/thread.php?threadid=" . $thread_id;



            // var_dump($url);
            $noresult = false;

// Display serach result
            echo '  <div class="result">
        <h3> <a href="' . $url . '" class="text-dark">' . $title . '</a></h3>
        <p>' . $desc . '</p>
    </div>
</div>

        ';
        }
        if($noresult){
            echo'
            <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <p class="display-4">No Results Found</p>
                        <p class="lead"> Suggestions: <ul>
                                <li>Make sure that all words are spelled correctly.</li>
                                <li>Try different keywords.</li>
                                <li>Try more general keywords. </li></ul>
                        </p>
                    </div>
                 </div>
            ';

        }
    }
        ?>
        <!-- footer -->

        <footer class="pt-3 mt-4 text-muted border-top text-center" id="ft">
            © 2022
        </footer>
    </div>

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>