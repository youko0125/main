<?php get_header();?>
        <main>
            <div class="c-archive-image">
                <h1>search:</h1>
            </div>
            <div class="p-content">
                <article>
                    <div class="p-article__title">
                        <h2>小見出しが入ります</h2>
                        <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                    </div>
                        <?php
                        if( have_posts() ) :
                            while( have_posts() ) :
                                the_post(); ?>
                                     <!-- 繰り返し処理する内容 -->
                                     <h3 class="p-lead"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            <!-- <h3>チーズバーガー</h3> -->
                                            <?php the_excerpt(); ?>
                                            <h4>見出しが入ります<a href="<?php the_permalink(); ?>"><?php the_title(); ?></h4>
                                            <span>小見出しが入ります</span>
                                            <!-- <p>見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。</p> -->
                                            <a href="<?php the_permalink(); ?>">
                                            <?php if( has_post_thumbnail()): ?>
                                            <?php the_post_thumbnail('medium'); ?>
                                            <?php else: ?>
                                                <img sre="<?php echo get_template_directory_uri(); ?>/css/image/bottom.png">
                                                <?php endif; ?>
                                            </a>
                                            <div class="c-button_wrapper">
                                                <button class="button-top">詳しく見る</button>
                                            </div>
                                            <div class="c-mune-top"></div>
                                        </h3>
                                <?php endwhile; ?>
                            <?php else: ?>
                                <!-- 投稿データがない場合表示される部分 -->
                            <?php endif; ?>
                    <div class="p-lead">
                        <h3>チーズバーガー</h3>
                        <h4>見出しが入ります</h4>
                        <span>小見出しが入ります</span>
                        <p>見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。</p>
                        <div class="c-button_wrapper">
                            <button class="button-top">詳しく見る</button>
                        </div>
                        <div class="c-mune-top"></div>
                    </div>
                    <div class="p-lead">
                        <h3>チーズバーガー</h3>
                        <h4>見出しが入ります</h4>
                        <span>小見出しが入ります</span>
                        <p>見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。</p>
                        <div class="c-button_wrapper">
                            <button class="button-top">詳しく見る</button>
                        </div>
                        <div class="c-mune-top">
                        </div>
                    </div>
                    <div class="p-lead">
                        <h3>チーズバーガー</h3>
                        <h4>見出しが入ります</h4>
                        <span>小見出しが入ります</span>
                        <p>見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。</p>
                        <div class="c-button_wrapper">
                            <button class="button-top">詳しく見る</button>
                        </div>
                        <div class="c-mune-top">
                        </div>
                    </div>
                    <div class="p-lead">
                        <h3>チーズバーガー</h3>
                        <h4>見出しが入ります</h4>
                        <span>小見出しが入ります</span>
                        <p>見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。</p>
                        <div class="c-button_wrapper">
                            <button class="button-top">詳しく見る</button>
                        </div>
                        <div class="c-mune-top">
                        </div>
                    </div>
                    <div class="p-lead">
                        <h3>チーズバーガー</h3>
                        <h4>見出しが入ります</h4>
                        <span>小見出しが入ります</span>
                        <p>見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。見出しが入ります。</p>
                        <div class="c-button_wrapper">
                            <button class="button-top">詳しく見る</button>
                        </div>
                        <div class="c-mune-top">
                        </div>
                    </div>
                </article>
            </div>
            <div class="example-wapper">
                <div class="example">
                    <ul>
                        <li class="example-list">page 1/10</li>
                        <li class="page1">&lt;&lt;</li>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <li>8</li>
                        <li>9</li>
                        <li class="page1">&gt;&gt;</li>
                    </ul>
                </div>
            </div>
            <div class="flex">
                <span class="sp">&lt;&lt;前へ</span>
                <span class="sp">次へ&gt;&gt;</span>
            </div>
        </main>
    </div>
    </body>
    <?php get_sidebar();?>
</div>
<?php get_footer();?> 