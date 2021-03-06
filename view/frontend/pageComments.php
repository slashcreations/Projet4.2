<?php $title = 'Commentaires';?>

<?php ob_start(); ?>
<div id="backComments">
    <div id="frontComments">
        <!-- les avis-->
        <article id="list" class="row">
            <div class="col-12" id="conteneur">
                <h1>Les commentaires sur le chapitre :
                    <?=$_GET['id_chapter'] ?>
                </h1>
                <?php
    while ($comment = $comments->fetch()){
        $id=$comment['id_comment'];
                    ?>
                <div class="col-sm-12 col-md-6 col-lg-3 Avis">
                    <h4> Par :
                        <?= htmlspecialchars($comment['author']) ?>
                    </h4>
                    <p>
                        <?= nl2br(htmlspecialchars($comment['comment'])) ?>
                    </p>
                    <br />
                    <br />
                    <span>le :
                        <?= $comment['DateComment_fr'] ?></span>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="<?='#signal'.$id?>"><em>Signaler ce commentaire</em>
                    </button>
                    <div class="modal" id="<?='signal'.$id?>" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <p>Êtes-vous sûr de vouloir signaler ce commentaire<br /></p>
                                <div class="modal-footer">
                                    <a class="btn btn-primary" href="./index.php?action=signalComment&&id_comment=<?=$id?>&&id_chapter=<?=$comment['id_chapter'] ?>&&from=<?=$title?>" role="button"> <i class="fas fa-check"></i> oui</a>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal"> <i class="fas fa-times"></i> annuler</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
    }
                       $comments->closeCursor();
                ?>
            </div>
        </article>
        <!--zonne de commentaire -->
        <article id="letComment" class="row">
            <h2>Laisser un commentaire </h2>
            <div id="method">
                <p>Attention: Les deux champs doivent être remplis, ils ne doivent pas contenir de caractères spéciaux.</p>
            </div>
            <form action="./index.php?action=addComment&&id_chapter=<?=$_GET['id_chapter']?> " method="post">
                <div class="col-12">
                    <textarea id="comment" name="comment" rows="10" cols="60"></textarea>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <label for="author">
                        <h4> Auteur</h4>
                    </label>
                    <br />
                    <input type="text" id="author" name="author" />
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <input type="submit" value="Envoyer" />
                </div>
            </form>
        </article>
    </div>
</div>

<?php $content=ob_get_clean(); ?>
<?php require('template.php'); ?>
