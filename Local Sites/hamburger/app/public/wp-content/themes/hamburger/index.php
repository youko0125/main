<?php get_header();?>
            <div class="c-image c-image-text"  style="background-image: url(<?php the_post_thumbnail_url(); ?>)" alt="ダミーサイト"><h3 >ダミーサイト</h3></div>
            

            <main class="l-main">
                <div class="c-main">       
                    <!-- <img class="c-sample "src="<?php echo get_template_directory_uri();?>/css/img/takeout.png"/> -->
                 <div class="c-main-img "> 
                 <?php
                                        
                            // 指定したカテゴリーの ID を取得
                            $category_id = get_cat_ID( 'TakeOut' );  //引数はカテゴリー名を入れる
                            $category_link = get_category_link( $category_id);  // このカテゴリーの URL を取得
                            $img = get_field('TakeOut','category'.'_'.$category_id);
                            $custom_fields= get_post_custom( $post_id ); // カスタムフィールド取得
                            $thumb = get_the_post_thumbnail($post->ID); // アイキャッチ画像取得
                           
                        ?>
                        <!-- このカテゴリーへのリンクを出力  -->
                        <img src="<?php echo $img['url'];  ?>" alt="<?php echo $category_id ?>"class="c-sample" >   
                        
                   <p>Take Out</p>
                           <div class="c-main_inner">
                               <div class="c-inner ">
                                   <h4 class="inner_list ">Take OUT</h4>
                                   <p class="inner-text c-font-color ">当店のテイクアウトで利用できる商品を掲載しています</p>
                                </div>
                               <div class="c-item">
                                   <h4 class="inner_list ">Take OUT</h4>
                                   <p class="inner-text c-font-color ">当店のテイクアウトで利用できる商品を掲載しています</p>
                               </div>
                           </div>
                       </div>
                      
                       <div class="c-main-img ">
                     
                           <!-- <img class="c-EatIn "src="<?php echo get_template_directory_uri();?>/css/img/EatIn.png"/> -->
                           <p>Eat In</p>
                           <?php
                           $category_id = get_cat_ID( 'EatIn' );
                           $category_link = get_category_link( $category_id );
                           $img = get_field('EatIn','category'.'_'.$category_id);
                           $custom_fields= get_post_custom( $post_id ); // カスタムフィールド取得
                           $thumb = get_the_post_thumbnail($post->ID); // アイキャッチ画像取得
                           ?>
                       
                        <img src="<?php echo $img['url'];  ?>" alt="<?php echo $category_id ?>"class="c-sample" > 


                           <div class="c-main_inner">
                               <div class="c-inner ">
                                   <h4 class="inner_list ">Take OUT</h4>
                                   <p class="inner-text c-font-color ">当店のテイクアウトで利用できる商品を掲載しています</p>
                               </div>
                               <div class="c-item ">
                                   <h4 class="inner_list ">Take OUT</h4>
                                   <p class="inner-text c-font-color ">当店のテイクアウトで利用できる商品を掲載しています</p>
                               </div>
                           </div>
                       </div>
                   </div>
               </main>
               <div class="c-map">
                   <div class="c-map_heading">
                       <span>見出しが入ります</span>
                       <div class="c-map_text">
                           <p> テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                               テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。 テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                           </p>
                       </div>
                   </div>
               </div>
           </div> 
           <?php get_sidebar();?>
       </div>
       <!-- <script src="js/script.js "></script> -->
   <?php get_footer();?> 

 