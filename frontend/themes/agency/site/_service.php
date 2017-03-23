<?php if (isset($services) && count($services)): ?>
    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">

                    <h2 class="section-heading">Services</h2>

                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row text-center">
                <?php /** @var  $service \backend\models\Service */ foreach ($services as $service): ?>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa <?= $service->icon ?> fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading"> <?= $service->name ?> </h4>
                    <p class="text-muted"><?= $service->description ?></p>
                </div>
               <?php endforeach; ?>
            </div>
            <?php if (isset($settings) && trim($settings->head)!=""): ?>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted"><?= $settings->sub ?></p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>