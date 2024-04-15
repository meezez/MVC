<?php $this->_t = 'Titre ?';
foreach($articles as $article): ?>
<h1><?= $article->title() ?></h1>
<h2><?= $article->date() ?></h2>
<?php endforeach; ?>