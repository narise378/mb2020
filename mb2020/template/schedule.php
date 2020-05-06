<section class="schedule">
    <div class="container">
        <div class="schedule__wrap wow fadeInUp" data-wow-delay="1s">
            <h2 class="schedule__title">SCHEDULE</h2>
            <?php if(get_field('repeat_schedule', 'Options')): ?>
                <ul class="schedule__lists">
                    <?php while(the_repeater_field('repeat_schedule', 'Options')): ?>
                    <li class="schedule__list">
                        <p class="schedule__list--time"><?php the_sub_field('date')?></p>
                        <p class="schedule__list--starting"><?php the_sub_field('start')?></p>
                        <p class="schedule__list--location"><?php the_sub_field('location')?></p>
                        <div class="schedule__list--ticket">
                            <a href="<?php the_sub_field('link')?>"><?php the_sub_field('link_text')?></a>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
            <?php else: ?>
                <section class="schedule">
                    <div class="container">
                        <div class="schedule__wrap">
                            <h2 class="schedule__title">SCHEDULE</h2>
                            <ul class="schedule__list">
                                <li>
                                    <div class="schedule-list__location">現在予定されている公演はありません</div>
                                    <div class="schedule-list__ticket">
                                        <a href="">公演情報を受け取る</a>
                                    </div>
                                </li>
                            </ul>
                        </div><!--schedule-wrap-->
                    </div><!--container-->
                </section><!--schedule-->
            <?php endif; ?>
        </div><!--schedule-wrap-->
    </div><!--base-inner-->

    <div class="schedule__btns wow" data-wow-delay="1.6s">
        <a href="http://localhost/mb2020_reproduction/inquiry/" class="contactinfo-btn">
            <button class="btn contact-btn">お問い合わせ</button>
        </a>
        <a href="#" class="ticketinfo-btn">
            <button class="btn ticket-btn">チケット予約はこちら！</button>
        </a>
    </div>
</section><!--schedule-->