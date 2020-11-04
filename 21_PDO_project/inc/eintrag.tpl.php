<article>
    <h2><?= bereinige($film['titel']) ?></h2>
    <ul>
        <li>
            Veröffentlichung:
            <?= formatiereDatum($film['veroeffentlichung']) ?>
        </li>
        <li>
            Dauer:
            <?= (int)$film['dauer'] ?>
        </li>
        <?php if (!empty($film['genre_id'])): ?>
            <li>
                Genre:
                <?= bereinige($film['genre_titel']) ?>
            </li>
        <?php endif; ?>
    </ul>

    <div>
        [ <a
            href="bearbeiten.php?id=<?= (int)$film['id'] ?>"
        >Bearbeiten</a> ]
        [ <a
            href="loeschen.php?id=<?= (int)$film['id'] ?>"
        >Löschen</a> ]
    </div>
    
</article>