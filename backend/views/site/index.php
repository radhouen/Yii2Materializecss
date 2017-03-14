<?php
use yii\helpers\Url;
 use scotthuangzl\googlechart\GoogleChart;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
<h3><span class="glyphicon glyphicon-stats"></span> Statistiques</h3>
<div class="row">
    <a href="<?= Url::toRoute(['classe/index'])?>">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">classes</span>
              <span class="info-box-number"><?php echo $classCount; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div></a>
        <!-- /.col -->
      <a href="<?= Url::toRoute(['professeur/index'])?>">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-inbox"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">messages</span>
              <span class="info-box-number">5</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div></a>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        <a href="<?= Url::toRoute(['professeur/index'])?>">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-male"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">professeur(e)s</span>
              <span class="info-box-number"><?php echo $ProfCount; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div></a>
        <!-- /.col -->
        <a href="<?= Url::toRoute(['eleve/index'])?>">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">élèves</span>
              <span class="info-box-number"><?php echo $eleveCount; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div></a>
        <!-- /.col -->
      </div>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Area Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            <?php
           $a=11;
            echo GoogleChart::widget(array('visualization' => 'PieChart',
                'data' => array(
                    array('Task', 'Hours per Day'),
                    array('première année', $a),
                    array('deuxième année', 2),
                    array('troisième année', 2),
                    array('quatérième année', 2),
                    array('cinqième année', 7),
                    array('sixième année', 7)
                ),
                'options' => array('title' => 'nombre des élèves par classe')));
                ?>
                </div></div></div>
        <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Area Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            <?php
                 echo GoogleChart::widget(array('visualization' => 'LineChart',
                'data' => array(
                    array('Year', 'Sales', 'Expenses'),
                    array('2004', 1000, 400),
                    array('2005', 1170, 460),
                    array('2006', 660, 1120),
                    array('2007', 1030, 540),
                ),
                'options' => array(
                    'title' => 'My Company Performance2',
                    'titleTextStyle' => array('color' => '#FF0000'),
                    'vAxis' => array(
                        'title' => 'Scott vAxis',
                        'gridlines' => array(
                            'color' => 'transparent'  //set grid line transparent
                        )),
                    'hAxis' => array('title' => 'Scott hAixs'),
                    'curveType' => 'function', //smooth curve or not
                    'legend' => array('position' => 'bottom'),
                )));
                ?></div></div>
                </div> </div></section>      

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
