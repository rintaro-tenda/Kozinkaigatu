<body>
    <h1>メモ一覧</h1>
    <a href="new.php">メモを書く</a>
    <main>
        <?php foreach ($memo as $memos):?>
            <dev>
                <section>
                    <h2><?php print $memos['title']?></h2>
                    <div>
                        記録日 : <?php echo $memos['date']?>年&nbsp; | &nbsp;
                        記録回数 : <?php echo $memos['counts']?>
                    </div>
                </section>
            </dev>
        <?php endforeach; ?>
    </main>
</body>
