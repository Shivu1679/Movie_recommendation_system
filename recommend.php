<?php
          
          

        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #636262;
            margin: 0;
            padding: 0;
        }

        header {
            text-align: center;
            background-color: #3a6e02;
            color: #fff;
            padding: 20px;
        }

        h1 {
            margin: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            width: 80%;
            justify-content: center;
            align-items: center;
            padding: 20px;
            margin: auto;
        }

        .movie-poster {
            width: 200px;
            margin: 10px;
            cursor: pointer;
            transition-duration: 300ms;
            
            
        }
        .movie-poster:hover
        {
            box-shadow: 2px 4px 6px rgba(0, 0, 0, 0.1);
            transform: scale(1.05);




        }

        .movie-poster img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Movies</h1>
    </header>
    <div class="container">
        <!-- romantic genre -->

        <?php
          
          if(isset($_POST['genre']))
          {
            if($_POST['genre'] == 'romance')
            {
                echo '<div class="movie-poster">  
                <img src="https://th.bing.com/th/id/R.b6e1dfc8daf72b414d5b1329a9a445c9?rik=5OD%2bggEmtL4qCQ&riu=http%3a%2f%2fwww.theglobaldispatch.com%2fwp-content%2fuploads%2f2018%2f01%2fforever-my-girl-poster.jpg&ehk=UQl%2f%2bu%2b7rIWO65MnZ6H%2beuYf3Fa8AiYfc%2bBFLYeDRTw%3d&risl=&pid=ImgRaw&r=0">
            </div>
            <div class="movie-poster">
                <img src="https://images.saymedia-content.com/.image/t_share/MTc2NTc3MTgwOTE3MDQ5MDk4/the-best-romantic-movies-available-on-netflix-instant-stream.jpg" alt="Movie Poster 2">
            </div>
            <div class="movie-poster">
                <img src="https://static1.colliderimages.com/wordpress/wp-content/uploads/2023/07/love-again-film-poster.jpg" alt="Movie Poster 3">
            </div> 
        
        <div class="movie-poster">
            <img src="https://th.bing.com/th/id/R.8147305a05a789c149a31566e9d0d9ad?rik=7iELzeWWvpzGFA&riu=http%3a%2f%2fwww.hancinema.net%2fphotos%2ffullsizephoto198600.jpg&ehk=o9WQCpwAMVS8AcMtoix1q5fVaMHOMZTzQ%2bQ%2f1Ex4IeI%3d&risl=&pid=ImgRaw&r=0" alt="Movie Poster 4">
        </div> 
        
        </div>' ;
            }
            else if($_POST['genre'] == 'horror')
            {
                echo '<div class="movie-poster">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrrarC5joNAM4gWYFCI7pO72T7abx4YwZ68_NmXHhVtEW7rp9lj846vv5TDRrBgNgj8aI&usqp=CAU" alt="Movie Poster 9">
            </div> 
            <div class="movie-poster">
                <img src="https://upload.wikimedia.org/wikipedia/en/4/4f/Insidious_the_red_door.png" alt="Movie Poster 10">
            </div> 
            <div class="movie-poster">
                <img src="data:image/jpeg;base64,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" alt="Movie Poster 11">
            </div> 
        
        <div class="movie-poster">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJym8HRB6oX-JHiCoZrw7osh8O_FgFl9AD5w&usqp=CAU" alt="Movie Poster 12">
            </div> ';
            }
            else if($_POST['genre']=='teen-drama')
            {
                echo '<div class="movie-poster">
                <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/a9/Karate_kid.jpg/220px-Karate_kid.jpg" alt="Movie Poster 5">
            </div> 
            <div class="movie-poster">
                <img src="https://pbs.twimg.com/media/E1Zw70AUYAEjdaT?format=jpg&name=large" alt="Movie Poster 6">
            </div> 
            <div class="movie-poster">
                <img src="https://i.pinimg.com/736x/12/66/22/1266227100f588ed5b8db99cc4e79f62.jpg" alt="Movie Poster 7">
            </div> 
       
        <div class="movie-poster">
            <img src="https://commackcourant.com/wp-content/uploads/2021/05/ginny-and-georgia.jpg" alt="Movie Poster 8">
        </div> ';
            }
            else if($_POST['genre']=='drama')
            {
                echo '
                <div class="movie-poster">
                    <img src="https://marketing.dcassetcdn.com/blog/2017/February/movie-posters/2_600.jpg" alt="Movie Poster 13">
                </div> 
                <div class="movie-poster">
                    <img src="https://i.pinimg.com/736x/04/5c/11/045c11fd102a7049195a0729a0b9ab7a.jpg" alt="Movie Poster 14">
                </div> 
                <div class="movie-poster">
                    <img src="https://www.coffeeandcigarettes.co.uk/wp-content/uploads/2017/09/Euphoria.jpg" alt="Movie Poster 15">
                </div> 
                <div class="movie-poster">
                    <img src="https://e1.pxfuel.com/desktop-wallpaper/880/81/desktop-wallpaper-the-11-best-hindi-movies-streaming-on-amazon-prime-bollywood-2022-movie-poster-thumbnail.jpg" alt="Movie Poster 16">
                </div> ';
            }

          }


        ?>
     
    </div>
</body>
</html>
