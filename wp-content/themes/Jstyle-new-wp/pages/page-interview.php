<?php
/*
template name: interview
*/
__('interview', 'tcd-w');
get_header();
?>
<main class="l-main">
    <?php get_template_part('template-parts/page-header'); ?>
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <div id="index_header_search">
        <div class="inner">
            <form action="http://tcdwp.info/tcd050/" method="get" class="columns-4">
                <input type="hidden" name="post_type" value="introduce">
                <div class="header_search_inputs header_search_keywords">
                    <input type="text" id="header_search_keywords" name="search_keywords" placeholder="キーワード" value>
                    <input type="hidden" name="search_keywords_operator" value="or">
                    <ul class="search_keywords_operator" style="display: block;">
                        <li class="">and</li>
                        <li class="active">or</li>
                    </ul>
                </div>
                <div class="header_search_inputs">
                    <select name="search_cat1" id="header_search_cat1" class style="display: none;">
                        <option value="0" selected="selected">国から選ぶ</option>
                        <option class="level-0" value="167">アメリカ</option>
                        <option class="level-0" value="168">カナダ</option>
                        <option class="level-0" value="174">オーストラリア</option>
                        <option class="level-0" value="182">ニュージーランド</option>
                        <option class="level-0" value="189">イギリス</option>
                    </select>
                    <a class="chosen-single">

                        <div>
                            <b>

                            </b>
                        </div>
                    </a>
                    <div class="chosen-drop" style="opacity: 0; height: 0px; clip: auto;">
                        <div class="chosen-search">
                            <input class="chosen-search-input" type="text" autocomplete="off" readonly>
                        </div>
                        <ul class="chosen-results"></ul>
                    </div>
                </div>
                <div class="header_search_inputs">
                    <select name="search_cat2" id="header_search_cat2" class style="display: none;">
                    <option value="0" selected="selected">目的から探す</option>
                    <option class="level-0" value="219">短期留学</option>
                    <option class="level-0" value="220">中期留学</option>
                    <option class="level-0" value="222">長期留学</option>
                    <option class="level-0" value="223">ワーキングホリデー</option>
                    <option class="level-0" value="224">語学留学</option>
                    <option class="level-0" value="225">海外大学入学/編入</option>
                    <option class="level-0" value="228">イベント留学</option>
                    <option class="level-0" value="229">お稽古留学</option>
                </select>
                <a class="chosen-single">
                    <div>
                        <b>


                        </b>
                    </div>
                </a>
                <div class="chosen-drop" style="opacity: 0; height: 0px; clip: auto;">
                    <div class="chosen-search">
                        <input class="chosen-search-input" type="text" autocomplete="off" readonly>
                    </div>
                    <ul class="chosen-results"></ul>
                </div
            <div class="header_search_inputs header_search_button">
                <input type="submit" id="header_search_submit" value="検索する">
            </div>
        </form>
    </div>

</main>

<?php get_footer(); ?>
