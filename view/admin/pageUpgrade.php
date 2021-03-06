<!--PAGE QUI PERMET D'AFFICHER EN BACK OFFICE LA POSSIBILITE DES MODIFIER LES CHAMPS-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modification</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <style>
        body {
            padding-top: 70px;
        }
    </style>
</head>
<body role="document">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="../">Accueil</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="">Pages</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container theme-showcase" role="main">
    <form action="" method="post">
        <fieldset class="form-group">
            <!--Slug-->
            <label class="control-label" for="slug">Slug</label>
            <input type="text" class="form-control control-label" id="slug" name="slug" placeholder="slug" value="<?=$details->slug?>" required>
            <!--Title-->
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?=$details->title?>" required>
            <!--H1-->
            <label for="h1">H1</label>
            <input type="text" class="form-control" id="h1" name="h1" placeholder="h1" value="<?=$details->h1?>" required>
            <!--Body-->
            <label for="body">Body</label>
            <input type="text" class="form-control" id="body" name="body" placeholder="Body" value="<?=$details->body?>" required>
            <!--Img-->
            <label for="img">Image</label>
            <input type="text" class="form-control" id="img" name="img" value="<?=$details->img?>" required>
            <!--Span text-->
            <label for="span_text">Span Text</label>
            <input type="text" class="form-control" id="span_text" name="span_text" placeholder="Span Text" value="<?=$details->span_text?>" required>
            <!--Span class-->
            <label for="span_class">Span Class</label>
            <select class="form-control" id="span_class" name="span_class">
            <!--Fonction isSelected dans init.php permettant de prendre le dernier champ sélectionné-->
                <option <?= isSelected('label-danger', $details->span_class) ?> >label-danger</option>
                <option <?= isSelected('label-success', $details->span_class) ?> >label-success</option>
            </select>
        </fieldset>
        <input type="submit" name="submit" class="btn btn-success"/>
    </form>
</div>
</body>
</html>