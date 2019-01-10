<?php $id = get_the_ID() ?>
<?php $start_it_title_section_services = get_field('start_it_title_section_services', $id); ?>
<?php $start_it_section_services_description = get_field('start_it_section_services_description', $id); ?>
<?php $start_it_services_items = get_field('start_it_services_items', $id); ?>
<section id="services" class="services pt-10">
                <div class="container">
                    <div class="section-title">
                        <h2><?= $start_it_title_section_services ?></h2>
                        <p><?= $start_it_section_services_description ?></p>
                    </div>
                    <?php if(is_array($start_it_services_items)) { ?>
                        <div class="row">
                            <?php foreach($start_it_services_items as $item) { ?>
                                <div class="col-lg-4 col-md-6">
                                    <div class="servicebox">
                                        <div class="srv_desc">
                                            <h5 class="count"><?= $item['count'] ?></h5>
                                            <h4><a href="<?= $item['link'] ?>"><?= $item['title'] ?></a></h4>
                                            <p><?= $item['text'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </section>