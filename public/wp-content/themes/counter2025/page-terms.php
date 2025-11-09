<?php get_header(); ?>
    <div class="p-terms">
        <div class="cm-block-header">
            <div class="l-container">
                <div class="cm-block-header__title">
                    <p class="cm-block-header__en">Terms</p>
                    <h1 class="cm-block-header__ja">利用規約</h1>
                </div>
                <ul class="cm-block-header__bc">
                    <li><a href="<?= home_url() ?>/">TOP</a></li>
                    <li><span>Terms</span></li>
                </ul>
            </div>
        </div>
        <div class="l-container l-container--md">
            <div class="p-terms__wrap">
                <h2 class="c-heading-text">1. 著作権について</h2>
                <p>本ウェブサイト上のすべてのコンテンツに関する著作権は、特段の表示のない限り当社に帰属しております。そのすべてまたは一部を、法律にて定められる私的使用等の範囲を超えて、無断で複製、転用、改変、公衆送信、販売などの行為を行うことはできません。</p>
                <h2 class="c-heading-text">2. 商標について</h2>
                <p>本ウェブサイトで使用されている商標・ロゴマーク・商号は、当社の登録商標または商標です。商標法またはその他の法律により認められている場合を除き、当社の事前の承諾なしに、これらを使用等することはできません。</p>
                <h2 class="c-heading-text">3. 免責事項</h2>
                <p>当社は、本ウェブサイトに掲載されている内容について、その正確性、有用性、確実性について保証するものではなく、一切の責任を負わないものといたします。 当社は、予告なしに、本ウェブサイトの運営を中断または中止、掲載内容を修正、変更、削除する場合がありますが、それらによって生じるいかなる損害についても一切責任を負いません。また本ウェブサイトのご利用によりお客様または第三者のハードウェアおよびソフトウェア上に生じた事故、データの毀損・滅失等の損害について一切責任を負いません。</p>
                <h2 class="c-heading-text">4. リンクについて</h2>
                <p>営利、非営利、イントラネットを問わず、本ウェブサイトへのリンクは自由です。 ただし、公序良俗に反するサイトなど、当社の信用、品位を損なうサイトからのリンクはお断りします。また事前事後にかかわらず、その他の理由によりリンクをお断りする場合もあります。</p>
            </div>
        </div>
        <div class="p-terms__media">
            <div class="l-container">
                <div class="u-border"></div>
            </div>
            <div class="l-container l-container--md">
                <?php get_template_part('template/cm-block-media') ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>