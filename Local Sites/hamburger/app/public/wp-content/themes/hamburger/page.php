<?php get_header();?>
        <div class="c-single">
        
            <img class="c-page-img" src="<?php echo get_template_directory_uri();?>/css/img/shop.png" alt="" width="1160">
            <h1><?php the_title(); ?></h1>
        </div>
        <div class="p-content">
            <article class="wapper">
                <!-- ループ処理 -->
                <?php if( have_posts() ) :?>
                   <?php while( have_posts() ) :
                        the_post(); ?>
                        
                        <div id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
                        
                            <?php the_content(); ?>
                            
                        </div>
                        <!-- <?php the_post_thumbnail(); ?>
                        <?php the_post_thumbnail(); ?> --> 
            </article>
           
            <div class="c-post-wrapper">
                <div class="c-post"> 
                </div>
            </div>
            <div class="c-text-wrapper ">
                <div class="c-post-right ">
                   
                    </div>
            </div>
            <div class="c-square-wrapper ">
                <div class="c-square c-font-color">
                    <pre><code>
                &lt;html&gt;
                    &lt;head&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                    &lt;/body&gt;
                &lt;/html&gt;
                </code></pre>
                </div>
            </div>
            <div class="c-table ">
                <table>
                    <tr>
                        <td class="td-table ">テーブル</td>
                        <td>テーブル</td>
                    </tr>
                    <tr>
                        <td class="td-table ">テーブル</td>
                        <td>テーブル</td>
                    </tr>
                    <tr>
                        <td class="td-table ">テーブル</td>
                        <td>テーブル</td>
                    </tr>
                    <tr>
                        <td class="td-table ">テーブル</td>
                        <td>テーブル</td>
                    </tr>
                </table>
            </div>
            <div class="c-button2 ">
                <button type="button ">ボタン</button>
            </div>
            <div class="c-heading-text ">
                <p>boldboldboldboldboldboldbold</p>
            </div>
            <?php endwhile; ?>
         <?php endif; ?> 
         <div class="error">
         </div>  
    <p>お探しの記事は見つかりませんでした。</p>
        </div>
    </div>
    <?php get_sidebar();?>
</div>
<?php get_footer();?> 
</div>
<script src="js/script.js "></script>
</body>
</html>