<?php
/** @var Page $page */

if ($page->layout) {
    $this->layout = "//layouts/{$page->layout}";
}

$this->title = $page->title;
$this->breadcrumbs = [
    Yii::t('HomepageModule.homepage', 'Pages'),
    $page->title
];
$this->description = !empty($page->description) ? $page->description : Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = !empty($page->keywords) ? $page->keywords : Yii::app()->getModule('yupe')->siteKeyWords
?>
<?php $this->widget('application.modules.slide.widgets.SlideWidget', []); ?>
<div class="banner1">
    <div class="row">
        <div class="grid_6">
            <div class="box1 first wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: none;">
                <div class="label">
                    <img src="themes/default/web/images/page1_img1.png" alt="">
                </div>
                <h2>"Усадьба Ника"
                    <br>
                    Оздоровительный центр</h2>
                                        <span class="heading"><a
                                                href="/#">Подробнее</a></span>
                <p>Lorem ipsum dolor sit amet, conc tetu
                    er adipi scing. Praesent vestibuum mol</p>
            </div>
        </div>

        <div class="grid_6">
            <div class="box1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
                <div class="label">
                    <img src="themes/default/web/images/page1_img2.png" alt="">
                </div>
                <h2>Досуг</h2>
                                        <span class="heading"><a
                                                href="/blogs">Подробнее</a></span>
                <p>Praesent vestibuum molestie lacuiirhs. Aenean non ummy hendreriauris.
                    Phasellllus porta.</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="grid_12">
        <div style="margin-top:20px;text-align: center;font-weight: bold;font-size: 30px">
            Дополнительные услуги
        </div>
        <div style="text-align: center">
            <table class="table-main-price">
                <thead>
                <tr>
                    <th>Наименование услуги</th>
                    <th>Цена</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Услуга</td>
                    <td> 100000р</td>
                </tr>
                <tr>
                    <td>Услуга</td>
                    <td> 100000р</td>
                </tr>
                <tr>
                    <td>Услуга</td>
                    <td> 100000р</td>
                </tr>
                <tr>
                    <td>Услуга</td>
                    <td> 100000р</td>
                </tr>
                <tr>
                    <td>Услуга</td>
                    <td> 100000р</td>
                </tr>
                <tr>
                    <td>Услуга</td>
                    <td> 100000р</td>
                </tr>
                <tr>
                    <td>Услуга</td>
                    <td> 100000р</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
