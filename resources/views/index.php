<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Guestbook</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>

<body id="guestbook">

    <!-- Begin page content -->
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
                <h2>Lumen and Vue.js Single Page Application</h2>
                <h4>Simple Guestbook</h4>
            </div>

            <form v-on="submit: onCreate">
                <div class="form-group">
                    <input type="text" class="form-control input-lg" name="author" v-model="author" placeholder="Name">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control input-lg" name="text" v-model="text" placeholder="Put here your text">
                </div>

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                </div>
            </form>

            <div class="comment" v-repeat="comment: comments">
                <h3>Comment #{{ comment.id }} <small>by {{ comment.author }}</h3>
                <p>{{ comment.text }}</p>
                <p><span class="btn btn-primary text-muted" v-on="click: onDelete(comment)">Delete</span></p>
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/0.12.1/vue.js"></script>
<script src="/js/app.js"></script>
</html>
