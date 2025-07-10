<?php get_header(); ?>

<section class="details">
  <div class="details__outer">
    <div class="swiper-container-5">
      <div class="swiper-wrapper">
        <?php
  $goodsImgs = get_field('goods-img-list');
  if ($goodsImgs):
    foreach ($goodsImgs as $goodsImg): ?>
        <div class="swiper-slide goods"><img
            src="<?php echo $goodsImg['goods-img']; ?>"
            alt="" class="details__img"></div>
        <?php
endforeach;
endif;
?>
      </div>
      <div class="swiper-pagination-5"></div>
    </div>
    <div class="details__inner--right">
      <h2 class="details__name"><?php the_title() ?>
      </h2>
      <p class="details__sub-name"><?php the_field('goods-engTitle') ?>
      </p>
      <table class="details__table">
        <?php
  $goodsPrices = get_field('goods-price-list');
  if ($goodsPrices):
    foreach ($goodsPrices as $goodsPrice): ?>
        <tr class="details__tr">
          <th class="details__th"><?php echo $goodsPrice['goods-count']; ?>
          </th>
          <td class="details__td"><span class="details__span"><?php echo $goodsPrice['goods-price']; ?>円</span>(税込)
          </td>
        </tr>
        <?php
              endforeach;
              endif;
            ?>
      </table>
      <div class="details__select">
        <select class="details__select--inner" name="goods-count" id="">
          <?php if ($goodsPrices):
      foreach ($goodsPrices as $goodsPrice): ?>
          <option value=""><?php echo $goodsPrice['goods-count']; ?>
          </option>
          <?php
                endforeach;
                endif;
              ?>
        </select>
        <p class="label"><?php echo $goodsPrices[0]['goods-count']; ?></p>
        <span class="details__arrow"></span>
      </div>
      
      <div class="details__wrap">
        <div class="details__number">
          <select class="details__number--inner" name="" id="">
            <option value="">1</option>
            <option value="">2</option>
          </select>
          <p class="label-num">1</p>
          <span class="details__arrow--number"></span>
        </div>
        <a href="<?php the_field('goods-url') ?>" class="details__button">カートに入れる</a>
      </div>
		<p class="details__dummy"></p>
    <script type='text/javascript' src='<?php the_field("goods-url") ?>' charset='euc-jp'></script>

		<?php /* if( is_single(249)):?>
     <script type='text/javascript' src='https://yorunoume.shop-pro.jp/?mode=cartjs&pid=161615356&style=normal_gray&name=n&img=n&expl=n&stock=y&price=n&optview=n&inq=n&sk=n' charset='euc-jp'></script>
		<?php elseif( is_single(203)):?>
<script type='text/javascript' src='https://yorunoume.shop-pro.jp/?mode=cartjs&pid=161613086&style=normal_gray&name=n&img=n&expl=n&stock=y&price=n&optview=n&inq=n&sk=n' charset='euc-jp'></script> 
		<?php elseif( is_single(223)):?>
<script type='text/javascript' src='https://yorunoume.shop-pro.jp/?mode=cartjs&pid=161613678&style=normal_gray&name=n&img=n&expl=n&stock=y&price=n&optview=n&inq=n&sk=n' charset='euc-jp'></script> 
		<?php elseif(is_single(244)):?>
<script type='text/javascript' src='https://yorunoume.shop-pro.jp/?mode=cartjs&pid=161612009&style=normal_gray&name=n&img=n&expl=n&stock=y&price=n&optview=n&inq=n&sk=n' charset='euc-jp'></script>
		<?php elseif( is_single(183)):?>
<script type='text/javascript' src='https://yorunoume.shop-pro.jp/?mode=cartjs&pid=161611018&style=normal_gray&name=n&img=n&expl=n&stock=y&price=n&optview=n&inq=n&sk=n' charset='euc-jp'></script> 
		<?php elseif( is_single(215)):?>
<script type='text/javascript' src='https://yorunoume.shop-pro.jp/?mode=cartjs&pid=161613048&style=normal_gray&name=n&img=n&expl=n&stock=y&price=n&optview=n&inq=n&sk=n' charset='euc-jp'></script> 
		<?php elseif( is_single(229)):?>
<script type='text/javascript' src='https://yorunoume.shop-pro.jp/?mode=cartjs&pid=161612583&style=normal_gray&name=n&img=n&expl=n&stock=y&price=n&optview=n&inq=n&sk=n' charset='euc-jp'></script>
		<?php elseif( is_single(237)):?>
<script type='text/javascript' src='https://yorunoume.shop-pro.jp/?mode=cartjs&pid=161607889&style=normal_gray&name=n&img=n&expl=n&stock=y&price=n&optview=n&inq=n&sk=n' charset='euc-jp'></script> 
		<?php endif; */ ?>

      <h3 class="details__subtitle">・商品の中身・</h3>
      <table class="details__contents">
        <?php
  $goodsContents = get_field('goods-contents-list');
  if ($goodsContents):
    foreach ($goodsContents as $goodsContent): ?>
        <tr class="details__contents--tr">
          <th class="details__contents--th"><?php echo $goodsContent['goods-contents-name']; ?>
          </th>
          <td class="details__contents--td"><?php echo $goodsContent['goods-contents']; ?>
          </td>
        </tr>
        <?php
              endforeach;
              endif;
            ?>
      </table>
      <h3 class="details__subtitle">・商品説明・</h3>
      <p class="details__text">
        <?php the_field('goods-desc') ?>
      </p>
      <table class="details__sweets">
        <?php
  $yokans = get_field('yokan');
  if ($yokans):
    foreach ($yokans as $yokan): ?>
        <tr>
          <th class="details__sweets--th"><img
              src="<?php echo $yokan['yokan-img']; ?>"
              alt="" class="details__sweets--img-first"></th>
          <td class="details__sweets--td">
            <span class="details__sweets--span"><?php echo $yokan['yokan-name']; ?></span><br>
            <?php echo $yokan['yokan-desc']; ?>
          </td>
        </tr>
        <?php
              endforeach;
              endif;
            ?>
      </table>
    </div>
  </div>
</section>

<section class="online-shop">
  <h2 class="online-shop__title">オンラインショップご利用案内<span class="online-shop__arrow"></span><span
      class="online-shop__arrow--bottom"></span></h2>
  <span class="online-shop__border"></span>
  <div class="online-shop__container">
    <div class="online-shop__container--left">
      <h3 class="online-shop__item">包装紙・のしについて</h3>
      <p class="online-shop__text">れん永昌堂では、ご用途にあわせた掛け紙や、のしをご用意いたします。表書きや贈り主様のお名前も記入いたしますので、ショッピングカートまたは<a href="contact"
          class="online-shop__span">お問い合わせフォーム</a>よりお気軽にお申し付けください。</p>
      <h3 class="online-shop__item">お支払い方法</h3>
      <p class="online-shop__text">クレジットカード払い、代金引換、銀行振込、郵便振替（手数料なし）をご用意しております。お客様のご希望に合わせて各種ご利用ください。郵便振替は代金先払いです。ご注文後、ご入金の確認が取れ次第商品を手配いたします。</p>
      <h3 class="online-shop__item">代金引換</h3>
      <p class="online-shop__text">
        ヤマト運輸にて発送いたします。配達員に商品と引き換えに代金（商品代金＋送料＋代引手数料）をお支払いください。別途消費税を申し受けます。代引手数料は一律550円です。
      </p>
      <h3 class="online-shop__item">銀行振込</h3>
      <p class="online-shop__text">
        金融機関名：北陸銀行 　支店名：山代支店<br>
        口座種別：普通　<br>
        口座番号：1001061 <br>
        受取人名：有限会社　れん永昌堂　代表取締役　れん智一　
      </p>
      <h3 class="online-shop__item">営業時間</h3>
      <p class="online-shop__text">
        営業時間は9:00〜17：00です。商品の配送手配、及び電話、FAX、E-mailでのご連絡は営業時間内での対応となります。<br>
        年末年始（12/27～1/3）は定休日とさせていただきます。メー<br>ル・お電話でのお返事をお休みとさせていただきます。
      </p>
    </div>
    <div class="online-shop__container--right">
      <h3 class="online-shop__item">クレジットカード決済</h3>
      <p class="online-shop__text">
        「VISA」「Master」「JCB」「Diners Club」「AMEX」マークの入っているクレジットカードはすべてご利用いただけます。
      </p>
      <h3 class="online-shop__item">送料（クロネコヤマト）</h3>
      <p class="online-shop__text">
        ※送料は10％の標準税率が適用されます。表示金額は税込です。
      </p>
      <div class="guide__scroll">
        <table class="guide__table--online">
          <tr class="guide__tr">
            <th class="guide__th">5,000円以下</th>
            <td class="guide__td">990円</td>
          </tr>
          <tr class="guide__tr">
            <th class="guide__th">5,001円~10,000円</th>
            <td class="guide__td">1,210円</td>
          </tr>
          <tr class="guide__tr">
            <th class="guide__th">10,001円~20,000円</th>
            <td class="guide__td">1,450円</td>
          </tr>
          <tr class="guide__tr">
            <th class="guide__th">20,001円~</th>
            <td class="guide__td">1,670円</td>
          </tr>
        </table>
      </div>
      <div class="guide__scroll--arrow"></div>
      <h3 class="online-shop__item">返品・交換</h3>
      <p class="online-shop__text">
        当社の商品は品質管理には十分留意しておりますが、万一、破損、不良、もしくは品質に問題のあった場合には、商品をお取り換えいたします。また、ご注文の品と異なった場合もお取り換えいたします。お電話でお問い合わせください。
      </p>
      <h3 class="online-shop__item">連絡先</h3>
      <h4 class="online-shop__name--text">瑓永昌堂</h4>
      <p class="online-shop__text--middle">
        〒922-0242 石川県加賀市山代温泉18-60-8
      </p>
      <p class="online-shop__text--bottom">
        電話番号でのお問い合わせ：0761-76-1480（9:00〜17:00）<br>
        メールでのお問い合わせ：<a href="contact" class="online-shop__link">お問い合わせフォームへ</a>
      </p>
    </div>
  </div>
</section>

<?php get_footer();
