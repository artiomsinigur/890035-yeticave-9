<main>
    <nav class="nav">
        <ul class="nav__list container">
            <?php foreach ($categories as $cat): ?>
                <li class="nav__item <?php if ($cat_id == $cat['id']): ?>nav__item--current<?php endif; ?>">
                    <a href="/all-lots.php?catId=<?= $cat['id']; ?>"><?= $cat['name']; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <div class="container">
        <section class="lots">
            <h2>Все лоты в категории <span>«<?= $category['name']; ?>»</span></h2>
            <ul class="lots__list">
                <?php foreach ($lots as $lot): ?>
                    <li class="lots__item lot">
                        <div class="lot__image">
                            <img src="<?= $lot['image'] ?? null; ?>" width="350"
                                 height="260"
                                 alt="<?= $lot['name'] ?? null; ?>">
                        </div>
                        <div class="lot__info">
                            <span class="lot__category"><?= $lot['category'] ?? null; ?></span>
                            <h3 class="lot__title"><a class="text-link" href="lot.php?id=<?= $lot['id'] ?>"><?= $lot['name'] ?? null; ?></a>
                            </h3>
                            <div class="lot__state">
                                <div class="lot__rate">
                                    <span class="lot__amount">Стартовая цена</span>
                                    <span class="lot__cost"><?= price_format($price = $lot['start_price'] ?? null); ?></span>
                                </div>
                                <div class="lot__timer timer <?= is_timer_finishing('tomorrow', 1) ? 'timer--finishing' : ''; ?>">
                                    <?= time_to_end('tomorrow'); ?>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <ul class="pagination-list">
            <li class="pagination-item pagination-item-prev"><a>Назад</a></li>
            <li class="pagination-item pagination-item-active"><a>1</a></li>
            <li class="pagination-item"><a href="#">2</a></li>
            <li class="pagination-item"><a href="#">3</a></li>
            <li class="pagination-item"><a href="#">4</a></li>
            <li class="pagination-item pagination-item-next"><a href="#">Вперед</a></li>
        </ul>
    </div>
</main>