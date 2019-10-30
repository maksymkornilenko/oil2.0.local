<?php
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */

$this->title = Yii::$app->params['mainPage']['title'];
?>
<!--Home Sections-->

<section id="hello" class="home bg-mega">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 header_center">
                <div class="row hide25">
                    <div class="col-md-4 col-sm-4 m-top-300 m-top-header-media1">
                        <div class="row">
                            <h2 class="head2">Kosmetisches Kokosöl</h2>
                            <p class="text-def">Es stellt spröde Haare wieder her und regt schnelles Haarwachstum an.</p>
                            <button class="btn btn-success m-top-50" data-toggle="modal" data-target="#order-modal"><?php echo Yii::t('app', 'open order modal btn text'); ?></button>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4"></div>
                    <div class="col-md-4 col-sm-4 m-top-400 m-top-header-media2">
                        <div class="row">
                            <p class="text-def">Macht die Haut weich, schützt vor trockener Haut und Ausschlägen.</p>
                            <p class="head2">Seidige Haare nach der ersten Anwendung!</p>
                        </div>
                    </div>
                </div>

                <div class="show425">
                    <div class="block-1-425">
                        <p class="head2">Kosmetisches Kokosöl</p>
                        <p class="text-def">Es stellt spröde Haare wieder her und regt schnelles Haarwachstum an.</p>
                        <button class="btn btn-success m-top-50" data-toggle="modal" data-target="#order-modal"><?php echo Yii::t('app', 'open order modal btn text'); ?></button>
                        <p class="head2">Seidige Haare nach der ersten Anwendung!</p>
                        <p class="text-def">Macht die Haut weich, schützt vor trockener Haut und Ausschlägen.</p>
                    </div>
                </div>
            </div>
        </div><!--End off row-->
    </div><!--End off container -->
</section> <!--End off Home Sections-->


<section id="block-2" class="">
    <div class="row">
        <div class="col-md-6 col-sm-6 block2-img-1">
            <div class="show425 head2 show425-block2-con-p-text1 col-md-12">
                <div class="container">
                    <h2 class="show425-block2-text-1 head2">Kokosöl hilft bei der Lösung von 90% aller Haut- und Haarproblemen</h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 pdn0">
            <div class="col-md-12 block2-img-2">
                <div class="show425 head2 col-md-12">
                    <div class="container">
                        <p class="show425-block2-text-2">Für Haare</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 block2-img-3">
                <div class="show425 head2 col-md-12">
                    <div class="container">
                        <p class="show425-block2-text-3">Für Haut</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--End off row-->

    <div class="container block2-con-m">
        <div class="container block2-con-m2">
            <div class="row m-0">

                <div class="col-md-6 col-sm-6 block2-con-p-text1">
                    <div class="head2 block2-con-text1">
                        Kokosöl hilft bei der Lösung von 90% aller Haut- und Haarproblemen
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 pdn0">
                    <div class="col-md-12 block2-con-p-text2">
                        <div class="head2 block2-con-text2">
                            Für Haare
                        </div>
                    </div>
                    <div class="col-md-12 block2-con-p-text3">
                        <div class="head2 block2-con-text3">
                            Für Haut
                        </div>
                    </div>
                </div>
            </div><!--End off row-->
        </div>
    </div>
</section> <!--End off Home Sections-->


<section class="block-btn m-top-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center m-top-30">
                <h2 class="head2">Nur noch 3 Tage 40% Rabatt!</h2>
                <button class="btn btn-success m-top-50" data-toggle="modal" data-target="#order-modal"><?php echo Yii::t('app', 'open order modal btn text'); ?></button>
            </div>
        </div>
    </div>
</section>


<section id="block-4" class="block-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="col-md-12 show425">
                    <div class="row">
                        <img src="/images/block4_left.jpg" class="show425-img" alt="" />
                    </div>
                </div>
                <h2 class="head2">Das Öl Maldives Dreams ist ein Komplex aus natürlichen Kokosölen in einem perfekten Verhältnis</h2>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="row">
                                <p class="head3">Fraktioniertes Kokosöl</p>
                                <p class="text-def">Fraktioniertes Öl beruhigt empfindliche gereizte Haut und verhindert die Bildung von Komedonen.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 show425-block2-con-row">
                            <p class="head3">Extra vergine</p>
                            <p class="text-def">Unraffiniertes kaltgepresstes Öl enthält ein Maximum an nützlichen Nährstoffen für die Haut- und Haarpflege.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="row">
                                <p class="head3">Ätherisches Kokosöl</p>
                                <p class="text-def">Verleiht das unglaubliche Aroma der Malediven, fördert die Entspannung und hilft, sich auf einer paradiesischen Insel zu fühlen.</p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 show425-block2-con-row">
                            <p class="head3">Vitamin E</p>
                            <p class="text-def">Natürliches Konservierungsmittel,
                                das die Haut nährt und vor äußeren Einflüssen schützt.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="block-5" class="">
    <div class="row">
        <div class="col-md-4 block-5-img-1"></div>
        <div class="col-md-4 block-5-img-2"></div>
        <div class="col-md-4 block-5-img-3"></div>
        <div class="block-5-img-1-2">
            <div class="block-5-img-1-2-text hide25">
                <h2 class="head2">Samtige und
                    elastische Haut</h2>
                <p class="text-def">Sie vergessen über Reizungen, Austrocknen und Hautschuppen. Ihre Haut wird wieder weich - sie strahlt Gesundheit und Jugend aus.</p>
            </div>
        </div>
        <div class="show425 block-5-425-text">
            <div class="container">
                <div class="col-md-12">
                    <p class="head2">Samtige und
                        elastische Haut</p>
                    <p class="text-def">Sie vergessen über Reizungen, Austrocknen und Hautschuppen. Ihre Haut wird wieder weich - sie strahlt Gesundheit und Jugend aus.</p>
                </div>
            </div>
        </div>
        <div class="block-5-img-2-2">
            <div class="block-5-img-2-2-text hide25">
                <p class="head2">Aktives Haarwachstum</p>
                <p class="text-def">Ihre Haare fallen nicht mehr aus und wachsen pro Monat um 3-5 cm! Sehr bald werden Sie echte Hollywood-Locken haben - lang und voluminös.</p>
            </div>
        </div>
        <div class="show425 block-5-425-text">
            <div class="container">
                <div class="col-md-12">
                    <p class="head2">Aktives Haarwachstum</p>
                    <p class="text-def">Ihre Haare fallen nicht mehr aus und wachsen pro Monat um 3-5 cm! Sehr bald werden Sie echte Hollywood-Locken haben - lang und voluminös.</p>
                </div>
            </div>
        </div>
        <div class="block-5-img-3-2">
            <div class="block-5-img-1-2-text hide25">
                <p class="head2">Starke gesunde Haare</p>
                <p class="text-def">Ihre gepflegten weichen und glänzenden Haare sehen wie in einer Shampoo- Werbung aus! Sie lassen sich leicht frisieren und halten lange das Volumen.</p>
            </div>
        </div>
        <div class="show425 block-5-425-text">
            <div class="container">
                <div class="col-md-12">
                    <p class="head2">Starke gesunde Haare</p>
                    <p class="text-def">Ihre gepflegten weichen und glänzenden Haare sehen wie in einer Shampoo- Werbung aus! Sie lassen sich leicht frisieren und halten lange das Volumen.</p>
                </div>
            </div>
        </div>
    </div><!--End off row-->

    <div class="container block-5-con-1">
        <div class="container block-5-con-2">
            <div class="row m-0 text-center">
                <div class="col-md-4 block-5-con-3 block-5-con-3-b">
                    <div class="block-5-con-4">
                        <p class="head2">Samtige und
                            elastische Haut</p>
                        <p class="text-def">Sie vergessen über Reizungen, Austrocknen und Hautschuppen. Ihre Haut wird wieder weich - sie strahlt Gesundheit und Jugend aus.</p>
                    </div>
                </div>
                <div class="col-md-4 block-5-con-3 block-5-con-3-a">
                    <div class="block-5-con-4">
                        <p class="head2">Aktives Haarwachstum</p>
                        <p class="text-def">Ihre Haare fallen nicht mehr aus und wachsen pro Monat um 3-5 cm! Sehr bald werden Sie echte Hollywood-Locken haben - lang und voluminös.</p>
                    </div>
                </div>
                <div class="col-md-4 block-5-con-3 block-5-con-3-b">
                    <div class="block-5-con-4">
                        <p class="head2">Starke gesunde Haare</p>
                        <p class="text-def">Ihre gepflegten weichen und glänzenden Haare sehen wie in einer Shampoo- Werbung aus! Sie lassen sich leicht frisieren und halten lange das Volumen.</p>
                    </div>
                </div>
            </div><!--End off row-->
        </div>
    </div>
</section> <!--End off Home Sections-->


<section id="block-6" class="block-6">
    <div class="container">
        <div class="row">
            <div class="col-md-12 block-circle">
                <div class="block-circle-content">
                    <h2 class="head2">Bewiesen</h2>
                    <p class="head3 block-6-c-c">Das Kokosöl verbessert den Zustand von Haaren, Gesichts- und Körperhaut. Nährt mit den Vitaminen A, E, C, Biotin und Zink.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="block-btn m-top-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center m-top-30">
                <h2 class="head2">Nur noch 3 Tage 40% Rabatt!</h2>
                <button class="btn btn-success m-top-50" data-toggle="modal" data-target="#order-modal"><?php echo Yii::t('app', 'open order modal btn text'); ?></button>
            </div>
        </div>
    </div>
</section>

<section id="block-7" class="block-7 m-top-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-bottom-40 text-center">
                <h2 class="head2">6 Gründe das Kokosöl Maldives Dreams zu kaufen</h2>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="col-md-12 text-center">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="row">
                                <p class="head3">0% chemische Stoffe</p>
                                <p class="text-def">Maldives Dreams ist ein 100% natürliches Kokosöl, ohne Zusätze oder chemische Konservierungsstoffe, nur reife Kokosnuss aus den Malediven.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <p class="head3">1 Mittel statt 6</p>
                            <p class="text-def">Das Kokosöl ersetzt Körperlotion, Sonnenschutz, Feuchtigkeitscreme, Balsam und eine Haarmaske. Kaufen Sie 1 Dose und vergessen Sie die anderen Mittel!</p>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <p class="head3">Das Ergebnis nach der ersten Anwendung</p>
                            <p class="text-def">Der sichtbare Effekt wird bereits nach einer Anwendung erzielt - die Haare werden glatter und glänzender. Rötungen und Trockenheit der Haut verschwinden.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-12" style="text-align: center">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="row">
                                <p class="head3">Hypoallergen</p>
                                <p class="text-def">Das Kokosöl löst nicht nur keine Allergien aus, sondern lindert auch allergische Reaktionen, die auf andere Weise hervorgerufen werden.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <p class="head3">Keine Gefahr für Kinder</p>
                            <p class="text-def">Das Öl ist für die Pflege der Babyhaut geeignet und kann von der Mutter während der Schwangerschaft und Stillzeit verwendet werden.</p>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <p class="head3">Fantastisches Aroma</p>
                            <p class="text-def">Das natürliche Aroma reifer Kokosnüsse regt die Rezeptoren an und verwandelt jede Körperpflege in eine kleine SPA-Sitzung.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="block-8" class="block-8">
    <div class="container">
        <div class="row">
            <div class="col-md-12 block-circle2">
                <div class="block-circle-content block-circle-content-2">
                    <h2 class="head2">Anwendung</h2>
                </div>
            </div>
            <div class="col-md-12 block-8-con">
                <div class="row">
                    <div class="col-md-3 col-sm-12 block-8-mt">
                        <div class="row">
                            <p class="head3">Als eigenes Mittel<br /><br /></p>
                            <p class="text-def">Statt eines Haarbalsams oder als Maske für 30-60 Minuten lang auf trockenes Haar auftragen, dann mit Shampoo ausspülen und den Effekt genießen. Für die Feuchtigkeit und Pflege der Körperhaut.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <p class="head3">Als Ingredient in jedem Produkt</p>
                        <p class="text-def">Fügen Sie dem Kokosöl vor dem Gebrauch Ihre kosmetischen Lieblingsmittel und ätherischen Öle hinzu, um das Ergebnis nach der Anwendung noch besser zu machen.</p>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <p class="head3">In den Schönheitsrezepten<br /><br /></p>
                        <p class="text-def">Kombinieren Sie es mit Avocado, Omega-3-Fettsäuren, Zucker und bereiten Sie wirksame Masken, Packungen und Peelings vor, die natürlich und ohne Konservierungsstoffe sind und die Sie nicht in Geschäften kaufen können.</p>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <p class="head3">Als Komponente einer SPA-Behandlung</p>
                        <p class="text-def">Fügen Sie 1-2 Esslöffel Öl in die Badewanne zum Entspannen oder zur Massage hinzu - sinnliches Vergnügen, Aroma und vollkommene Entspannung sind garantiert!</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>



<section class="block-btn m-top-50">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center m-top-30">
                <h2 class="head2">Nur noch 3 Tage 40% Rabatt!</h2>
                <button class="btn btn-success m-top-50" data-toggle="modal" data-target="#order-modal"><?php echo Yii::t('app', 'open order modal btn text'); ?></button>
            </div>
        </div>
    </div>
</section>



<section id="block-9" class="blog m-top-70 block-9">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <h2 class="head2" style="margin-bottom: 10px;">Europäische Qualitätsstandards</h2>
                <p class="head3" style="margin-top: 0px; margin-bottom: 30px;">Einzigartige Hightech-Produktion</p>
            </div>
            <div class="col-md-4 col-sm-6 gal-item">
                <a data-fancybox="gallery" href="/images/rama1.webp"><img src="/images/rama1.webp" alt=""></a>
            </div>
            <div class="col-md-4 col-sm-6 gal-item">
                <a data-fancybox="gallery" href="/images/rama2.webp"><img src="/images/rama2.webp" alt=""></a>
            </div>
            <div class="col-md-4 col-sm-6 gal-item">
                <a data-fancybox="gallery" href="/images/rama3.webp"><img src="/images/rama3.webp" alt=""></a>
            </div>
            <div class="col-md-4 col-sm-6 gal-item">
                <a data-fancybox="gallery" href="/images/rama4.webp"><img src="/images/rama4.webp" alt=""></a>
            </div>
            <div class="col-md-4 col-sm-6 gal-item">
                <a data-fancybox="gallery" href="/images/rama5.webp"><img src="/images/rama5.webp" alt=""></a>
            </div>
            <div class="col-md-4 col-sm-6 gal-item">
                <a data-fancybox="gallery" href="/images/rama6.webp"><img src="/images/rama6.webp" alt=""></a>
            </div>

        </div><!--End off row -->
    </div><!--End off container -->
</section><!-- End off Blog section-->

    <section class="block-btn m-top-50" id="sp">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center m-top-30">
                    <h2 class="head2">Zahlung und Lieferung</h2>
                    <p class="text-def">Wenn Sie das Kokosöl kaufen möchten, gehen Sie auf Bestellung aufgeben. Sie füllen das Formular aus, bekommen die Rechnung auf Ihre E-Mail-Adresse und bezahlen sie über PayPal. Sobald wir Ihre Zahlung erhalten, schicken wir das Öl an Ihre Adresse. Die Lieferung dauert 2 bis 5 Arbeitstage.</p>
                </div>
            </div>
        </div>
    </section>

<?php
Modal::begin([
    'header'=>'<h4>' .  Yii::t('app', 'modal header') . '</h4>',
    'id'=>'order-modal',
    'size'=>'modal-lg',
]);
?>
<div class="row">
    <div class="col-sm-12">
    <div class="row">
        <div class="col-md-8">
            <div class="row modal-order-item">
                <img src="/images/order-img.jpg" class="modal-order-img" alt=""> <?php echo Yii::t('app', 'Coconut oil'); ?>
            </div>
        </div>
        <div class="col-md-4 order-control-block">
            <div class="order-container">
            <span class="order-control order-minus">&nbsp;</span><span class="order-count">1</span><span class="order-control order-plus">&nbsp;</span><span class="order-total">17</span><span class="order-currency"><?php echo Yii::t('app', 'currency'); ?></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 order-summ-block text-right">
            <?php echo Yii::t('app', 'modal summ text'); ?> <span class="order-summ">22</span><?php echo Yii::t('app', 'currency'); ?>
        </div>
    </div>
</div>
    <div class="col-sm-12">

<?php
$form = ActiveForm::begin(['id' => 'order-form']);
echo $form->field($orderForm, 'name')->textInput();
echo $form->field($orderForm, 'email');
echo $form->field($orderForm, 'phone');
echo $form->field($orderForm, 'country');
echo $form->field($orderForm, 'city');
echo $form->field($orderForm, 'address');
echo $form->field($orderForm, 'count')->hiddenInput(['value' => 1])->label(false);
?>

                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('app', 'Send'), ['class' => 'btn btn-success', 'name' => 'send-order-button']) ?>
                    </div>
        <?php
        ActiveForm::end();
        ?>
    </div>
</div>
                <?php
echo "<div id='modalContent'></div>";
Modal::end();
